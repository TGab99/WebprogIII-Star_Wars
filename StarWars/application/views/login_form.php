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
        <h3>Login</h3>
        <label for="email">Email:</label>
	<input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" />
        
        <label for="password">Password:</label>
	<input type="password" id="password" name="password" />
        
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    
    <?php
    echo form_close(); 
    ?>
</body>
</html>