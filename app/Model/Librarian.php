<?php

namespace OOP\app\Model;
use OOP\app\Config\Database;

class Librarian extends Database
{
    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM librarian");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function input($data)
    {
        $data+=[
            'created_at' => date("Y-m-d H:i:s ")
        ];
        $statement= self::$conn->prepare("INSERT INTO librarian(username,name,email,password,avatar,created_at,updated_at) VALUES(:username,:name, :email, :password, :avatar, :created_at, NULL)");
        
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM librarian WHERE id= $id");

        return $statement->execute();
    }

    public function showone($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM librarian where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $data+=[
            'updated_at' => date("Y-m-d H:i:s ")
        ];
        $statement = self::$conn->prepare("UPDATE librarian SET username= :username,name= :name ,email = :email ,avatar = :avatar ,created_at= :created_at,updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function findemail($email)
    {
        $statement= self::$conn->prepare("SELECT * FROM data WHERE email='$email';");
        $statement->execute();
        
        return $statement->fetch();
    }
}