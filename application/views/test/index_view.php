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
      <h1>Test Index</h1>
      <?php if (! is_null($this->input->get('create_success')) ): ?>
        <div class="alert alert-success">
          <p><strong>Success:</strong> Data created successfully.</p>
        </div>
      <?php endif ?>
      <?php if (! is_null($this->input->get('create_error')) ): ?>
        <div class="alert alert-danger">
          <p><strong>Error:</strong> An error has occurred while storing your data.</p>
        </div>
      <?php endif ?>

      <?php if (! is_null($this->input->get('edit_success')) ): ?>
        <div class="alert alert-success">
          <p><strong>Success:</strong> Data edited successfully.</p>
        </div>
      <?php endif ?>
      <?php if (! is_null($this->input->get('edit_error')) ): ?>
        <div class="alert alert-danger">
          <p><strong>Error:</strong> An error has occurred while editting your data.</p>
        </div>
      <?php endif ?>

      <?php if (! is_null($this->input->get('delete_success')) ): ?>
        <div class="alert alert-success">
          <p><strong>Success:</strong> Data deleted successfully.</p>
        </div>
      <?php endif ?>
      <?php if (! is_null($this->input->get('delete_error')) ): ?>
        <div class="alert alert-danger">
          <p><strong>Error:</strong> An error has occurred while deleting your data.</p>
        </div>
      <?php endif ?>

      <table class="table table-stripped table-condensed table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>
              <a href="<?php echo site_url('test/create/') ?>" class="btn btn-xs btn-info">
                  <i class="glyphicon glyphicon-plus"></i> Create 
                </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <?php if ($query->num_rows() == 0): ?>
            <tr>
              <td colspan="4">No results</td>
            </tr>
          <?php endif ?>
          <?php foreach ($query->result() as $row): ?>
            <tr>
              <td><?php echo $row->id ?></td>
              <td><?php echo $row->full_name ?></td>
              <td><?php echo $row->phone ?></td>
              <td>
                <a href="<?php echo site_url('test/view/' . $row->id) ?>" class="btn btn-xs btn-default">
                  <i class="glyphicon glyphicon-eye-open"></i> Read
                </a> | 
                <a href="<?php echo site_url('test/edit/' . $row->id) ?>" class="btn btn-xs btn-warning">
                  <i class="glyphicon glyphicon-pencil"></i> Update
                </a> | 
                <a href="<?php echo site_url('test/delete/' . $row->id) ?>" class="btn btn-xs btn-danger">
                  <i class="glyphicon glyphicon-remove"></i> Delete
                </a>
              </td>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>
    </div>

    <script src="<?php echo base_url('bower_components/jquery/dist/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url('bower_components/bootstrap/dist/js/bootstrap.min.js') ?>"></script>
  </body>
</html>
