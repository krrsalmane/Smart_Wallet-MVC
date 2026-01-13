<?php 


class User {

    private string $full_Name;
    private string $email;
    private string $password;


    public function getFull_Name():string
    {
        return $this->full_Name;
    }
    public function getEmail():string
    {
        return $this->email;
    }
    public function getPassword():string
    {
        return $this ->password;
    }
    public function setEmail(string $email):void
    {
        $this->email = $email;
    }
     public function setFull_Name(string $full_Name):void
     {
        $this->full_Name = $full_Name;
     }



}



?>