        
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

class FeedbackController extends ControllerBase
{
    
	public function indexAction()
    {
        $this->_registerSession();
        $feedback = Feedback::find(array('order'=>'Feedback_ID DESC',));
        $this->view->feedback = $feedback;

        $this->pagination($feedback);
    }
    public function deleteAction($id)
    {
        $this->_registerSession();
        $delfeed = Feedback::findFirstByFeedback_ID($id);
        if($delfeed != null){
            $delfeed->delete();
            $this->flash->success('Xóa Thành Công 1 Feedback');
            return $this->response->redirect('feedback/index');
        }
    }

    public function addAction()
    {   
        $this->_registerSession();
        if($this->request->isPost())
        {
            $validation = new Validation();
            $validation
            ->add('feedback_content',new PresenceOf(array('message' => 'The content is required')));
            $validation
            ->add('feedback_sender',new PresenceOf(array('message' => 'The sender is required')));
            $validation
            ->add('feedback_emailsender',new PresenceOf(array('message' => 'The email is required')))
            ->add('feedback_emailsender',new Email(array('message' => 'Must be a email')));
            $messages = $validation->validate($_POST);
            if (count($messages)) {
                foreach ($messages as $message) {
                    $this->flash->error($message);
                }
            }else{
                $feed = new Feedback();
                $feed->Feedback_Content = $this->request->getPost('feedback_content');
                $feed->Feedback_Date = date('Y-m-d');
                $feed->Feedback_Sender =  $this->request->getPost('feedback_sender');
                $feed->Feedback_Emailsender = $this->request->getPost('feedback_emailsender');
                $feed->Feedback_isActive = $this->request->getPost('activeRadio');
                if($feed->save()){
                    $this->flash->success('Đã Thêm Thành Công 1 Feedback');
                    return $this->response->redirect('feedback/add');
                }else{
                    return $this->response->redirect('feedback/add');
                }
            }
        }
    }

    public function updateAction($id){
        $this->_registerSession();
        $feed = Feedback::findFirstByFeedback_ID($id);
        if(!$feed){
            return $this->response->redirect('feedback/index');
        }else{
            $this->view->feed = $feed; 
            if($this->request->isPost()){
                $filter = new Filter();
                $validation = new Validation();
                $validation
                ->add('feedback_content',new PresenceOf(array('message' => 'The content is required')));
                $messages = $validation->validate($_POST);
                if (count($messages)) {
                        foreach ($messages as $message) {
                            $this->flash->error($message);
                        }   
                    return $this->response->redirect('feedback/update/'.$feed->Feedback_ID);  
                }else{
                    $feed->Feedback_Content = $this->request->getPost('feedback_content');
                    $feed->Feedback_Sender =  $this->request->getPost('feedback_sender');
                    $feed->Feedback_Emailsender = $this->request->getPost('feedback_emailsender');
                    $feed->Feedback_isActive = $this->request->getPost('activeFeedback');
                    $feed->Save();
                    $this->flash->success('Đã Cập Nhật Thành Công 1 Feedback');
                    return $this->response->redirect('feedback/index');
                }
            }
        }
    }
       








}

