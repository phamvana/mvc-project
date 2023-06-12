<?php

class Home extends Controller{
    function SayHi(){
        $teo = $this->model("StudentModel");
        echo $teo->GetStudent();
        //echo "Home Conntroller, function SayHi()";
    }
    function Show(){
        echo "Đây là hàm show() từ controller Home";
    }
}
