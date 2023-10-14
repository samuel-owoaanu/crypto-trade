<?php
namespace MyApp\Controllers;
class MainController{
    public function index(){
        include("../resources/views/main/home.php");
        echo "jlhdksjfdf";
    }
    public function faq(){
        include("../resources/views/main/faq.php");
    }
}