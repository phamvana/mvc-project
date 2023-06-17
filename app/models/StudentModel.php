<?php
class StudentModel extends DB{


    public function Student(){
        $qr = "SELECT * FROM Student";
        return mysqli_query($this->con, $qr);
    }
}