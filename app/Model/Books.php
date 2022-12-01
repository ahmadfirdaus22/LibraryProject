<?php

namespace OOP\app\Model;
use OOP\app\Config\Database;

class Books extends Database
{
    public function show(){
        $statement = self::$conn->prepare("SELECT * FROM books");
        $statement->execute();
 
        return $statement->fetchAll(\PDO::FETCH_OBJ);
    }

    public function input($data)
    {
        $data+=[
            'created_at' => date("Y-m-d H:i:s ")
        ];
        $statement= self::$conn->prepare("INSERT INTO books(isbn,title,synopsis,author,publisher,category,languange, created_at, updated_at ) VALUES(:isbn,:title,:synopsis,:author,:publisher,:category,:languange, :created_at, NULL)");
        
        return $statement->execute($data);
    }

    public function delete($id)
    {
        $statement = self::$conn->prepare("DELETE FROM books WHERE id= $id");

        return $statement->execute();
    }

    public function showone($id)
    {
        $statement = self::$conn->prepare("SELECT * FROM books where id=$id");
        $statement->execute();
 
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    public function update($data, $id)
    {
        $data+=[
            'updated_at' => date("Y-m-d H:i:s ")
        ];
        $statement = self::$conn->prepare("UPDATE books SET isbn=:isbn,title=:title,synopsis=:synopsis,author=:author,publisher=:publisher,category=:category,languange=:languange,updated_at = :updated_at where id = $id");

        return $statement->execute($data);
    }


}