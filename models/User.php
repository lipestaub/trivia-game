<?php 

class User
{
    private int $id;
    private string $username;
    private string $password;


    public function __construct($id, $username, $password)
    {
        $this->id       = $id;
        $this->username = $username;
        $this->password = $password;
    }

    // Metodos Getters e Setters

    // id

    public function getId()
    {
        return $this->id;
    }

    //username

    public function getUsername()
    {
        return $this->username;
    }

}
    

?>