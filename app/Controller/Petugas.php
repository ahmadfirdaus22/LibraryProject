<?php

namespace OOP\app\Controller;
use OOP\app\Core\View;
use OOP\app\Model\Librarian;
use OOP\app\Core\Router;

// include '../View/header.php';


class Petugas
{
    public $user;

    public function __construct()
    {
        $this->user = new Librarian();
    }

    public function index()
    {
        View::startinput('view/body_home');     
    }

    public function index_petugas()
    {
        View::render('view/body_petugas', $this->user->show());
    }

    public function add()
    {
        View::startinput('view/body_add_petugas');
    }

    public function insert()
    {
        $data = [
            'username' => $_POST['username'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'password' =>  password_hash($_POST['password'],PASSWORD_DEFAULT),
            'avatar' => $_POST['avatar']
        ];
        $this->user->input($data);
        Router::redirect('');
    }

    public function new()
    {
        $id = $_POST['id'];
        View::render('view/body_update_petugas', $this->user->showone($id));  

    }

    public function update()
    {   
        $id = $_POST['id'];
        $data = [
            'username' => $_POST['username'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
            'avatar' => $_POST['avatar'],
            'created_at' => $_POST['created_at']
        ];
        $this->user->update($data,$id);
        Router::redirect('');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->user->delete($id); 
        Router::redirect('');
    }

    public function login_page()
    {
        View::login('view/login');    
    }

    public function login()
    {
        $user = $this->user->findemail($_POST['email']);
        // die(var_dump($user['password']));
        if($user && password_verify($_POST['password'], $user['password'])){
            $_SESSION['auth'] =$user;

            Router::redirect('');
            return;
        }
        Router::redirect('login_page');
    }

}
