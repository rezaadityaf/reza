<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

<div class="row">
  <div class="col-lg-6">
    <a href="#" class="btn btn-primary mb-3" data-toggle = "modal" data-target="#menumodal">Add new menu</a>
  <?php echo form_error('menu', '<small class="text-danger pl-3">','</small>'); ?>
    <!-- echo form_error('menu','<div class="alert alert-danger" role="alert"> Data kosong
      </div>'); -->
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Menu</th>
      <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>

    <?php
    $i= 1;
     foreach ($menu as $m): ?>
      <tr>
        <th scope="row"><?= $i++; ?></th>
        <td><?= $m['menu']; ?></td>
        <td>
          <a href="#" class="btn btn-warning">edit</a>
          <a href="#" class="btn btn-danger">hapus</a>

        </td>
          <tr>
    <?php endforeach; ?>



  </tbody>
</table>

  </div>

</div>
<!-- Modal -->
<div class="modal fade" id="menumodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url('menu'); ?>" method="post">
          <div class="form-group">

          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Add menu..." name = "menu">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
        </form>
    </div>
  </div>
</div>
</div>
</div>
<!-- /.container-fluid -->
