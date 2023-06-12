<?php
class App{
    /**
     * Undocumented variable
     *
     * @var string
     * Tạo 3 biến protected lưu các giá trị
     * controller --> Mặc định có giá trị Home
     * action --> Mặc định có giá trị SayHi
     * params --> Mặc định là một mảng
     */
    protected $controller="Home";
    protected $action="SayHi";
    protected $params=[];
    /**
     * Hàm khởi tạo của lớp App được khai báo ở đây
     * 
     */
    function __construct(){
        //Array ( [0] => Home [1] => sayhi [2] => 1 [3] => 2 [4] => 3 )
        $arr = $this->UrlProcess();
        //print_r($arr);
        /* Controller
        * Kiểm tra file có tồn tại ? 
        * Lấy phần tử 0 của mảng --> gán giá trị $arr[0] cho controller
        * Xoá phần tử 0 bằng hàm unset($arr[0])
        */
        if( file_exists("./app/controllers/".$arr[0].".php") ){
            $this->controller = $arr[0];
            unset($arr[0]);
        }
        require_once "./app/controllers/". $this->controller .".php";
        $this->controller = new $this->controller;
          
        // Action
        if(isset($arr[1])){
            if( method_exists( $this->controller , $arr[1]) ){
                $this->action = $arr[1];
            }
            unset($arr[1]);
        }
        //echo $this->action; Kiểm tra action
        
        // Xử lý Params
        $this->params = $arr?array_values($arr):[];
        call_user_func_array([$this->controller, $this->action], $this->params );
        
    }

    /**
     * Nhiệm vụ: Hàm cắt chuổi từ url
     * 
     * 1.Nếu thanh địa chỉ tồn tại biến url
     * --> cắt "/"
     * --1.1 Loại bỏ khẳng trắng bằng hàm trim($_GET["url"], "/")
     * --1.2 Đảm bảo check theo dấu "/" bằng hàm filter_var(trim($_GET["url"], "/"))
     * --1.3 Cắt them dấu "/" bằng hàm explode()
     */
    function UrlProcess(){

        if( isset($_GET["url"]) ){
            return explode("/", filter_var(trim($_GET["url"], "/")));
        }
    }

}