<?php

class Delete
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO ('mysql:host=localhost;dbname=dnd', "php_user", "123");
    }

    public function DeletePage($name)
    {
        $sql = "DELETE FROM `characters` WHERE Name = :name;";

        if ($stmt = $this->conn->prepare($sql)) {
//            $stmt->bindParam(':Name', $name);
//            $stmt->bindParam(':Body', $body);
//            $stmt->bindParam(':SideBar', $SideBar);
//            $stmt->bindParam(':SideBar2', $SideBar2);


            if ($stmt->execute(array(
                ':Name' => $name,
            ))) {
                echo "Succesfully Deleted character.";
            }
        }
    }


}