<?php

class Home extends Controller
{
    function SayHi()
    {
        $teo = $this->model("StudentModel");
        $this->view(
            "app",
            [
                "title"=>"Trang chủ",
                "page" => "main",
                "St" => $teo->Student(),
                "function"=>"SayHi"
            ]
        );
    }

    //show()
    function Show()
    {
        $teo = $this->model("StudentModel");
        
        $this->view(
            "aodep",
            [
                "title"=>"Trang show",
                "color" => "red",
                "page" => "news",
                "St" => $teo->Student()
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
