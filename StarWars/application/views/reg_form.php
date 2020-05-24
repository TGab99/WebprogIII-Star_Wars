<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Star Wars</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/register_login.css');?>">
</head>
<body>
    <?php
    echo form_open();
    echo validation_errors();
    ?>
    
    <div>
        <h3>Register</h3>
        <label for="email">Firstname:</label>
        <input type="text" id="firstname" name="first_name" value="" />
    
        <label for="email">Lastname:</label>
        <input type="text" id="lastname" name="last_name" value="" />
    
        <label for="email">Username:</label>
        <input type="text" id="username" name="username" value="" />
    
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="" />
    
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" />
    
        <button type="submit">Register</button>
    </div>
    <?php echo form_close(); ?>
</body>
</html>