<?php

class User extends Controller {

    function __construct() {
        parent::__construct();
        Session::init();
        $logged = Session::get('loggedIn');
        $role = Session::get('role');
        
        if ($logged == FALSE || $role != 'owner') {
            Session::destroy();
            header('location: '.URL.'login');
            exit;
        }

        
    }

    function index() {
        
        $this->view->userList = $this->model->userList();
        $this->view->render('user/index');
    }
    
    public function create()
    {
        $data = array();
        $data['login'] = $_POST['login'];
        $data['password'] = Hash::create('md5', $data['password'], HASH_PASSWORD_KEY);
        $data['role'] = $_POST['role'];
        
        //@TODO Do your error checking
        
        $this->model->create($data);
        header('location: ' . URL . 'user');
        
    }
    
    public function edit($id)
    {
        $this->view->user = $this->model->userSingleList($id);
        $this->view->render('user/edit');
    }
    
    public function editSave($id)
    {
        $data = array();
        $data['id'] = $id;
        $data['login'] = $_POST['login'];
        $data['password'] = md5($_POST['password']);
        $data['role'] = $_POST['role'];
        
        $this->model->editSave($data);
        header('location: ' . URL . 'user');
    }
    
    public function delete($id)
    {
        $this->model->delete($id);
        header('location: ' . URL . 'user');
    }
    
    
    

       
}

?>
