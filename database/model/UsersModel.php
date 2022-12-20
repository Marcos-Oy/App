<?php
    // GETTER & SETTER
class UsersModel{
    
    private $id;
    private $user;
    private $name;
    private $lastname_p;
    private $lastname_m;
    private $phone;
    private $mail;
    private $role;
    private $state;
    private $password;
        
    public function getId(){ return $this->id; }
    public function setId($id): self { $this->id = $id; return $this; }

    public function getUser(){ return $this->user; }
    public function setUser($user): self { $this->user = $user; return $this; }

    public function getName(){ return $this->name; }
    public function setName($name): self { $this->name = $name; return $this; }

    public function getLastnameP(){ return $this->lastname_p; }
    public function setLastnameP($lastname_p): self { $this->lastname_p = $lastname_p; return $this; }

    public function getLastnameM(){ return $this->lastname_m; }
    public function setLastnameM($lastname_m): self { $this->lastname_m = $lastname_m; return $this; }

    public function getPhone(){ return $this->phone; }
    public function setPhone($phone): self { $this->phone = $phone; return $this; }

    public function getMail(){ return $this->mail; }
    public function setMail($mail): self { $this->mail = $mail; return $this; }

    public function getRole(){ return $this->role; }
    public function setRole($role): self { $this->role = $role; return $this; }

    public function getState(){ return $this->state; }
    public function setState($state): self { $this->state = $state; return $this; }

    public function getPassword(){ return $this->password; }
    public function setPassword($password): self { $this->password = $password; return $this; }
    
}

?>