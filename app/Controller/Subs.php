<?php

namespace OOP\app\Controller;
use OOP\app\Core\View;
use OOP\app\Model\Subscription;
use OOP\app\Core\Router;

// include '../View/header.php';


class Subs
{
    public $user;

    public function __construct()
    {
        $this->user = new Subscription();
    }

    public function index()
    {
        View::startinput('view/body_home');     
    }

    public function index_subs()
    {
        View::render('view/body_subs', $this->user->show());
    }

    public function add()
    {
        View::startinput('view/body_add_subs');
    }

    public function insert()
    {
        $data = [
            'title' => $_POST['title'],
            'month' => $_POST['month'],
            'price' => $_POST['price'],
        ];
        $this->user->input($data);
        Router::redirect('subs');
    }

    public function new()
    {
        $id = $_POST['id'];
        View::render('view/body_update_subs', $this->user->showone($id));  

    }

    public function update()
    {   
        $id = $_POST['id'];
        $data = [
            'title' => $_POST['title'],
            'month' => $_POST['month'],
            'price' => $_POST['price'],
            'is_Active'=>$_POST['isActive']
        ];
        $this->user->update($data,$id);
        Router::redirect('subs');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->user->delete($id); 
        Router::redirect('subs');
    }

}
