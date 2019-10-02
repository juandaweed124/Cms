<?php

class userController extends User{
    
    public function index(){                
        require_once 'views/layouts/header.php';
        require_once 'views/user/index.php';
        require_once 'views/layouts/footer.php';
        
    }

    public function store(){
        //validar
        parent::insertar($_POST);
    }

    function update($data){
        $data = array(
            'id'		=> $_REQUEST['id'],
            'name' 		=> $_REQUEST['name'],

        );
        parent::set_update_user($data);
    }
}