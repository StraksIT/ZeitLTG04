<?php

class Login extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'We are in Login Controller';
    }

    function index() 
    {
        echo Hash::create('md5', 'jesse', HASH_PASSWORD_KEY);
        $this->view->render('login/index');
    }
    
    function run()
    {
        $this->model->run();
    }
        

}

?>
