<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tina-cruds</title>
    <link href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <h1>Test Read</h1>
      <dl class="dl-horizontal">
        <dt>ID:</dt>
        <dd><?php echo $row->id ?></dd>
        <dt>Full Name:</dt>
        <dd><?php echo $row->full_name ?></dd>
        <dt>Phone:</dt>
        <dd><?php echo $row->phone ?></dd>
      </dl>
      <div class="clearfix"></div>
      <hr>
      <a href="<?php echo site_url('test/index') ?>">&laquo; Back</a>
    </div>
    <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
