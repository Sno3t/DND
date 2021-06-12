<!--<!doctype html>-->
<!--<html>-->
<!--<head>-->
<!--    <title>Login pagina</title>-->
<!--    <meta charset="utf-8">-->
<!--</head>-->
<!--<body>-->

<?php

class login
{
    private $conn;
    private $username;
    private $password;

    public function __construct(string $username, string $password)
    {
        $this->conn = new PDO ('mysql:host=localhost;dbname=dnd', "php_user", "123");
        $this->username = $username;
        $this->password = $password;

    }

    public function namecheck(): array
    {
        if (empty($this->username)) {
            throw new Exception("Please enter a password");
        } else {
            return array(trim(($this->username)));
        }

    }

    public function passcheck(): string
    {
        if (empty($this->password)) {
            throw new Exception("Please enter a password");
        } else {
            return trim(($this->password));
        }

    }

    public function Login($username, $password)
    {

        $sql = "SELECT `ID`, `Username`, `Password`, `Admin` FROM `login` WHERE `Username` = ?;";

        if ($stmt = $this->conn->prepare($sql)) {
            if ($stmt->execute($username)) {
                $count = $stmt->rowCount();
                $row = $stmt->fetch(PDO::FETCH_ASSOC);
                if ($count == 1) {//&& !empty($row)) {
                    if (password_verify($password, $row['Password'] )) {
                        if ($row['Admin'] == 1) {
                            $_SESSION ['Admin'] = true;
                        }
                        session_start();
                        $_SESSION["Verfication"] = true;
                        $_SESSION ['Username'] = $row['Username'];
                        header("location: ../adminpage.php");
                    } else {
                        // Verkeerd wachtwoord
                        throw new Exception("Verkeerd wachtwoord of username");
                    }
                } else {
                    // Username bestaat niet
                    throw new Exception("Verkeerd wachtwoord of username");
                }
            } else {
                // De statement ging fout
                throw new Exception("Er is iets fout gegaan met het verbinden met de database");
            }
        }
    }


    public function logout(){


    }

}

