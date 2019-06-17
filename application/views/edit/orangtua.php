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
  <?php foreach($orangtua as $row) : ?>
    <form method="POST" action="<?php echo site_url('Edit/Orangtua/update') ?>" enctype="multipart/form-data" class="col-md-12">
      <div class="row">
        <div class="col-md-4">                
          <input type="hidden" name="id" value="<?php echo $row->ID_ORTU ?>">
          <div class="form-group">
            <label for="Password Siswa">Nama Ayah</label>
            <input value="<?php echo $row->NAMA_AYAH ?>"  type="text" class="form-control" name="ayah">
          </div>

          <div class="form-group">
            <label for="Password Orang Tua">Nama Wali</label>
            <input value="<?php echo $row->NAMA_WALI ?>"  type="text" class="form-control" name="wali">
          </div>                   

        </div>
        <div class="col-md-4">
         <div class="form-group">
          <label for="Password Orang Tua">Nama Ibu</label>
          <input value="<?php echo $row->NAMA_IBU?>"  type="text" class="form-control" name="ibu">
        </div>
        <div class="form-group">
          <label for="Password Orang Tua">Nomor Handphone</label>
          <input value="<?php echo $row->NO_HP_ORTU ?>"  type="text" class="form-control" name="hp">
        </div> 
      </div>
    </div>
  <?php endforeach?>

  <div class="card-footer small text-mutedtext-center">
    <button name='Simpan Perubahan' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan Perubahan</button> 
  </div>

</form>
<p class="small text-center text-muted my-5">
  <em></em>
</p>

</div>

<?php $this->load->view("partial/foot.php") ?>
</html>