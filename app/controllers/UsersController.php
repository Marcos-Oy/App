<?php

class UsersController{

    /*************************LLAMADA A LAS VISTAS**********************/
    public function Show()
    {
        include "resources/views/users/show.php";   
    }

    public function Create()
    {
        include "resources/views/users/create.php";   
    } 

    public function Edit()
    {
        include "resources/views/users/edit.php";   
    }    
    
    /*************************CRUD USUARIO**********************/

}

?>