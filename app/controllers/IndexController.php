        
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

                // 'limit' => 3,
                // 'order'=>'News_ID DESC',
                // 'User_ID = ?0',
                // 'bind'=>array($pollId),
class IndexController extends ControllerBase
{
   	public function indexAction($categoryalias = null)
    {
        if($categoryalias == ''){
            // $news = News::find(array(
            //     'limit' => 10,
            //     'conditions' => "News_Hot = ?6 AND News_isActive = ?11",
            //     'bind'       => array(6 => $news->News_Hot = 1 , 11 => $news->News_isActive = 1) ,
            // ));
            $news = News::query()
                ->columns(array('News.News_Title','News.News_Alias','News.News_Images', 'News.News_Summary', 'News.News_Content','Category.Category_Alias'))
                ->join('Category', 'News.Category_ID = Category.Category_ID' )
                ->where('News.News_Hot = :6:')
                ->andWhere('News.News_isActive = :11:')
                ->bind(array('6' => 1, '11' => 1))
                ->limit(10)
                ->execute();;
            $this->view->news = $news;
            
            //Phân Trang Index
            $row_count = 9;
            $page = $this->request->get('page');
            if($page)
            {$tranghientai = $this->request->get('page');}
            else{$tranghientai = 1;}
            $offset = ($tranghientai - 1)*$row_count;
            $sqlSel=$this->db->query("SELECT News_ID FROM News WHERE News_isActive = 1 AND  News_Hot = 0 ");
            $tongsodong = $sqlSel->numRows();
            $tongsotrang = ceil($tongsodong/$row_count);
            $this->view->tongsotrang = $tongsotrang;
            $this->view->tranghientai = $tranghientai;
        $newsindex = $this->modelsManager->createQuery("SELECT News.News_Title,News.News_Alias, News.News_Images, News.News_Summary ,News.News_Content , Category.Category_Alias FROM News INNER JOIN Category ON News.Category_ID = Category.Category_ID WHERE News.News_Hot = 0  and News.News_isActive = 1 ORDER BY News.News_ID DESC LIMIT {$offset}, {$row_count}" );
            // Lặp nhiều dòng dữ liệu dùng $this->modelsManager->createQuery 
            // Nếu chỉ lấy 1 số trường nào đó dùng $this->db->query rồi dùng lặp while
            // Lấy ra 1 mảng của từng trường rồi $this->view-... 
            $resultsql = $newsindex->execute();
            $this->view->newsindex= $resultsql;
            // End Phân Trang Index


        }else{
            // Khi Có Category_Alias trên URL
            $alias = Category::findFirstByCategory_Alias($categoryalias);
            $this->view->alias = $alias;

            $news = News::query()
                ->columns(array('News.News_Title','News.News_Alias','News.News_Images', 'News.News_Summary', 'News.News_Content','Category.Category_Alias'))
                ->join('Category', 'News.Category_ID = Category.Category_ID' )
                ->where('News.Category_ID = :2:')
                ->andWhere('News.News_Hot = :7:')
                ->andWhere('News.News_isActive = :8:')
                ->bind(array('2' => $alias->Category_ID , '7' => 1 , '8' => 1))
                ->limit(10)
                ->execute();
            $this->view->news = $news;

            // Phân Trang Index-Alias
            $row_count = 9;
            $page = $this->request->get('page');
            if($page)
            {$tranghientai = $this->request->get('page');}
            else{$tranghientai = 1;}
            $offset = ($tranghientai - 1)*$row_count;
            $sqlSel=$this->db->query("SELECT News_ID FROM News Where Category_ID = $alias->Category_ID AND News_isActive = 1 AND  News_Hot = 0 ");
            $tongsodong = $sqlSel->numRows();
            $tongsotrang = ceil($tongsodong/$row_count) ;
            $this->view->tongsotrang = $tongsotrang;
            $this->view->tranghientai = $tranghientai;
        $newsindex = $this->modelsManager->createQuery("SELECT News.News_Title,News.News_Alias, News.News_Images, News.News_Summary ,News.News_Content , Category.Category_Alias FROM News INNER JOIN Category ON News.Category_ID = Category.Category_ID WHERE News.News_Hot = 0 and News.News_isActive = 1 and News.Category_ID = $alias->Category_ID ORDER BY News.News_ID DESC LIMIT {$offset}, {$row_count}" );
            // Lặp nhiều dòng dữ liệu dùng $this->modelsManager->createQuery 
            // Nếu chỉ lấy 1 số trường nào đó dùng $this->db->query rồi dùng lặp while
            // Lấy ra 1 mảng của từng trường rồi $this->view-... 
            $resultsql = $newsindex->execute();
            $this->view->newsindex= $resultsql;
            
            //End Phân Trang Index-Alias

        }
        if ($categoryalias == null){
            $this->view->newstitle = '';
        }else{
            $cate = Category::findFirstByCategory_Alias($categoryalias);
            $this->view->newstitle = $cate->Category_Name;
        }
    }

