<?php

class UsersController{
    public function ShowUsers()
    {
        return ($this->model->index()) ? $this->model->index() : false;
        include "resources/views/users/show.php";   
    }
    
}

?>