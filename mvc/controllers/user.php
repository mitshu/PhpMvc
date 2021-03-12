<?php
class user extends Controller{
    public function __construct() {
        $this->UserModel = $this->model('UserModel');
    }
    function Display(){
        $posts = $this->UserModel->Display();

        $data = [
            'posts' => $posts,
            'Folder' => 'user',
            'Page' => 'homepage'
        ];

        $this->view('display', $data);
    }
    function detail($id){
        //model
        $post = $this->UserModel->Detail($id);
        //view
        $data = ['post' => $post,
        'Folder' => 'user',
        'Page' => 'detail'];
        $this->view("detail", $data);
    }

}
?>