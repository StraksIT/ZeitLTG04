<?php

class Dashboard extends Controller {

    function __construct() {
        parent::__construct();
        //echo 'We are in dasboard Controller';
        Session::init();
        
        $logged = Session::get('loggedIn');
        if ($logged == FALSE) {
            Session::destroy();
            header('location: ../login');
            exit;
        }
        
        $this->view->js = array('dashboard/js/default.js');
        
    }

    function index() {
        
        $this->view->render('dashboard/index');
    }
    
    function logout() {
        Session::destroy();
        header('location: ' . URL . 'login');
        exit;
    }
    
    function xhrInsert()
    {
        $this->model->xhrInsert();
    }
    
    function xhrGetListings()
    {
        $this->model->xhrGetListings();
    }
    
    function xhrDeleteListing()
    {
        $this->model->xhrDeleteListing();
    }
    
}

?>
