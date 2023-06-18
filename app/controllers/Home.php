<?php

class Home extends Controller
{
    public $title = "Trang chủ";
    function SayHi()
    {
        $teo = $this->model("StudentModel");
        $this->view(
            "app",
            [
                "title"=>"Trang chủ",
                "page" => "main",
                "St" => $teo->Student(),
                "functionn"=>"SayHi"
            ]
        );
    }

    //show()
    function Show()
    {
        $teo = $this->model("StudentModel");
        
        $this->view(
            "app",
            [
                "title"=>"Trang show",
                "color" => "red",
                "page" => "news",
                "St" => $teo->Student(),
                "function"=>"Show"
            ]
        );
    }
/** 
*    function Show($a, $b)
*   {
*        $teo = $this->model("StudentModel");
*        $tong = $teo->Tong($a, $b);
*        $this->view(
*            "aodep",
*            [
*                "number" => $tong,
*                "color" => "red",
*                "page" => "news",
*                "St" => $teo->Student()
*            ]
*        );
*    }
*/
}
