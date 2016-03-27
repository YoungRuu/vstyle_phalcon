
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

        // {{ dispatcher.getActionName() }}     => Lấy Tên Của Action
        // {{ dispatcher.getControllernName() }}     => Lấy Tên Của Controller
class ControllerBase extends Controller
{
    public function _registerSession(){
        if($this->session->has('loginok') != true){
            $this->response->redirect('admin/index');
        }
    }
	public function initialize(){
        date_default_timezone_set('Asia/Ho_Chi_Minh');
        $this->tag->setTitle("Caribe");
     		$this->view->advertise = Advertise::find();
      	$this->view->feedback = Feedback::find();
      	$this->view->category = Category::find('Category_isActive = 1');
      	$this->view->user = User::find();
        //
        $user = $this->session->get('loginok');
        $this->view->user = $user; // Lấy Username từ mảng session login
        // $idgroup = $this->session->get('loginok');
        // $this->view->idgroup = $idgroup; // Lấy Username từ mảng session login
        //
        $menu_admin = array(
            array('name' => 'Dashboard','link' => 'dashboard'),
            array('name' => 'Advertise','link' => 'advertise'),
            array('name' => 'Feedback','link' => 'feedback'),
            array('name' => 'Category','link' => 'category'),
            array('name' => 'News','link' => 'news'),
            array('name' => 'User','link' => 'user')
        );
        
        $menu_mod = array(
            array('name' => 'Dashboard','link' => 'dashboard'),
            array('name' => 'Feedback','link' => 'feedback'),
            array('name' => 'News','link' => 'news')
        );
         
         if($user->User_idGroup == 1){
            $this->view->menu = $menu_admin;
         }else{
            $this->view->menu = $menu_mod;
         }
         
     }

    public function upload($nameinput = null)
    {
           if(empty($_FILES[$nameinput]['name'])){ 
                $this->flash->error('Vui Lòng Chọn File Ảnh');
                return false;
           }else{
                if($_FILES[$nameinput]['type'] == "image/jpeg"
                || $_FILES[$nameinput]['type'] == "image/png"
                || $_FILES[$nameinput]['type'] == "image/gif"){
                  // Là File Ảnh
                  // Tiến Hành Upload File
                  if($_FILES[$nameinput]['size'] > 1048576){
                     return $this->flash->error('File Ảnh Có Dung Lượng Quá Lớn');
                  }else{
                      $time= date('Ymdhisa'); // Thời gian
                      $path = "files/"; // Ảnh Upload xong lưu vào thư mục filse
                      $tmp_name = $_FILES[$nameinput]['tmp_name'];
                      $name = $_FILES[$nameinput]['name'];
                      $type = $_FILES[$nameinput]['type']; 
                      $size = $_FILES[$nameinput]['size']; 
                      move_uploaded_file($tmp_name,$path.$time."_".$this->stripUnicode($name));
                  }
                }else{
                 return $this->flash->error('Kiểu Ảnh Không Hợp Lệ');
                }
                return true;
           }
    }

    public function updateimg($nameinput,$imagedb){
       if(empty($_FILES[$nameinput]['name'])){
              $imagedb = $imagedb;
              //$news->News_Images = $news->News_Images;
         }else{
          //
          if($_FILES[$nameinput]['type'] == "image/jpeg"
          || $_FILES[$nameinput]['type'] == "image/png"
          || $_FILES[$nameinput]['type'] == "image/gif"){
                if($_FILES[$nameinput]['size'] > 1048576){
                   return $this->flash->error('File Ảnh Có Dung Lượng Quá Lớn');
                }else
                {
                    if (file_exists("files/".$imagedb)){ 
                       unlink("files/".$imagedb);
                        $time= date('Ymdhisa'); 
                        $path = "files/"; 
                        $tmp_name = $_FILES[$nameinput]['tmp_name'];
                        $name = $_FILES[$nameinput]['name'];
                        $type = $_FILES[$nameinput]['type']; 
                        $size = $_FILES[$nameinput]['size']; 
                        move_uploaded_file($tmp_name,$path.$time."_".$this->stripUnicode($name));
                        $imagedb = $this->stripUnicode(date('Ymdhisa')."_".$_FILES[$nameinput]['name']);
                      }else{
                        return $this->flash->error('File Ảnh Chưa Tồn Tại Trong Hệ Thống. Không Thể Update');
                      }
                }
          }else{
              return $this->flash->error('Kiểu Ảnh Không Hợp Lệ');
               }
          }
    }

