<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="admin">Home</a>
    </li>
    <li class="breadcrumb-item active">Tables</li>
  </ol>
<?php foreach($user as $row):?>
    <form method="POST" action="<?php echo site_url('Edit/User/update') ?>" enctype="multipart/form-data" class="col-md-12">
      <div class="row">
        <div class="col-md-4">                
          <input type="hidden" name="id" value="<?php echo $row->ID_USER ?>">
          <div class="form-group">
            <label for="Username">Username : </label>
            <b>
              <?php echo $row->USERNAME ?>
            </b>

          </div>
          <div class="form-group">
            <label for="Password Orang Tua">Password</label>
            <input value="<?php echo $row->PASSWORD ?>"  type="text" class="form-control" name="password">
          </div>
        </div>
      </div>
<?php endforeach;?>
      <div class="card-footer small text-mutedtext-center">
        <button name='simpan perubahan' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan Perubahan</button>
      </div>

    </form>

    <p class="small text-center text-muted m    y-5">
      <em></em>
    </p>

  </div>
  <!-- /.container-fluid -->

  <?php $this->load->view("partial/foot.php") ?>
  </html>