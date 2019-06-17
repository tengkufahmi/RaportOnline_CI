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
  <?php foreach($mapel as $row):?>
    <form method="POST" action="<?php echo site_url('Edit/Mapel/update') ?>" enctype="multipart/form-data" class="col-md-12">
      <div class="row">
        <div class="col-md-4">                
          <input type="hidden" name="id" value="<?php echo $row->KD_MAPEL ?>">
          <div class="form-group">
            <label for="">Kode Mapel</label>
            <input value="<?php echo $row->KD_MAPEL ?>"  type="text" class="form-control" name="kode">
          </div>

          <div class="form-group">
            <label for="">Nama Mapel</label>
            <input value="<?php echo $row->MAPEL ?>"  type="text" class="form-control" name="mapel">
          </div>                   
        </div>
      </div>
    </div>
  <?php endforeach;?>

  <div class="card-footer small text-mutedtext-center">
    <a href="Edit/Mapel">
      <button name='Simpan Perubahan' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan Perubahan</button> 
    </div>

  </form>
  <p class="small text-center text-muted my-5">
    <em></em>
  </p>

</div>

<?php $this->load->view("partial/foot.php") ?>
</html>