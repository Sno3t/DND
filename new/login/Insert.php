<?php

class Insert
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO ('mysql:host=localhost;dbname=dnd', "php_user", "123");
    }

    public function InsertPage($name, $body, $SideBar, $SideBar2)
    {
        $sql = "INSERT INTO `characters`(`ID`, `Name`, `Body`, `SideBar`, `SideBar2`) VALUES (DEFAULT,:Name,:Body,:SideBar,:SideBar2);";

        if ($stmt = $this->conn->prepare($sql)) {
//            $stmt->bindParam(':Name', $name);
//            $stmt->bindParam(':Body', $body);
//            $stmt->bindParam(':SideBar', $SideBar);
//            $stmt->bindParam(':SideBar2', $SideBar2);


            if ($stmt->execute(array(
                ':Name' => $name,
                ':Body' => $body,
                ':SideBar' => $SideBar,
                ':SideBar2' => $SideBar2
            ))) {
                echo "Succesfully inserted character.";
            }
        }
    }


}