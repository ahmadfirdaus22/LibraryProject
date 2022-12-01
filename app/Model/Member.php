<?php

namespace OOP\app\Model;
use OOP\app\Config\Database;

class Member extends Database
{
    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM member");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function showname($nama)
    {
        $statement = self::$conn->prepare("SELECT * FROM member where full_name = '$nama'");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function input($data)
    {
        $data+=[
            'created_at' => date("Y-m-d H:i:s ")
        ];
        $statement= self::$conn->prepare("INSERT INTO member(nik,full_name,phone,address,born_place, born_date, gender, country, nationality,created_at,updated_at) VALUES(:nik,:full_name,:phone,:address,:born_place, :born_date, :gender, :country, :nationality, :created_at, Null)");
        
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM member WHERE id= $id");

        return $statement->execute();
    }

    public function showone($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM member where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $data+=[
            'updated_at' => date("Y-m-d H:i:s ")
        ];
        $statement = self::$conn->prepare("UPDATE member SET nik= :nik,full_name= :full_name ,phone = :phone ,address = :address , born_place=:born_place, born_date=:born_date, country= :country, nationality=:nationality, gender= :gender, isActive = :isActive, updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function findemail($email)
    {
        $statement= self::$conn->prepare("SELECT * FROM data WHERE email='$email';");
        $statement->execute();
        
        return $statement->fetch();
    }
}