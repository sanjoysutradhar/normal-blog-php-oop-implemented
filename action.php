<?php
session_start();
require_once 'vendor\autoload.php';

use App\classes\Auth;
use App\classes\Blog;
$result="";
$result="";
//$result=['name'=>'shanjoy','image'=>'assets/images/about.jpg'];
if(isset($_GET['page']))
{
    if($_GET['page']=='home'){
        $blog=new Blog();
        $blogs=$blog->getAllBlog();
        include 'pages/home.php';
    }
    elseif($_GET['page']=='login'){
        include 'pages/login.php';
    }
    elseif($_GET['page']=='logout'){
        $auth=new Auth();
        $auth->logout();
    }
    elseif($_GET['page']=='dashboard'){
        include 'pages/dashboard.php';
    }
    elseif($_GET['page']=='all-blog'){
        include 'pages/all-blog.php';
    }
    elseif($_GET['page']=='add-blog'){
        include 'pages/add-blog.php';
    }
    elseif($_GET['page']=='manage-blog'){
        $blog=new Blog();
        $blogs=$blog->getAllBlog();
        include 'pages/manage-blog.php';
    }
    elseif($_GET['page']=='edit'){
        $blog= new Blog();
        $id=$_GET['edit_id'];
//        print_r($id);
//        exit();
        $singleBlog=$blog->getBlogById($id);
        include 'pages/edit.php';
    }
    elseif($_GET['page']=='delete'){
        $blog= new Blog();
        $id=$_GET['delete_id'];
        $blog->deleteBlogById($id);
    }
    elseif($_GET['page']=='detail'){
        $blog= new Blog();
        $id=$_GET['id'];
        $singleBlog=$blog->getBlogById($id);
        include 'pages/detail.php';

    }
}
//if(isset($_POST['btn'])){
//    $upload= new FileUpload($_POST,$_FILES);
//    $result = $upload->uploadFile();
//    include 'pages/home.php';
//
//}
elseif(isset($_POST['btn'])){
    $blog= new Blog($_POST,$_FILES);
    $result = $blog->newBlog();
    include 'pages/add-blog.php';

}
elseif(isset($_POST['btnUpdate'])){
    $blog= new Blog($_POST,$_FILES);
//    echo "<pre>";
//    print_r($_POST);
//    exit();
    $result = $blog->updateBlog($_POST['id']);
//    echo "<pre>";
//    print_r($result);
//    exit();
//    include 'pages/.php';

}
elseif(isset($_POST['loginBtn'])){
    $auth =new Auth($_POST);
    $result=$auth->login();
    include 'pages/login.php';
}