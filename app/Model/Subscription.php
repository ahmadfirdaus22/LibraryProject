<?php

namespace OOP\app\Model;
use OOP\app\Config\Database;

class Subscription extends Database
{
    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM subscription");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function input($data)
    {
        $data+=[
            'created_at' => date("Y-m-d H:i:s ")
        ];
        $statement= self::$conn->prepare("INSERT INTO subscription(title,month,price,is_Active,created_at, updated_at ) VALUES(:title,:month,:price,1, :created_at, NULL)");
        
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM subscription WHERE id= $id");

        return $statement->execute();
    }

    public function showone($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM subscription where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $data+=[
            'updated_at' => date("Y-m-d H:i:s ")
        ];
        $statement = self::$conn->prepare("UPDATE subscription SET title=:title,month=:month,price=:price,is_Active=:is_Active,updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }

    public function showtitle($title)
    {
        $statement = self::$conn->prepare("SELECT * FROM subscription where title='$title'");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }


}