    public function pagination($namemodel){
      $numberPage = $this->request->getQuery("page", "int");
      $paginator = new Paginator(array(
          "data"  => $namemodel,
          "limit" => 9,
          "page"  => $numberPage
      ));
      $this->view->page = $paginator->getPaginate();
    }

  //   public function paginationreal(){
  //     //Pagination ......
  //     $row_count = 9;//Số tin hiển thị trên 1 trang
  //     //Lấy trang hiện tại thông qua biến page trên url
  //     $page = $this->request->get('page');
  //     if($page){
  //         $tranghientai = $this->request->get('page');
  //     }else{
  //         $tranghientai = 1;
  //     }
  //     //Tính offset
  //     $offset = ($tranghientai - 1)*$row_count;
  //     $sqlSel=$this->db->query("SELECT News_ID FROM News Where Category_ID = $alias->Category_ID ");
  //     //Lấy ra tổng số dòng trong CSDL
  //     $tongsodong = $sqlSel->numRows();
                  
  //     //Tính tổng số trang
  //     $tongsotrang = ceil($tongsodong/$row_count) - 1;
  //     //
  // $sql = $this->db->query("SELECT News.News_Title,News.News_Alias, News.News_Images, News.News_Summary ,News.News_Content , Category.Category_Alias FROM News INNER JOIN Category ON News.Category_ID = Category.Category_ID WHERE News.News_Hot = 0 and News.News_isActive = 1 and News.Category_ID = '.$alias->Category_ID.' LIMIT {$offset}, {$row_count}" );
      
  //     $this->view->sql = $sql;
  //     $this->view->tongsotrang = $tongsotrang;
  //     $this->view->tranghientai = $tranghientai;
  //   }
   
    public function url_slug($str){
        $unicode = array(
            'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd'=>'đ|Đ',
            'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i'=>'í|ì|ỉ|ĩ|ị|Í|Ì|Ỉ|Ĩ|Ị',
            'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự|Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
            'y'=>'ý|ỳ|ỷ|ỹ|ỵ|Ý|Ỳ|Ỷ|Ỹ|Ỵ',
        );
        
       foreach($unicode as $nonUnicode=>$uni){
            $str = preg_replace("/($uni)/i", $nonUnicode, $str);
            $str = str_replace(" ","-",$str);
            $str = str_replace(",","-",$str);
            $str = str_replace("+","-",$str);
            $str = str_replace("_","-",$str);
            $str = str_replace(")","-",$str);
            $str = str_replace("(","-",$str);
            $str = str_replace("!","-",$str);
            $str = str_replace("@","-",$str);
            $str = str_replace("#","-",$str);
            $str = str_replace("$","-",$str);
            $str = str_replace("%","-",$str);
            $str = str_replace("^","-",$str);
            $str = str_replace("-","-",$str);
            $str = str_replace("*","-",$str);
            $str = str_replace("/","-",$str);
            $str = str_replace("","-",$str);
            $str = str_replace("'","",$str);
            $str = str_replace(":","",$str);
            $str = str_replace(".","",$str);
       }
    return strtolower($str);
    }


    function stripUnicode($str){ 
        $unicode = array( 
        'a'=>'á|à|ả|ã|ạ|ă|ắ|ặ|ằ|ẳ|ẵ|â|ấ|ầ|ẩ|ẫ|ậ',
        'd'=>'đ', 
        'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
        'i'=>'í|ì|ỉ|ĩ|ị',
        'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ', 
        'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự', 'y'=>'ý|ỳ|ỷ|ỹ|ỵ', ); 
        foreach($unicode as $nonUnicode=>$uni) $str = preg_replace("/($uni)/i",$nonUnicode,$str); 
        return $str; 
    }

    
}

