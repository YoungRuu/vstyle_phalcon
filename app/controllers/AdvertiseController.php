
<?php
use Phalcon\Filter;
use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model\Criteria;
use Phalcon\Paginator\Adapter\Model as Paginator;
use Phalcon\Flash\Direct as FlashDirect;
use Phalcon\Validation;
use Phalcon\Validation\Message;
use Phalcon\Validation\Validator\Email;
use Phalcon\Validation\Validator\Regex;
use Phalcon\Validation\Validator\PresenceOf;
use Phalcon\Validation\Validator\Url as UrlValidator;
use Phalcon\Validation\Validator\InclusionIn;
use Phalcon\Validation\Validator\File as FileValidator;
use Phalcon\Validation\Validator\StringLength as StringLength;
use Phalcon\Validation\Validator\Uniqueness as UniquenessValidator;
use Phalcon\Session\Adapter\Files as Session;

class AdvertiseController extends ControllerBase
{
    
	public function indexAction()
    {
        $this->_registerSession();
        $advertise = Advertise::find(array('order'=>'Advertise_ID ASC',));
        $this->pagination($advertise);
    }

    public function deleteAction($id)
    {
        $this->_registerSession();
        $deladv = Advertise::findFirstByAdvertise_ID($id);
        if($deladv != null){
            if(file_exists("files/".$deladv->Advertise_Image))
            { 
                unlink("files/".$deladv->Advertise_Image);
                if($deladv->delete()){
                    return $this->response->redirect('advertise/index');
                    $this->flash->success('Đã Xóa Thành Công 11 Advertise');
                }else{
                    $this->flash->error('Xảy Ra Lỗi Trong Quá Trình Xóa');
                }
            }else{
                $deladv->delete();  
                return $this->response->redirect('advertise/index');
                $this->flash->success('Đã Xóa Thành Công 1 Advertise');
            }
            
        }
    }

    public function addAction(){
        $this->_registerSession();
        if($this->request->isPost())
        {
            $filter = new Filter();
            $validation = new Validation();
            $validation->add(
            'advertise_name',new PresenceOf(array('message' => 'The name is required')));
            $validation->add(
            'advertise_description',new PresenceOf(array('message' => 'The description is required')));
            $validation->add(
            'advertise_url',new UrlValidator(array('message' => 'Must be a url')));
            $validation->add(
            'advertise_position',new PresenceOf(array('message' => 'The position is required')));
            $messages = $validation->validate($_POST);
            if (count($messages)) {
                foreach ($messages as $message) {
                    $this->flash->error($message);
                }
            }else{
                $adv = new Advertise();
                if($this->upload('advertise_image') == true){
                 $adv->Advertise_Image = $this->stripUnicode(date('Ymdhisa')."_".$_FILES['advertise_image']['name']);
                    $adv->Advertise_Name = $this->request->getPost('advertise_name');
                    $adv->Advertise_Description =  $this->request->getPost('advertise_description');
                    $adv->Advertise_Url = $this->request->getPost('advertise_url');
                    $checkadv = $adv->Advertise_Position = $this->request->getPost('advertise_position');
                    $adv->Advertise_isActive = $this->request->getPost('activeRadio');
                    $check = Advertise::findFirstByAdvertise_Position($checkadv);
                    if($check != false){
                        $this->flash->error('Vị Trí Quảng Cáo Này Đã Có Người Đặt Trước');
                    }else {
                        if($adv->save()){
                        $this->flash->success('Đã Thêm Thành Công 1 Advertise');
                        return $this->response->redirect('advertise/index');
                        }else{
                            return $this->response->redirect('advertise/add');
                        }
                    }
                }
            }
        }
    }

     public function updateAction($id){
        $this->_registerSession();
        $adv = Advertise::findFirstByAdvertise_ID($id);
        if(!$adv){
            return $this->response->redirect('advertise/index');
        }else{
            $this->view->adv = $adv; 
            if($this->request->isPost()){
            $filter = new Filter();
            $validation = new Validation();
            $validation->add(
            'advertise_name',new PresenceOf(array('message' => 'The name is required')));
            $validation->add(
            'advertise_description',new PresenceOf(array('message' => 'The description is required')));
            $validation
            ->add(
            'advertise_url',new PresenceOf(array('message' => 'The url is required')))
            ->add(
            'advertise_url',new UrlValidator(array('message' => 'URL : Must be a url')));
            $validation->add(
            'advertise_position',new PresenceOf(array('message' => 'The position is required')));
                $messages = $validation->validate($_POST);
                if (count($messages)) {
                        foreach ($messages as $message) {
                            $this->flash->error($message);
                        }   
                    return $this->response->redirect('advertise/update/'.$adv->Advertise_ID);  
                }else{
                    $this->updateimg("advertise_image",$adv->Advertise_Image);
                //$adv->Advertise_Image = $this->stripUnicode(date('Ymdhisa')."_".$_FILES['advertise_image']['name']);
                    $adv->Advertise_Name = $this->request->getPost('advertise_name');
                    $adv->Advertise_Description =  $this->request->getPost('advertise_description');
                    $adv->Advertise_Url = $this->request->getPost('advertise_url');
                    $adv->Advertise_Position = $this->request->getPost('advertise_position');
                    $adv->Advertise_isActive = $this->request->getPost('activeRadio');
                    if($adv->save()){
                        $this->flash->success('Đã Cập Nhật Thành Công 1 Advertise');
                        return $this->response->redirect('advertise/index');
                    }else{
                        $this->flash->error('Xảy Ra Lỗi Trong Quá Trình Cập Nhật');
                        return $this->response->redirect('advertise/update/'.$adv->Advertise_ID);
                    }
                    
                    
                }
            }
        }
    }






}   
