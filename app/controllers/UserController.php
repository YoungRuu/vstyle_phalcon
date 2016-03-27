
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

class UserController extends ControllerBase
{

	public function indexAction()
    {
        $this->_registerSession();
        if(!$this->request->isGet()){
            $username = User::find();
            $this->view->username = $username;
        //Search Form
         }else{
            $keyword = $this->request->get('keyword');
            $username = User::find(array(
                'conditions' => 'User_Username LIKE :keyword:',
                'bind' => array('keyword' => '%' . $keyword . '%'),
                'order' => 'User_ID DESC',
            ));
            $this->view->username = $username;
          }
          $this->view->keyword = $keyword;
          $this->pagination($username);
          
    }



    public function deleteAction($id)
    {
       $this->_registerSession();
       $deluser = User::findFirstByUser_ID($id);
        if($deluser != null){
            $deluser->delete();
            $this->flash->success('Đã Xóa Thành Công 1 User');
            return $this->response->redirect('user/index');
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
            ->add('user_name',new PresenceOf(array('message' => 'Yêu Cầu Nhập Tên Của Bạn')));
            $validation
            ->add('user_username',new StringLength(array(
                'min' => 5,
                'messageMinimum' => 'Username Quá Ngắn Yêu Cầu Trên 4 Ký Tự'
                )));
            $validation
            ->add('user_password',new StringLength(array(
                'min' => 5,
                'messageMinimum' => 'Password Quá Ngắn Yêu Cầu Trên 6 Ký Tự'
                )));
            $validation
            ->add('user_email',new PresenceOf(array('message' => 'Yêu Cầu Nhập Email')))
            ->add('user_email',new Email(array('message' => 'Không Đúng Định Dạng Email')));
            $validation
            ->add('user_birthday',new PresenceOf(array('message' => 'Yêu Cầu Nhập Ngày Sinh')));

            $messages = $validation->validate($_POST);
            if (count($messages)) {
                foreach ($messages as $message) {
                    $this->flash->error($message);
                }
            }else{
                $user = new User();
                $user->User_Name = $this->request->getPost('user_name');
            $checkuser =  $user->User_Username = $filter->sanitize($this->request->getPost('user_username'),"trim");
                $user->User_Password = $this->security->hash($this->request->getPost('user_password'));
                $user->User_Email = $filter->sanitize($this->request->getPost("user_email"),"email");
                $user->User_Gender = $this->request->getPost('user_gender');
                $user->User_Birthday = $this->request->getPost('user_birthday');
                $user->User_idGroup = $this->request->getPost('user_idgroup');
                $user->User_Regisdate = date('Y-m-d');
                $check = User::findFirstByUser_Username($checkuser); 
                if($check != false){
                    $this->flash->error('Username Này Đã Tồn Tại');
                }else{
                    if($user->save()){
                        $this->flash->success('Đã Thêm Thành Công 1 User');
                        return $this->response->redirect('user/index');
                    }else{
                        $this->flash->error('Xảy Ra Lỗi Trong Quá Trình Thêm');
                        return $this->response->redirect('user/index');
                    }
                 }
              }
        }
    }

    public function updateAction($id){
        $this->_registerSession();
        $account = User::findFirstByUser_ID($id);
        if(!$account){
            return $this->response->redirect('user/index');
        }else{
            $this->view->account = $account; 
            if($this->request->isPost()){
                $validation = new Validation();
                $validation
                ->add('user_name',new PresenceOf(array('message' => 'The name is required')));
                $messages = $validation->validate($_POST);
                if (count($messages)) {
                        foreach ($messages as $message) {
                            $this->flash->error($message);
                        }   
                    return $this->response->redirect('user/update/'.$account->User_ID);  
                }else{
                    $password = $this->request->getPost('user_password');
                    $account->User_Name = $this->request->getPost('user_name');
                $account->User_Username = $this->filter->sanitize($this->request->getPost('user_username'),"trim");
                    $account->User_Email = $this->request->getPost('user_email');
                    $account->User_Birthday = $this->request->getPost('user_birthday');
                    $account->User_Gender = $this->request->getPost('user_gender');
                    $account->User_idGroup = $this->request->getPost('user_idgroup');
                    if(empty($password)){
                        $account->User_Password = $account->User_Password;
                    }else{
                        $account->User_Password = $this->security->hash($password);
                    }
                    if($account->save()){
                        $this->flash->success('Đã Cập Nhật Thành Công 1 User');
                        return $this->response->redirect('user/update');
                    }else{
                        $this->flash->error('Xãy Ra Lỗi Trong Quá Trình Cập Nhật User');
                        return $this->response->redirect('user/update/'.$account->User_ID);
                    } 
                }
            }
        }
    }




         
}
 