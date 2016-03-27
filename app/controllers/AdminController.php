
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
use Phalcon\security;

class AdminController extends ControllerBase
{
    public function indexAction()
    {   
        $filter = new filter();
        if($this->request->isPost()){
            $validation = new Validation();
            $validation
            ->add('User_Username',new PresenceOf(array('message' => 'Yêu Cầu Nhập Username')));
            $validation
            ->add('User_Password',new PresenceOf(array( 'message' => 'Yêu Cầu Nhập Password')));
            $messages = $validation->validate($_POST);
            if (count($messages)) {
                foreach ($messages as $message) {
                    $this->flash->error($message);
                }
            }else{
                $username = $this->request->getPost('User_Username');
                $password = $this->request->getPost('User_Password');
                $login = User::findFirstByUser_Username($username);
                if($login){
                    if($this->security->checkHash($password, $login->User_Password)){
                         $this->session->set('loginok', $login);//$this->session->set('loginok', $login);
                         return $this->response->redirect('dashboard');
                      }else{
                         $this->flash->error('Password Wrong');
                      }
                        
                }else{
                   $this->flash->error('Tài Khoản Này Không Tồn Tại');
                }
                
            }
        }
    }


    public function logoutAction(){
         $this->session->remove('loginok');
         $this->response->redirect('admin/index');
    }
    
    // public function emailAction(){
    //     $phpMailer = new PHPMailer();
    //     $phpMailer->isSMTP();
    //     $phpMailer->Host = 'smtp.gmail.com';
    //     $phpMailer->SMTPDebug = 2;
    //     $phpMailer->SMTPAuth = true;
    //     $phpMailer->SMTPSecure = "ssl";
    //     $phpMailer->Port = 587; //465 587

    //     //sender
    //     $phpMailer->Username = 'leanhro2812@gmail.com';
    //     $phpMailer->Password = 'Loichuanoi0';
    //     $phpMailer->setFrom('leanhro2812@gmail.com','Phalcon Lê Anh Rô');
                    
    //     //receive
    //     $phpMailer->addAddress('nghiadiadaysao.ar0@gmail.com');
    //     //.....
    //     //content
    //     $phpMailer->Subject = 'Phalcon email example 03';
    //     $phpMailer->CharSet = "utf-8";
    //     $phpMailer->msgHTML("<h1>Chào mừng</h1> bạn đến phalcon email example");
    //     $status = $phpMailer->send();
                    
    //     if($status)
    //     {
    //           echo "send mail success";
    //     }
    //       else {
    //           echo 'error : '.$phpMailer->ErrorInfo;
    //     }

    // }


}
