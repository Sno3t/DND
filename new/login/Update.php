<?php

class Update
{
    private $conn;

    public function __construct()
    {
        $this->conn = new PDO ('mysql:host=localhost;dbname=dnd', "php_user", "123");
    }

    public function DeletePage($name, $nameNew, $body, $SideBar, $SideBar2)
    {
        $sql = "UPDATE `characters` SET ,`Name`=:NameNew,`Body`= :Body,`SideBar`=:SideBar,`SideBar2`=:SideBar2 WHERE :Name";

        if ($stmt = $this->conn->prepare($sql)) {
            $stmt->bindParam(':Name', $name);
            $stmt->bindParam(':NameNew', $namNew);
            $stmt->bindParam(':Body', $body);
            $stmt->bindParam(':SideBar', $SideBar);
            $stmt->bindParam(':SideBar2', $SideBar2);


            if ($stmt->execute(array(
                ':Name' => $name,
                ':NameNew' => $nameNew,
                ':Body' => $body,
                ':SideBar' => $SideBar,
                ':SideBar2' => $SideBar2
            ))) {
                echo "Succesfully Updated character.";
            }
        }
    }


}