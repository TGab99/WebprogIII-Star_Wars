<!DOVTYPE html>
<html lang="en-Us">
    <head>
        <meta charset="UTF-8">
        <title>Star Wars</title>
        <?php $this->load->helper('url');?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('style/index.css');?>">
    </head>
    <body>
        <?php $this->load->helper('url');?>
        <p><a href="<?=base_url('register')?>">Register</a>
            <a href="<?=base_url('login')?>">Login</a></p>
    </body>
</html>