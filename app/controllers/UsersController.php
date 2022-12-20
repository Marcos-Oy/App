<?php

class UsersController{

    /*************************LLAMADA A LAS VISTAS**********************/
    public function show()
    {
        include("database/ModelDAO/UsersDAO.php");
        $apt= new UsersDAO();
        $rows = $apt->list_users();
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