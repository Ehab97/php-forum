<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=BASE_URL;?>Templates/images/tw.png">
    <link rel="stylesheet" href="<?=BASE_URL;?>Templates/css/style.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>Templates/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=BASE_URL;?>Templates/css/bootstrap.css">

    <title>
      space
    </title>
 <!-- php5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.2/php5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php 
    if(!isset($title)){
      $title=SITE_TITLE;
    }
    ;?>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">TalkingSpace</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="register.php">Create An Account</a></li>
            <li><a href="create.php">Create A topic </a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                 <div class="main">
                      <div class="block">
                        <h1 class="pull-left"><?=$title;?></h1>
                        <h4 class="pull-right">A semple topics</h4>
                        <div class="clearfix"></div>
                        <hr>
              <?=displymessage();?>