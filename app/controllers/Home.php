<?php

class Home extends Controller{
    function SayHi(){
        $teo = $this->model("StudentModel");
        echo $teo->GetStudent();
        //echo "Home Conntroller, function SayHi()";
    }
    function Show($a, $b){
        $teo = $this->model("StudentModel");
        $tong = $teo->Tong($a,$b);
        $this->view("aodep",
        ["number"=>$tong, 
        "color" => "red",
        "page" =>"news",
        "St"=>$teo->Student()
        ]
);
    }
}
