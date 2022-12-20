<?php

class UsersController{

    /*************************LLAMADA A LAS VISTAS**********************/
    public function show()
    {
        include "resources/views/users/show.php";   
    }

    public function create()
    {
        include "resources/views/users/create.php";   
    } 

    public function edit()
    {
        include "resources/views/users/edit.php";   
    }    
    
    /*************************CRUD USUARIO**********************/

}

?>