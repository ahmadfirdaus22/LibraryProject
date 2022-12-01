<?php

namespace OOP\app\Controller;
use OOP\app\Core\View;
use OOP\app\Model\Books;
use OOP\app\Core\Router;

// include '../View/header.php';


class Buku
{
    public $user;

    public function __construct()
    {
        $this->user = new Books();
    }

    public function index()
    {
        View::startinput('view/body_home');     
    }

    public function index_buku()
    {
        View::render('view/body_buku', $this->user->show());
    }

    public function add()
    {
        View::startinput('view/body_add_buku');
    }

    public function insert()
    {
        $data = [
            'isbn' => $_POST['isbn'],
            'title' => $_POST['title'],
            'synopsis' => $_POST['synopsis'],
            'author' => $_POST['author'],
            'publisher' =>$_POST['publisher'],
            'category' =>$_POST['category'],
            'languange'=>$_POST['languange']
        ];
        $this->user->input($data);
        Router::redirect('buku');
    }

    public function new()
    {
        $id = $_POST['id'];
        View::render('view/body_update_buku', $this->user->showone($id));  

    }

    public function update()
    {   
        $id = $_POST['id'];
        $data = [
            'isbn' => $_POST['isbn'],
            'title' => $_POST['title'],
            'synopsis' => $_POST['synopsis'],
            'author' => $_POST['author'],
            'publisher' =>$_POST['publisher'],
            'category' =>$_POST['category'],
            'languange'=>$_POST['languange']
        ];
        $this->user->update($data,$id);
        Router::redirect('buku');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->user->delete($id); 
        Router::redirect('buku');
    }

}
