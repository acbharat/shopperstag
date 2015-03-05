<?php
class EM_Megamenupro_Adminhtml_MenueditorController extends Mage_Adminhtml_Controller_Action
{
	protected function _isAllowed()
    {
        switch ($this->getRequest()->getActionName()) {
            case 'save':
                return Mage::getSingleton('admin/session')->isAllowed('emthemes/megamenupro/save');
                break;
            case 'delete':
                return Mage::getSingleton('admin/session')->isAllowed('emthemes/megamenupro/delete');
                break;
            default:
                return Mage::getSingleton('admin/session')->isAllowed('emthemes/megamenupro');
                break;
        }
    }

	protected function _initAction() {
		$this->loadLayout()
			->_setActiveMenu('megamenupro/items')
			->_addBreadcrumb(Mage::helper('adminhtml')->__('Items Manager'), Mage::helper('adminhtml')->__('Item Manager'));
		
		return $this;
	}
 
	public function indexAction() {
		$this->_initAction()
			->renderLayout();
	}
	
	public function editAction() {
		$id     = $this->getRequest()->getParam('id');
		$model  = Mage::getModel('megamenupro/megamenupro')->load($id);

		if ($model->getId() || $id == 0) {
			$data = Mage::getSingleton('adminhtml/session')->getFormData(true);
			if (!empty($data)) {
				$model->setData($data);
			}

			Mage::register('megamenupro_data', $model);

			$this->loadLayout();
			$this->_setActiveMenu('megamenupro/items');

			$this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item Manager'), Mage::helper('adminhtml')->__('Item Manager'));
			$this->_addBreadcrumb(Mage::helper('adminhtml')->__('Item News'), Mage::helper('adminhtml')->__('Item News'));

			$this->getLayout()->getBlock('head')->setCanLoadExtJs(true);
			$this->getLayout()->getBlock('head')->setCanLoadTinyMce(true);

			$this->_addContent($this->getLayout()->createBlock('megamenupro/adminhtml_menueditor_edit'));
			if (!$model->getId())
				$this->_addLeft($this->getLayout()->createBlock('megamenupro/adminhtml_mnueditor_edit_tabs'));

			$this->renderLayout();
		} else {
			Mage::getSingleton('adminhtml/session')->addError(Mage::helper('megamenupro')->__('Item does not exist'));
			$this->_redirect('*/*/');
		}
	}

	public function parsecodeAction(){
		$param	=	$this->getRequest()->getParam('menu');
		if(isset($param)){
			foreach($param as $k=>$v){
				if($v['type'] == 'link'){
					$param[$k]['label']		=	str_replace("'","",str_replace("\"","",($v['label'])));
					$param[$k]['sublabel']	=	str_replace("'","",str_replace("\"","",($v['sublabel'])));
				}
				if($v['type'] == 'text')
					$param[$k]['text']	=	base64_encode($v['text']);
			}
			$data	=	Zend_Json::encode($param);
		}
		else	$data = "";
		print_r($data);exit;
	}
 
	public function saveAction() {
		if ($data = $this->getRequest()->getPost()) {
			$model = Mage::getModel('megamenupro/megamenupro');
			$model->setData($data)
				->setId($this->getRequest()->getParam('id'));

			try {
				if ($model->getCreatedTime == NULL || $model->getUpdateTime() == NULL) {
					$model->setCreatedTime(now())
						->setUpdateTime(now());
				} else {
					$model->setUpdateTime(now());
				}

				if ($this->getRequest()->getParam('duplicate')) {
					$model->setName($data['name'].' duplicate menuId '.$this->getRequest()->getParam('id'));
					$model->setId(null);
				}

				$model->save();

				if($this->getRequest()->getParam('duplicate'))
					Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('megamenupro')->__('Item was successfully duplicate'));
				else{
					if($this->getRequest()->getParam('id'))
						Mage::helper("megamenupro")->getFlushCache($this->getRequest()->getParam('id'));
					Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('megamenupro')->__('Item was successfully saved'));
				}
				Mage::getSingleton('adminhtml/session')->setFormData(false);

				if ($this->getRequest()->getParam('back')) {
					$this->_redirect('*/*/edit', array('id' => $model->getId()));
					return;
				}
				$this->_redirect('*/megamenupro/');
				return;
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
                Mage::getSingleton('adminhtml/session')->setFormData($data);
                $this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
                return;
            }
        }
        Mage::getSingleton('adminhtml/session')->addError(Mage::helper('megamenupro')->__('Unable to find item to save'));
        $this->_redirect('*/megamenupro/');
	}

	public function deleteAction() {
		if( $this->getRequest()->getParam('id') > 0 ) {
			try {
				$model = Mage::getModel('megamenupro/megamenupro');
				 
				$model->setId($this->getRequest()->getParam('id'))
					->delete();

				Mage::getSingleton('adminhtml/session')->addSuccess(Mage::helper('adminhtml')->__('Item was successfully deleted'));
				$this->_redirect('*/*/');
			} catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
			}
		}
		$this->_redirect('*/*/');
	}

    public function massDeleteAction() {
        $megamenuproIds = $this->getRequest()->getParam('megamenupro');
        if(!is_array($megamenuproIds)) {
			Mage::getSingleton('adminhtml/session')->addError(Mage::helper('adminhtml')->__('Please select item(s)'));
        } else {
            try {
                foreach ($megamenuproIds as $megamenuproId) {
                    $megamenupro = Mage::getModel('megamenupro/megamenupro')->load($megamenuproId);
                    $megamenupro->delete();
                }
                Mage::getSingleton('adminhtml/session')->addSuccess(
                    Mage::helper('adminhtml')->__(
                        'Total of %d record(s) were successfully deleted', count($megamenuproIds)
                    )
                );
            } catch (Exception $e) {
                Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
    }

    public function massStatusAction()
    {
        $megamenuproIds = $this->getRequest()->getParam('megamenupro');
        if(!is_array($megamenuproIds)) {
            Mage::getSingleton('adminhtml/session')->addError($this->__('Please select item(s)'));
        } else {
            try {
                foreach ($megamenuproIds as $megamenuproId) {
                    $megamenupro = Mage::getSingleton('megamenupro/megamenupro')
                        ->load($megamenuproId)
                        ->setStatus($this->getRequest()->getParam('status'))
                        ->setIsMassupdate(true)
                        ->save();
                }
                $this->_getSession()->addSuccess(
                    $this->__('Total of %d record(s) were successfully updated', count($megamenuproIds))
                );
            } catch (Exception $e) {
                $this->_getSession()->addError($e->getMessage());
            }
        }
        $this->_redirect('*/*/index');
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
}