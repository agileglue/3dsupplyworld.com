<?php
class EM_Productlabels_Adminhtml_ProductlabelsController extends Mage_Adminhtml_Controller_Action
{
    protected function _initAction() {
            $this->loadLayout()
                    ->_setActiveMenu('productlabels/items')
                    ->_addBreadcrumb(Mage::helper('adminhtml')->__('Labels Manager'), Mage::helper('adminhtml')->__('Labels Manager'));

            return $this;
    }

    public function indexAction() {
            $this->_initAction();
			$this->getLayout()->getBlock('head')->setTitle(Mage::helper('productlabels')->__('Manage labels'));
            $this->renderLayout();
    }

    public function loadCondition($conditions)
    {
        $rule = Mage::getModel('rule/rule');
        $actionsArr = unserialize($rule->getActionsSerialized());
        if (!empty($actionsArr) && is_array($actionsArr)) {
            $rule->getActions()->loadArray($actionsArr);
        }
    }

    public function editAction() {
            $id     = $this->getRequest()->getParam('id');
            $label  = Mage::getModel('productlabels/productlabels');
          
            if($id){
                $label->load($id)->addAttributeToSelect();
      
            }
            $label->setData('variables',Zend_Json::encode($this->getVariables()));
            $label->setData('store',$this->getRequest()->getParam('store',0));
			if(!$label->getEnable())
				$label->setEnable(1);

            if ($label->getId() || $id == 0) {
                    $data = Mage::getSingleton('adminhtml/session')->getFormData(true);
                    if (!empty($data)) {
                            $label->setData($data);
                    }

                    Mage::register('productlabels_data', $label);

                    $this->loadLayout();
                    $this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);
					if($id)
						$this->getLayout()->getBlock('head')->setTitle(Mage::helper('productlabels')->__("Edit Label %s",$label->getName()));
					else
						$this->getLayout()->getBlock('head')->setTitle(Mage::helper('productlabels')->__("Add New Label"));
                    $this->_setActiveMenu('productlabels/items');

                    $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));
                    $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));

                    $this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
                    $editBlock = $this->getLayout()->createBlock('productlabels/adminhtml_productlabels_edit');
                    $editBlock->setChild('form',
                            $this->getLayout()->createBlock('productlabels/adminhtml_productlabels_edit_tab_form')
                        );
                    if($id)
                    {
                        $editBlock->setChild('store_switcher',
                                $this->getLayout()->createBlock('adminhtml/store_switcher')
                            );
                    }
                     
                    $this->_addContent($editBlock);

                            //->_addLeft($this->getLayout()->createBlock('productlabels/adminhtml_productlabels_edit_tabs'));

                    $this->renderLayout();
            } else {
                    Mage::getSingleton('adminhtml/session')->addError(Mage::helper('productlabels')->__('Item does not exist'));
                    $this->_redirect('*/*/');
            }
    }

    public function newAction() {
        $this->_forward('edit');
            
    }

   

    public function saveImages()
    {
        $data = array();
        $oldPic = $this->getRequest()->getPost();
        ///////////////Save Image for Label////////////////////
        if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {
            try {
                    /* Starting upload */
                    $uploader = new Varien_File_Uploader('image');

                    // Any extention would work
                    $uploader->setAllowedExtensions(array('jpg','jpeg','gif','png'));
                    $uploader->setAllowRenameFiles(true);

                    // Set the file upload mode
                    // false -> get the file directly in the specified folder
                    // true -> get the file in the product like folders
                    //	(file.jpg will go in something like /media/f/i/file.jpg)
                    $uploader->setFilesDispersion(false);

                    // We set media as the upload dir
                    $store = "store_".$this->getRequest()->getParam('store',0);
                    $_FILES['image']['name'] = $store.'_'.$_FILES['image']['name'];
                    $path = Mage::getBaseDir('media') . DS . 'em_productlabels' . DS . 'image' . DS ;

                    //delete old image
                    if($oldPic['curimage'] && $oldPic['curimage'] != 'nopic' && strstr($oldPic['curimage'],$store.'_'))
                    {
                        $width = Mage::getStoreConfig('productlabels/general/thumbnail_width_image');
                        $height = Mage::getStoreConfig('productlabels/general/thumbnail_height_image');
                        $res = $width."x".$height;
                        if(is_file($path.$oldPic['curimage']))
                            unlink($path.$oldPic['curimage']);
                        if(is_file($path."admin".DS."50x50".DS.$oldPic['curimage']))
                            unlink($path."admin".DS."50x50".DS.$oldPic['curimage']);
                       if(is_file($path."thumbnail".DS.$res.DS.$oldPic['curimage']))
                            unlink($path."thumbnail".DS.$res.DS.$oldPic['curimage']);
                    }

                    $uploader->save($path, $_FILES['image']['name'] );

            } catch (Exception $e) {

            }

            //this way the name is saved in DB
            $data['image'] = $_FILES['image']['name'];
        }
        ///////////////End save Image for Label////////////////////

        ///////////////Save background for Label////////////////////
        if(isset($_FILES['background']['name']) && $_FILES['background']['name'] != '') {
            try {
                    /* Starting upload */
                    $uploader = new Varien_File_Uploader('background');

                    // Any extention would work
                    $uploader->setAllowedExtensions(array('jpg','jpeg','gif','png'));
                    $uploader->setAllowRenameFiles(true);

                    // Set the file upload mode
                    // false -> get the file directly in the specified folder
                    // true -> get the file in the product like folders
                    //	(file.jpg will go in something like /media/f/i/file.jpg)
                    $uploader->setFilesDispersion(false);

                    // We set media as the upload dir
                    $store = "store_".$this->getRequest()->getParam('store',0);
                    $_FILES['background']['name'] = $store.'_'.$_FILES['background']['name'];
                    $path = Mage::getBaseDir('media') . DS . 'em_productlabels' . DS . 'background' . DS ;
                    //delete old background
                    if($oldPic['curbackground'] && $oldPic['curbackground'] != 'nopic' && strstr($oldPic['curbackground'],$store.'_'))
                    {
                        $width = Mage::getStoreConfig('productlabels/general/thumbnail_width_background');
                        $height = Mage::getStoreConfig('productlabels/general/thumbnail_height_background');
                        $res = $width."x".$height;
                        if(is_file($path.$oldPic['curbackground']))
                            unlink($path.$oldPic['curbackground']);
                        if(is_file($path."admin".DS."50x50".DS.$oldPic['curbackground']))
                            unlink($path."admin".DS."50x50".DS.$oldPic['curbackground']);
                       if(is_file($path."thumbnail".DS.$res.DS.$oldPic['curbackground']))
                            unlink($path."thumbnail".DS.$res.DS.$oldPic['curbackground']);
                    }
                    $uploader->save($path, $_FILES['background']['name'] );

            } catch (Exception $e) {

            }

            //this way the name is saved in DB
            $data['background'] = $_FILES['background']['name'];
        }
        ///////////////End save background for Label////////////////////

        return $data;
    }

    public function initLabelSave()
    {
        $label = Mage::getModel('productlabels/productlabels');
        if($data = $this->getRequest()->getPost())
        {
            if(!$data['enable'])
                $data['enable'] = 2;

            $data = array_merge($data,$this->saveImages());

            //$tmp['actions'] = $data['rule']['actions'];
            //print_r($data);exit;
            //unset($data['rule']);
            $data['actions'] = $this->initCondition($data['rule']);
            if(!$data['id'])
                unset($data['id']);
            /*unset($data['rule']);
            unset($data['id']);
            unset($data['variables']);*/
            //echo $data['actions'];exit;
            //unset($data['name']);
            $label->setData($data);
        }

        $atrTbl = array('text' => array(),'varchar' => array(),'int' => array());
        $attributes = $label->getAttributes();

        if (!$useDefaults = $this->getRequest()->getPost('use_default'))
            $useDefaults = array();
        foreach ($attributes as $a) {
            if(in_array($a->getNameAttribute(),$useDefaults))
            {
                $label->setData($a->getNameAttribute(), false);

                $atrTbl[$a->getType()][] = $a->getId();
            }elseif($a->getNameAttribute() == 'image' || $a->getNameAttribute() == 'background')
            {
                if($data['no'.$a->getNameAttribute()] == 1 && !$data[$a->getNameAttribute()]){
                    $label->setData($a->getNameAttribute(),'nopic');


                    if($data['cur'.$a->getNameAttribute()] && strstr($data['cur'.$a->getNameAttribute()],'store_'.$data['store'].'_'))
                    {
                       $path = Mage::getBaseDir('media').DS."em_productlabels".DS.$a->getNameAttribute().DS;
                       $width = Mage::getStoreConfig('productlabels/general/thumbnail_width_'.$a->getNameAttribute());
                       $height = Mage::getStoreConfig('productlabels/general/thumbnail_height_'.$a->getNameAttribute());
                       $res = $width."x".$height;
                       if(is_file($path.$data['cur'.$a->getNameAttribute()]))
                            unlink($path.$data['cur'.$a->getNameAttribute()]);
                       if(is_file($path."admin".DS."50x50".DS.$data['cur'.$a->getNameAttribute()]))
                            unlink($path."admin".DS."50x50".DS.$data['cur'.$a->getNameAttribute()]);
                       if(is_file($path."thumbnail".DS.$res.DS.$data['cur'.$a->getNameAttribute()]))
                            unlink($path."thumbnail".DS.$res.DS.$data['cur'.$a->getNameAttribute()]);
                    }

                }
            }

        }
            
        //Delete attribute use default at store != default
        if(!empty($useDefaults))
        {
            foreach($atrTbl as $key => $value)
            {
                if(!empty($key))
                {
                    $collection = Mage::getModel('productlabels/type_'.$key)->getCollection()
                            ->addFieldToFilter('label_id',$data['id'])
                            ->addFieldToFilter('store_id',$this->getRequest()->getParam('store'))
                            ->addFieldToFilter('attribute_id',array('in' => $value));

                    if($collection->count())
                    {

                        foreach($collection as $c)
                        {

                            $c->delete();
                        }

                    }
                }
            }
        }
        
           
        
        //print_r($label->getData());exit;

        //$label->setId($this->getRequest()->getParam('id'));
        
        return $label;

    }

    public function saveAttribute($label)
    {
        $attributes = $label->getAttributes();
        
        $labelId = $label->getId();
        $attTable = array(
            'text'  =>  Mage::getModel('productlabels/type_text'),
            'varchar'  =>  Mage::getModel('productlabels/type_varchar'),
            'int'  =>  Mage::getModel('productlabels/type_int')
        );
        $storeId = $this->getRequest()->getParam('store',0);

        foreach($attributes as $a)
        {
            $value = $label->getData($a->getNameAttribute());
            if($value)
            {
                $data = array(
                             'label_id'=>$labelId,
                             'attribute_id'=>$a->getId(),
                             'store_id'=>$storeId,
                             'value'=>$value);
             
                $attTable[$a->getType()]->setData($data);

                $attId = $attTable[$a->getType()]->getCollection()
                            ->addFieldToFilter('label_id',$labelId)
                            ->addFieldToFilter('attribute_id',$a->getId())
                            ->addFieldToFilter('store_id',$storeId)
                            ->getFirstItem()->getId();
                $attTable[$a->getType()]->setId($attId);
                $attTable[$a->getType()]->save();
            }

        }
    }

    public function initCondition($actions)
    {
        $rule = Mage::getModel('salesrule/rule');
        $rule->loadPost($actions);
        
        
        if ($rule->getActions()) {
            $rule->setActionsSerialized(serialize($rule->getActions()->asArray()));
            $rule->unsActions();
        }
        return $rule->getActionsSerialized();
    }

    public function saveAction() {
        if ($label = $this->initLabelSave()) {
         
            try {

                $label->save();
                $this->saveAttribute($label);
                Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('productlabels')->__('Label was successfully saved'));
                Mage::getSingleton('adminhtml/session')->setFormData(false);

                if ($this->getRequest()->getParam('back')) {
                        $this->_redirect('*/*/edit', array('id' => $label->getId(),
                                                           'store' => $this->getRequest()->getParam('store',0)
                                                           )
                                        );
                        return;
                }
                $this->_redirect('*/*/',array('store' => $this->getRequest()->getParam('store',0)));
                    return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id'),
                                                   'store' => $this->getRequest()->getParam('store',0))
                                );
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(Mage::helper('productlabels')->__('Unable to find label to save'));
        $this->_redirect('*/*/',array('store' => $this->getRequest()->getParam('store',0)));
    }

    public function deleteAction() {
            if( $this->getRequest()->getParam('id') > 0 ) {
                    try {
                            $model = Mage::getModel('productlabels/productlabels');

                            $model->setId($this->getRequest()->getParam('id'))
                                    ->delete();

                            Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Label was successfully deleted'));
                            $this->_redirect('*/*/');
                    } catch (Exception $e) {
                            Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                            $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id'),'store' => $this->getRequest()->getParam('store',0)));
                    }
            }
            $this->_redirect('*/*/',array('store' => $this->getRequest()->getParam('store',0)));
    }

    public function massDeleteAction() {
        $productlabelsIds = $this->getRequest()->getParam('productlabels');
        if(!is_array($productlabelsIds)) {
			Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select label(s)'));
        } else {
            try {
                foreach ($productlabelsIds as $productlabelsId) {
                    $productlabels = Mage::getModel('productlabels/productlabels')->load($productlabelsId);
                    $productlabels->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('adminhtml')->__(
                        'Total of %d record(s) were successfully deleted', count($productlabelsIds)
                    )
                );
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index',array('store' => $this->getRequest()->getParam('store',0)));
    }
	
    public function massStatusAction()
    {
        $productlabelsIds = $this->getRequest()->getParam('productlabels');
        if(!is_array($productlabelsIds)) {
            Mage::getSingleton('adminhtml/session')->addError($this->__('Please select label(s)'));
        } else {
            try {

                foreach ($productlabelsIds as $productlabelsId) {
                    $productlabels = Mage::getSingleton('productlabels/productlabels')
                        ->load($productlabelsId);
                    $productlabels->setEnable($this->getRequest()->getParam('status'));
                    $this->saveAttribute($productlabels);
                        
                }
                $this->_getSession()->addSuccess(
                    $this->__('Total of %d record(s) were successfully updated', count($productlabelsIds))
                );
            } catch (Exception $e) {
                $this->_getSession()->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index',array('store' => $this->getRequest()->getParam('store',0)));
    }
  
    public function exportCsvAction()
    {
        $fileName   = 'productlabels.csv';
        $content    = $this->getLayout()->createBlock('productlabels/adminhtml_productlabels_grid')
            ->getCsv();

        $this->_sendUploadResponse($fileName, $content);
    }

    public function exportXmlAction()
    {
        $fileName   = 'productlabels.xml';
        $content    = $this->getLayout()->createBlock('productlabels/adminhtml_productlabels_grid')
            ->getXml();

        $this->_sendUploadResponse($fileName, $content);
    }

    protected function _sendUploadResponse($fileName, $content, $contentType='application/octet-stream')
    {
        $response = $this->getResponse();
        $response->setHeader('HTTP/1.1 200 OK','');
        $response->setHeader('Pragma', 'public', true);
        $response->setHeader('Cache-Control', 'must-revalidate, post-check=0, pre-check=0', true);
        $response->setHeader('Content-Disposition', 'attachment; filename='.$fileName);
        $response->setHeader('Last-Modified', date('r'));
        $response->setHeader('Accept-Ranges', 'bytes');
        $response->setHeader('Content-Length', strlen($content));
        $response->setHeader('Content-type', $contentType);
        $response->setBody($content);
        $response->sendResponse();
        die;
    }

    public function getVariables()
    {
        $data = array(
            'label' => 'Variables',
            'value' => array(
                array(
                'label' => 'Save Percent',
                'value' => '{{var save_percent}}'
                ),
                array(
                    'label' => 'Save Price',
                    'value' => '{{var save_price}}'
                ),
                array(
                    'label' => 'Product Price',
                    'value' => '{{var product.price}}'
                ),
                array(
                    'label' => 'Product Special Price',
                    'value' => '{{var product.special_price}}'
                ),
                array(
                    'label' => 'The Quantity Of Product',
                    'value' => '{{var product.qty}}'
                )
            )
        );
        $variables = array($data);

        return $variables;
    }
}