<?php


namespace App\classes;
use App\classes\Database;

class Blog
{
    private $imageName;
    private $directory;
    private $tempDirectory;

    private $database,$blog=[],$title,$author,$description,$image,$sql,$queryResult,$blogs=[],$id, $data=[],$row;
    public function __construct($post=null,$files=null)
    {
        if(isset($post['title'])){
            $this->title=$post['title'];
            $this->author=$post['author'];
            $this->description=$post['description'];
            if(isset($post['id'])){
                $this->id=$post['id'];
            }
//        }
//        if(isset($files['image'])){
            if($_FILES['image']['name']){
                $this->imageName=$files['image']['name'];
                $this->directory='assets/images/blog-images/';
                $this->tempDirectory=$files['image']['tmp_name'];
            }
//            $this->image=$this->directory.$this->imageName;

        }
        $this->database= new Database();

    }
    private function getImageUrl(){
        move_uploaded_file($this->tempDirectory,$this->directory.$this->imageName);
        return $this->directory.$this->imageName;
    }

    public function newBlog(){
//        move_uploaded_file($this->tempDirectory,$this->directory.$this->imageName);
        $this->image=$this->getImageUrl();
        $this->sql= "INSERT INTO blogs(title,author,description,image) VALUES('$this->title','$this->author','$this->description','$this->image')";
        $this->database=new Database();
        mysqli_query($this->database->dbConnect(),$this->sql);
        return 'Record save successfully';
    }
    public function getAllBlog(){
        $this->sql="SELECT * FROM blogs";
        $this->database =new Database();
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);

        while($this->row= mysqli_fetch_assoc($this->queryResult)){
            array_push($this->data, $this->row);
        }
        return $this->data;

//        echo '<pre>';
//        print_r($this->data);
//        exit();
//
//        $this->blogs=mysqli_fetch_all($this->queryResult);
////        return $this->blogs;
//        echo '<pre>';
//        print_r($this->blogs);
//        exit();
    }
    public function getBlogById($id){
        $this->sql="SELECT * FROM blogs WHERE id =$id";
//        $this->database =new Database();
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        $this->data=mysqli_fetch_assoc($this->queryResult);

        return $this->data;
    }
    public function  updateBlog(){
        if($this->imageName){
            $this->image=$this->getImageUrl();
        }else{
            $this->blog=$this->getBlogById($this->id);
            $this->image=$this->blog['image'];
        }

        $this->sql="UPDATE blogs SET title='$this->title',author='$this->author',description='$this->description',image='$this->image' WHERE id='$this->id'";
//        $this->database =new Database();
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
//        echo '<pre>';
//        print_r(mysqli_fetch_assoc($this->queryResult));
//        exit();
        header("Location: action.php?page=manage-blog");
//        return 'Record Update successfully';
    }
    public function deleteBlogById($id){
        $this->sql="DELETE FROM blogs WHERE id='$id'";
        $this->queryResult=mysqli_query($this->database->dbConnect(),$this->sql);
        header("Location: action.php?page=manage-blog");
    }
}