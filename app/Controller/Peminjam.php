<?php

namespace OOP\app\Controller;
use OOP\app\Core\View;
use OOP\app\Model\Member;
use OOP\app\Core\Router;

// include '../View/header.php';


class Peminjam
{
    public $user;

    public function __construct()
    {
        $this->user = new Member();
    }

    public function index()
    {
        View::startinput('view/body_home');     
    }

    public function index_peminjam()
    {
        View::render('view/body_peminjam', $this->user->show());
    }

    public function add()
    {
        View::startinput('view/body_add_peminjam');
    }

    public function insert()
    {
        $data = [
            'nik' => $_POST['nik'],
            'full_name' => $_POST['full_name'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'born_place' =>$_POST['born_place'],
            'born_date' =>$_POST['born_date'],
            'gender'=>$_POST['gender'],
            'country' =>$_POST['country'],
            'nationality' =>$_POST['nationality'],
        ];
        $this->user->input($data);
        Router::redirect('peminjam');
    }

    public function new()
    {
        $id = $_POST['id'];
        View::render('view/body_update_peminjam', $this->user->showone($id));  

    }

    public function update()
    {   
        $id = $_POST['id'];
        $data = [
            'nik' => $_POST['nik'],
            'full_name' => $_POST['full_name'],
            'phone' => $_POST['phone'],
            'address' => $_POST['address'],
            'born_place' =>$_POST['born_place'],
            'born_date' =>$_POST['born_date'],
            'gender'=>$_POST['gender'],
            'country' =>$_POST['country'],
            'nationality' =>$_POST['nationality'],
            'isActive'=>$_POST['isActive']
        ];
        $this->user->update($data,$id);
        Router::redirect('peminjam');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->user->delete($id); 
        Router::redirect('peminjam');
    }

}
