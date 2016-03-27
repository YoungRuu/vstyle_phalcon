
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

class CategoryController extends ControllerBase
{
	public function indexAction()
    {
        $this->_registerSession();
        $category = Category::find(array('order'=>'Category_ID DESC',));
        $this->pagination($category);
    }

    public function deleteAction($id)
    {
        $this->_registerSession();
        $delcate = Category::findFirstByCategory_ID($id);
        if($delcate != null){
            $delcate->delete();
            $this->flash->success('Xóa Thành Công 1 Category');
            return $this->response->redirect('category/index');
        }
    }

    public function addAction()
    {   
        $this->_registerSession();
        if($this->request->isPost())
        {   
            $filter = new Filter();
            $validation = new Validation();
            $validation
            ->add('category_name',new PresenceOf(array('message' => 'The name is required')));
            $messages = $validation->validate($_POST);
            if (count($messages)) {
                foreach ($messages as $message) {
                    $this->flash->error($message);
                }
            }else{
                $option = new Category();
            $checkcate = $option->Category_Name = $filter->sanitize($this->request->getPost('category_name'),"trim");
                $option->Category_Alias =  $this->url_slug($option->Category_Name) ;
                $option->Category_isActive = $this->request->getPost('activeRadio');
                $check = Category::findFirstByCategory_Name($checkcate);
                if($check != false){
                    $this->flash->error('Category Này Đã Tồn Tại');
                }else{
                    if($option->save()){
                        $this->flash->success('Đã Thêm Thành Công 1 Category');
                        return $this->response->redirect('category/index');
                    }else{
                        $this->flash->error('Xảy Ra Lỗi Trong Quá Trình Thêm');
                    }
                }
            }
        }
    }


    public function updateAction($id){
        $this->_registerSession();
        $cate = Category::findFirstByCategory_ID($id);
        if(!$cate){
            return $this->response->redirect('category/index');
        }else{
            $this->view->category = $cate; 
            if($this->request->isPost()){
                $filter = new Filter();
                $validation = new Validation();
                $validation
                ->add('category_name',new PresenceOf(array('message' => 'The name is required')));
                $messages = $validation->validate($_POST);
                if (count($messages)) {
                        foreach ($messages as $message) {
                            $this->flash->error($message);
                        }   
                    return $this->response->redirect('category/update/'.$cate->Category_ID);  
                }else{
                    $cate->Category_Name = $filter->sanitize($this->request->getPost('category_name'),"trim");
                    $cate->Category_Alias =$this->url_slug($this->request->getPost('category_name'));
                    $cate->Category_isActive = $this->request->getPost('activeRadio');
                    if($cate->save()){
                        $this->flash->success('Đã Cập Nhật Thành Công 1 Feedback');
                        return $this->response->redirect('category/index');
                    }else{
                        $this->flash->error('Xảy Ra Lỗi Trong Quá Trình Cập Nhật');
                    }
                    
                }
            }
        }
    }



}   
