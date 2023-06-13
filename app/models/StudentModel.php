<?php
class StudentModel extends DB{
    public function GetStudent(){
        return "Nguyễn Văn Tèo";
    }
    public function Tong($n,$m){
        return $n + $m;
    }

    public function Student(){
        $qr = "SELECT * FROM Student";
        return mysqli_query($this->con, $qr);
    }
}