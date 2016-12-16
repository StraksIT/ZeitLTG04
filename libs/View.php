<?php

class View {

    function __construct() {
        //echo 'This is the View<br>';
    }

    public function render($name, $noInclude = false) {
    if ($noInclude == true) {
        require VIEW_PATH. $name . '.php';
    } else {
        require VIEW_PATH.'header.php';
        require VIEW_PATH. $name . '.php';
        require VIEW_PATH.'footer.php';
    }
        
    }
    
}