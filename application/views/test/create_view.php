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
      <h1>Test Create</h1>
      <form method="post">
        <div class="col-xs-12 col-sm-6">
          <div class="form-group">
            <label for="full_name" class="control-label">Full Name</label>
            <input type="text" name="full_name" id="full_name" autofocus required minlength="4" class="form-control">
          </div>
        </div>
        <div class="col-xs-12 col-sm-6">
          <div class="form-group">
            <label for="phone" class="control-label">Phone</label>
            <input type="text" name="phone" id="phone" required minlength="7" class="form-control">
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="col-xs-12 col-sm-6">
          <button class="btn btn-primary">Save!</button>
        </div>
      </form>
      <div class="clearfix"></div>
      <hr>
      <a href="<?php echo site_url('test/index') ?>">&laquo; Back</a>
    </div>
    <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