    public function detailAction($categoryalias,$newsalias)
    {
        //  Chi Tiết Bài Viết 
            $news3 = $this->db->query("SELECT News_ID, News_Title,News_Alias , News_Summary , News_Dateposted,
                News_Content , News_Views , News_Images FROM News WHERE News_Alias = '$newsalias' ");
             while($row=$news3->fetchArray())
            { 
                $this->view->news3id = $news3id =  $row['News_ID']; 
                $this->view->news3title =$news3title =  $row['News_Title']; 
                $this->view->news3alias =$news3alias =  $row['News_Alias']; 
                $this->view->news3summary = $news3summary =  $row['News_Summary'];
                $this->view->news3date = $news3date =  $row['News_Dateposted'];
                $this->view->news3content = $news3content =  $row['News_Content'];
                $this->view->news3views = $news3views =  $row['News_Views'];
                $this->view->news3img = $news3img =  $row['News_Images'];
            }
        // End Chi Tiết Bài Viết

        // Dùng $this->db-> Nếu ko lặp tất cả mà chỉ muốn lấy 1 số thì có lẽ sẽ hay hơn
        $id = $this->db->query("SELECT Category_ID , Category_Alias FROM Category
        WHERE Category_Alias = '$categoryalias' ");
        while($row=$id->fetchArray())
        { 
            $cateid =  $row['Category_ID']; 
            $catealias =  $row['Category_Alias']; 
        }
        $this->view->catealias = $catealias;
        // End

        // Bài Viết Liên Quan - Chi Tiết
        $news2 = $this->modelsManager->createQuery("SELECT News_Title , News_Alias , News_Summary , News_Images
        FROM News WHERE Category_ID = $cateid AND NOT News_Alias = '$newsalias' ORDER BY News_ID DESC LIMIT 6");
        $resultnews2 = $news2->execute();
        $this->view->news2 = $resultnews2;
        // End Bài Viết Liên Quan - Chi Tiết

        // Comment Của Bài Viết
        $getfeedback = $this->modelsManager->createQuery("SELECT Feedback_Sender,  Feedback_Content , Feedback_Date
        FROM Feedback WHERE News_ID = $news3id AND Feedback_isActive = 1 ORDER BY Feedback_Date DESC LIMIT 10");
        $result = $getfeedback->execute();
        $this->view->getfeedback = $result;
        // Comment Của Bài Viết

        //
       if($this->request->isPost())
        {   
            $filter = new Filter();
            $validation = new Validation();
            $validation
            ->add('Feedback_Sender',new PresenceOf(array('message' => 'Yêu Cầu Nhập Tên Người Gửi')));
            $validation
            ->add('Feedback_Emailsender',new Email(array('message' => 'Yêu Cầu Nhập Đúng Định Dạng Email')))
            ->add('Feedback_Emailsender',new PresenceOf(array('message' => 'Yêu Cầu Nhập Email')));
            $validation
            ->add('Feedback_Content',new PresenceOf(array('message' => 'Yêu Cầu Nhập Nội Dung Gửi')));
            $messages = $validation->validate($_POST);
            if (count($messages)) {
                foreach ($messages as $message) {
                    $this->flashSession->error($message);
                     return $this->response->redirect($categoryalias."/".$newsalias);
                }
            }else{
                $option = new Feedback();
                $option->Feedback_Sender = $filter->sanitize($this->request->getPost('Feedback_Sender'),"trim");
        $option->Feedback_Emailsender = $filter->sanitize($this->request->getPost('Feedback_Emailsender'),"trim");
                $option->Feedback_Content = $filter->sanitize($this->request->getPost('Feedback_Content'),"trim");
                $option->Feedback_Date = date("Y-m-d H:i:s");
                $option->News_ID = $news3id;
                $option->Category_ID = $cateid;
                if($option->save()){
                    $this->flash->success('Gửi Hoàn Tất ! Vui Lòng Đợi Duyệt');
                    return $this->response->redirect($categoryalias."/".$newsalias);
                    
                }else{
                    $this->flash->error('Xảy Ra Lỗi Trong Quá Trình Gửi Bình Luận');
                }
            }
        }
    }


     public function show404Action(){
        
     }




}

