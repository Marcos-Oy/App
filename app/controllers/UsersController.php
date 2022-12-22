<?php

class UsersController{

    /*************************LLAMADA A LAS VISTAS**********************/
    public function show()
    {
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        $rows = $obj->list_users();   
        require_once ("resources/views/users/show.php");   
    }

    public function create()
    {   
        require_once ("resources/views/users/create.php");   
    } 

    public function edit()
    {
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();  

        $apt->setUsername($_POST['username']);
        $result = $obj->show_by_username($apt->getUsername());
        
        require_once ("resources/views/users/edit.php");   
    }    
    
    /*************************CRUD USUARIO**********************/

    public function create_users()
    {   
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();

        $apt->setUsername($_POST['username']); 
        $apt->setName($_POST['nombre']);
		$apt->setLastnameP($_POST['paterno']);
		$apt->setLastnameM($_POST['materno']);
        $apt->setMail($_POST['email']);
		$apt->setPhone($_POST['tel']);
        $apt->setRole($_POST['role']);
        $apt->setRut($_POST['rut']);

        $id = $obj->insert_users($apt->getUsername(),$apt->getRut(),$apt->getName(),
        $apt->getLastnameP(),$apt->getLastnameM(),$apt->getPhone(),$apt->getMail(),
        $apt->getRole());

        if(isset($id) && !empty($id))
		{
			echo "<script>alert('Ingreso correcto');
			window.location= '?control=Users&action=show'</script>";
		}
		else
		{
			echo "<script>alert('No Exitoso');
			window.location= '?control=Users&action=create'</script>";
		}
    } 

    public function edit_users()
    {
        require_once ("database/ModelDAO/UsersDAO.php");
        $obj = new UsersDAO();

        require_once ("database/model/UsersModel.php");
        $apt = new UsersModel();
        $apt->setUsername($_POST['username']); 
        $apt->setName($_POST['nombre']);
		$apt->setLastnameP($_POST['paterno']);
		$apt->setLastnameM($_POST['materno']);
        $apt->setMail($_POST['email']);
		$apt->setPhone($_POST['tel']);
        $apt->setRole($_POST['role']);
        $apt->setRut($_POST['rut']);
        $apt->setUsername2($_POST['username2']);

        $id = $obj->update_users($apt->getUsername(),$apt->getRut(),$apt->getName(),
        $apt->getLastnameP(),$apt->getLastnameM(),$apt->getPhone(),$apt->getMail(),
        $apt->getRole(),$apt->getUsername2());

        if(isset($id) && !empty($id))
		{
			echo "<script>alert('Actualización correcta');
			window.location= '?control=Users&action=show'</script>";
		}
		else
		{
			echo "<script>alert('No Exitoso');
			window.location= '?control=Users&action=show'</script>";
		}

    }

}

?>