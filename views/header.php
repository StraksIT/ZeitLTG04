<html>
    <head>
        <title>Test</title>
        <link rel="stylesheet" href="<?php echo URL; ?>public/css/default.css"/>
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <!-- <script type="text/javascript" src="<?php echo URL; ?>public/js/custom.js"></script> -->
        <?php
            if (isset($this->js))
            {
                foreach ($this->js as $js) {
                    echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
                }
            }
        ?>
                

    </head>
    <body>
        <?php Session::init(); ?>
        
        <div id="header">
            <?php if (Session::get('loggedIn') == FALSE):?>            
                <a href="<?php echo URL; ?>index">Index</a>
                <a href="<?php echo URL; ?>help">Help</a>
            <?php endif; ?>
                
            <?php if (Session::get('loggedIn') == TRUE):?>
                <a href="<?php echo URL; ?>dashboard">Dashboard</a>
                <?php if (Session::get('role') == 'owner'):?>
                    <a href="<?php echo URL; ?>user">Users</a>
                <?php endif; ?>
                <a href="<?php echo URL; ?>dashboard/logout">Logout</a>
            <?php else: ?>
                <a href="<?php echo URL; ?>login">Login</a>
            <?php endif; ?>
        </div>

        <div id="content">

