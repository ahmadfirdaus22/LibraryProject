<?php

namespace OOP\app\Model;
use OOP\app\Config\Database;

class Member_TRX2 extends Database
{
    public function show(){
        $statement = self::$conn->prepare("SELECT member_trx.*, member.full_name as name, subscription.title as title FROM member_trx JOIN member ON member.id = member_trx.member_id JOIN subscription ON subscription.id = member_trx.subs_id");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function input($data)
    {
        $data+=[
            'trx_date' => date("Y-m-d H:i:s "),
            'created_at' => date("Y-m-d H:i:s ")
        ];
        $statement= self::$conn->prepare("INSERT INTO member_trx(member_id,subs_id,trx_date,active_at, expire_at,status,total_order,note,created_at,updated_at) VALUES(:name,:title,:trx_date,:active_at,:expire_at, :status,:total_order, :note, :created_at, Null)");
        
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM member_trx WHERE id= $id");

        return $statement->execute();
    }

    public function showone($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM member_trx where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $data+=[
            'updated_at' => date("Y-m-d H:i:s ")
        ];
        $statement = self::$conn->prepare("UPDATE member_trx SET nik= :nik,full_name= :full_name ,phone = :phone ,address = :address , born_place=:born_place, born_date=:born_date, country= :country, nationality=:nationality, gender= :gender, isActive = :isActive, updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function findemail($email)
    {
        $statement= self::$conn->prepare("SELECT * FROM data WHERE email='$email';");
        $statement->execute();
        
        return $statement->fetch();
    }
}