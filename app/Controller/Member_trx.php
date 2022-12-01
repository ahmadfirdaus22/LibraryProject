<?php

namespace OOP\app\Controller;
use OOP\app\Core\View;
use OOP\app\Model\Member_TRX2;
use OOP\app\Model\Member;
use OOP\app\Model\Subscription;
use OOP\app\Core\Router;

// include '../View/header.php';


class Member_trx
{
    public $user;

    public function __construct()
    {
        $this->user = new Member_TRX2();
        $this->orang = new Member();
        $this->paket = new Subscription();
    }

    public function index()
    {
        View::startinput('view/body_home');     
    }

    public function index_member_trx()
    {
        View::render('view/body_member_trx', $this->user->show());
    }

    public function add()
    {
        View::render2('view/body_add_member_trx', $this->orang->show(),$this->paket->show());
    }

    public function insert()
    {
        $data = [
            'name' => $_POST['name'],
            'title' => $_POST['title'],
            'active_at' => $_POST['active_at'],
            'expire_at' =>$_POST['expire_at'],
            'status' =>$_POST['status'],
            'total_order'=>$_POST['total_order'],
            'note' =>$_POST['note'],
        ];
        $this->user->input($data);
        Router::redirect('member_trx');
    }

    public function new()
    {
        $id = $_POST['id'];
        $member_id = $_POST['name'];
        $subs_id = $_POST['title'];
        View::render3('view/body_update_member_trx', $this->user->showone($id),$this->orang->showname($member_id),$this->paket->showtitle($subs_id));  

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
        Router::redirect('member_trx');
    }

    public function delete()
    {
        $id = $_POST['id'];
        $this->user->delete($id); 
        Router::redirect('member_trx');
    }

}
