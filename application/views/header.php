<!DOCTYPE html>
<!--[if IE 6]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if (gt IE 6)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->
<head>
    <title><?php echo $title;?></title>
    <meta charset="utf-8"/>
    <meta name="description" content="Easy HTML5 Template">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('css/css.php');?>">
    <script src="<?php echo $base_url('scripts/modernizr-2.0.6.min.js');?>"></script>
    
</head>
<body>
    <header>
        <a href="<?php echo site_url();?>"><img src="<?php echo base_url('images/logo.png');?>" alt="Basic Gallery"/></a>
        $this->load->view('menu');        
    </header>