<?php

class Home extends Controller
{
    function SayHi()
    {
        $teo = $this->model("StudentModel");
        $this->view(
            "app",
            [
                "page" => "news",
                "St" => $teo->Student()
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
