<?php
class admin extends Controller{
    public function __construct() {
        $this->AdminModel = $this->model('AdminModel');
    }

    function Display(){
            $posts = $this->AdminModel->findAllPosts();
    
            $data = [
                'posts' => $posts,
                'Folder' => 'manage',
                'Page' => 'adminpage'
            ];
    
            $this->view('display', $data);
    }
    function showPost($id){
        //model
        $post = $this->AdminModel->findPostById($id);
        //view
        $data = ['post' => $post,
        'Folder' => 'manage',
        'Page' => 'show'];
        $this->view("detail", $data);
    }
    function newPost(){
        $data = [
        'title' => '',
        'img' => '',
        'des' => '',
        'stt' => 0,
        'Folder' => 'manage',
        'Page' => 'new'];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['des']),
                'image'=>$_POST['img'],
                'status'=>$_POST['stt1'],
                'Folder' => 'manage',
                'Page' => 'edit'
            ];

            if ($this->AdminModel->addPost($data)) {
                $this->Display();
            } else {
                die("Something went wrong, please try again!");
            }
            } else {
                $this->view('detail', $data);
        }
    }
    function editpost($id){
        //model
        $post = $this->AdminModel->findPostById($id);
        //view
        $data = ['post' => $post,
        'title' => '',
        'img' => '',
        'des' => '',
        'stt' => 0,
        'Folder' => 'manage',
        'Page' => 'edit'];
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $id,
                'post' => $post,
                'title' => trim($_POST['title']),
                'description' => trim($_POST['des']),
                'image'=>$_POST['img'],
                'status'=>$_POST['stt1'],
                'Folder' => 'manage',
                'Page' => 'edit'
            ];

            if ($this->AdminModel->updatePost($data)) {
                $this->Display();
            } else {
                die("Something went wrong, please try again!");
            }
            } else {
                $this->view('detail', $data);
        }
        //$this->view("detail", $data);
    }

    function deletepost($id){
        //model
        $post = $this->AdminModel->findPostById($id);
        //view
        $data = [
            'posts' => $post,
            'Folder' => 'manage',
            'Page' => 'admin'
        ];
            $this->AdminModel->deletePost($id);
            $this->Display();

    }    
}
?>