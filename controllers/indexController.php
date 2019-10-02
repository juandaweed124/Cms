<?php

class indexController{

    /**
     * Función que se ejecuta siempre que se crea un objeto.
     * Se puede usar para la seguridad de un controlador.
     */
    public function __construct(){    

    }

    /**
     * Vista principal de los controladores.
     * Principalmente casi siempre se retorna una vista con una tabla para mostrar todos los registros. (Esto depende de la necesidad del cliente)
     */
    public function index(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * Esta función retorna una vista con un formulario.
     */
    public function create(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/publicaciones.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * Esta función se encarga de validar y almacenar en la base de datos la informacion enviada desde un formulario.
     */
    public function store(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * Esta función retorna una vista con un formulario con valores definidos de un registro especifico.
     */
    public function edit(){

    }

    /**
     * Esta función se encarga de validar y actualizar en la base de datos la información de un registro especifico.
     */
    public function update(){
        require_once 'views/layouts/header.php';
        require_once 'views/index/index.php';
        require_once 'views/layouts/footer.php';
    }

    /**
     * Esta funcion se encarga de borrar un registro especifico en la base de datos.
     */
    public function delete(){

    }

}