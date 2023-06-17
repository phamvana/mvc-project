<?php

class Home extends Controller
{
    function SayHi()
    {
        $teo = $this->model("StudentModel");
        echo $teo->GetStudent();
        //echo "Home Conntroller, function SayHi()";
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
