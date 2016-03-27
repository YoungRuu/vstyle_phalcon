        
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

class NewsController extends ControllerBase
{
   
	public function indexAction()
    {
        $this->_registerSession();
         $keyword = $this->request->get('keyword');
        $this->view->keyword = $keyword;
        $row_count = 9;
        $page = $this->request->get('page');
        if($page)
        {$tranghientai = $this->request->get('page');}
        else{$tranghientai = 1;}
        $offset = ($tranghientai - 1)*$row_count;
        //
        if($this->request->isGet() && !$keyword){
            $sqlSel=$this->db->query("SELECT News_ID FROM News");
         }else{
            $sqlSel=$this->db->query("SELECT News_ID FROM News WHERE News_Title LIKE '% $keyword %' ");
         } 
            $tongsodong = $sqlSel->numRows();
            $tongsotrang = ceil($tongsodong/$row_count);
            $this->view->tongsotrang = $tongsotrang;
            $this->view->tranghientai = $tranghientai;
        if($this->request->isGet() && !$keyword){
          $news = $this->modelsManager->createQuery("SELECT News_ID,News_Title,News_Alias,News_Images,News_Summary,News_Dateposted,News_isActive,News_Views FROM News ORDER BY News_ID DESC LIMIT {$offset},{$row_count}");
        }else{
          // $news = $this->modelsManager->createQuery("SELECT News_ID,News_Title,News_Alias,News_Images,News_Summary,News_Dateposted,News_isActive,News_Views FROM News WHERE News_isActive = 1 and News_Title LIKE '% $keyword %' ORDER BY News_ID DESC LIMIT {$offset},{$row_count}");
          $news=$this->modelsManager->createQuery("SELECT News_ID,News_Title,News_Alias,News_Images,News_Summary,News_Dateposted,News_isActive,News_Views FROM News WHERE News_Title LIKE ('% $keyword %') 
            ORDER BY News_ID DESC LIMIT {$offset},{$row_count} ");
        }
            $resultnews = $news->execute();
            $this->view->news= $resultnews;
      }  
    
    public function deleteAction($id)
    {
        $this->_registerSession();
        $delnews = News::findFirstByNews_ID($id);
        if($delnews != null){
            if(file_exists("files/".$delnews->News_Images))
            { 
                unlink("files/".$delnews->News_Images);
                $delnews->delete();
                $this->flash->success('Đã Xóa Thành Công 1 News');
                return $this->response->redirect('news/index');
            }else{
                $delnews->delete();  
                $this->flash->success('Đã Xóa Thành Công 1 News');
                return $this->response->redirect('news/index');
            }
        }
    }    
         
    public function addAction()
    {   
        $filter = new Filter();
        $this->_registerSession();
        $listcate = Category::find();
        $this->view->listcateupdate = $listcate;// Lấy ra danh sách category trong Admin
        if($this->request->isPost())
        {
            $validation = new Validation();
            $validation
            ->add('news_title',new StringLength(array(
              'min' => 20,
              'messageMinimum' => 'Tiêu Đề Quá Ngắn Yêu Cầu Trên 50 Ký Tự'
              )));
            $validation
            ->add('news_summary',new StringLength(array(
              'min' => 50,
              'messageMinimum' => 'Nội Dung Ngắn Quá Ngắn Yêu Cầu Trên 100 Ký Tự'
              )));
             $validation
            ->add('news_content',new StringLength(array(
              'min' => 200,
              'messageMinimum' => 'Nội Dung Bài Viết Quá Ngắn Yêu Cầu Trên 200 Ký Tự'
              )));
            $validation
            ->add('news_keyword',new PresenceOf(array('message' => 'Yêu Cầu Nhập Keyword')));
            $messages = $validation->validate($_POST);
            if (count($messages)) {
                foreach ($messages as $message) {
                    $this->flash->error($message);
                    return $this->response->redirect('news/add');
                }
            }else{
                $news = new News();
                if($this->upload('news_images') == true){ // gọi hàm Upload
                   $checktitle = $news->News_Title = $filter->sanitize($this->request->getPost('news_title'),"trim");
                    $news->News_Summary =  $this->request->getPost('news_summary');
                    $news->News_Images =   $this->stripUnicode(date('Ymdhisa')."_".$_FILES['news_images']['name']);
                    $news->News_Content =  $this->request->getPost('news_content');
                    $news->News_Dateposted =  date('Y-m-d-H-i-s');
                    $news->Category_ID =  $this->request->getPost('news_category_id');
                    $news->News_Keyword =  $this->request->getPost('news_keyword');
                    $news->News_Hot = $this->request->getPost('activeHot');
                    $news->News_isActive = $this->request->getPost('activeNews');
                    $check = News::findFirstByNews_Title($checktitle);
                    if($check){
                      $news->News_Alias = $this->url_slug($news->News_Title)."-".date('YmdHis');
                    }else{
                      $news->News_Alias = $this->url_slug($news->News_Title);
                    }
                    if($news->save()){
                      $this->flash->success('Đã Thêm Thành Công 1 News');
                      return $this->response->redirect('news/index');
                    }else{
                        $this->flash->error('Xảy Ra Lỗi Trong Quá Trình Thêm');
                        return $this->response->redirect('news/index');
                    }
                }
            }
        }
    }


    public function updateAction($id){
        $this->_registerSession();
        $listcate = Category::find();
        $this->view->listcateupdate = $listcate;// Lấy ra danh sách category trong Admin

        $news = News::findFirstByNews_ID($id);
        if(!$news){
            return $this->response->redirect('news/index');
        }else{
            $this->view->news = $news; 
            if($this->request->isPost()){
                $filter = new Filter();
                $validation = new Validation();
                $validation
                ->add('news_title',new StringLength(array(
                  'min' => 20,
                  'messageMinimum' => 'Tiêu Đề Quá Ngắn Yêu Cầu Trên 50 Ký Tự'
                  )));
                $validation
                ->add('news_summary',new StringLength(array(
                  'min' => 50,
                  'messageMinimum' => 'Nội Dung Ngắn Quá Ngắn Yêu Cầu Trên 100 Ký Tự'
                  )));
                 $validation
                ->add('news_content',new StringLength(array(
                  'min' => 200,
                  'messageMinimum' => 'Nội Dung Bài Viết Quá Ngắn Yêu Cầu Trên 200 Ký Tự'
                  )));
                $validation
                ->add('news_keyword',new PresenceOf(array('message' => 'Yêu Cầu Nhập Keyword')));
                $messages = $validation->validate($_POST);
                if (count($messages)) {
                        foreach ($messages as $message) {
                            $this->flash->error($message);
                        }   
                    return $this->response->redirect('news/update/'.$id);  
                }else{
                       if(empty($_FILES['news_images']['name'])){
                            $news->News_Images = $news->News_Images;
                       }else{
                        //
                        if($_FILES['news_images']['type'] == "image/jpeg"
                        || $_FILES['news_images']['type'] == "image/png"
                        || $_FILES['news_images']['type'] == "image/gif"){
                              if($_FILES['news_images']['size'] > 1048576){
                                 return $this->flash->error('File Ảnh Có Dung Lượng Quá Lớn');
                              }else
                              {
                                  if (file_exists("files/".$news->News_Images)){ 
                                     unlink("files/".$news->News_Images);
                                      // $this->response->redirect('news/update/'.$news->News_ID);
                                      $time= date('Ymdhisa'); 
                                      $path = "files/"; 
                                      $tmp_name = $_FILES['news_images']['tmp_name'];
                                      $name = $_FILES['news_images']['name'];
                                      $type = $_FILES['news_images']['type']; 
                                      $size = $_FILES['news_images']['size']; 
                                      move_uploaded_file($tmp_name,$path.$time."_".$this->stripUnicode($name));
                                      $news->News_Images = $this->stripUnicode(date('Ymdhisa')."_".$_FILES['news_images']['name']);
                                    }
                              }
                        }else{
                            return $this->flash->error('Kiểu Ảnh Không Hợp Lệ');
                             }
                        }
                        $checktitle = $news->News_Title = $filter->sanitize($this->request->getPost('news_title'),"trim");
                        $news->News_Summary =  $this->request->getPost('news_summary');
                        $news->News_Content =  $this->request->getPost('news_content');
                        $news->Category_ID =  $this->request->getPost('news_category_id');
                        $news->News_Keyword =  $this->request->getPost('news_keyword');
                        $news->News_Hot = $this->request->getPost('activeHot');
                        $news->News_isActive = $this->request->getPost('activeNews');
                        $check = News::findFirstByNews_Title($checktitle);
                        if($check){
                           $news->News_Alias = $this->url_slug($news->News_Title)."-".$news->News_ID;
                        }else{
                           $news->News_Alias = $this->url_slug($news->News_Title);
                        }
                        if($news->save()){
                            $this->flash->success('Đã Cập Nhật Thành Công 1 News');
                            return $this->response->redirect('news/update');
                        }else{
                            $this->flash->error('Xảy Ra Lỗi Trong Quá Trình Cập Nhật');
                            return $this->response->redirect('news/update');
                        } 
                    }
                }
            }

    }
       
    



         
}
 