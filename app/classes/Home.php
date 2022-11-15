<?php


namespace App\classes;
use App\classes\Database;

class Home
{
//    private $db;
    public function index(){
//        $this->db=new Database();
//        echo '<pre>';
//        print_r($this->db->dbConnect());
//        exit();

        header('Location: action.php?page=home');
    }
}