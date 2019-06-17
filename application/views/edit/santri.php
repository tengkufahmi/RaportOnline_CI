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
  <?php foreach($santri as $row):?>
    <form method="POST" action="input_user2" enctype="multipart/form-data" class="col-md-12">
      <div class="row">
        <div class="col-md-4">                

          <div class="form-group">
            <label for="">No Induk</label>
            <input value="<?php echo $row->NO_INDUK ?>"  type="text" class="form-control" name="no_induk">
          </div>

          <div class="form-group">
            <label for="">Alamat</label>
            <input value="<?php echo $row->ALAMAT ?>"  type="text" class="form-control" name="alamat">
          </div>

          <div class="form-group">
            <label for="">Guru BK</label>
            <input value="<?php echo $row->ID_GURU ?>"  type="text" class="form-control" name="guru">
          </div>

          <div class="form-group">
            <label for="">Nama Wali</label>
            <input value="<?php echo $row->ID_ORTU ?>"  type="text" class="form-control" name="wali">
          </div>  

          <div class="form-group">
            <label for="">Nama</label>
            <input value="<?php echo $row->NAMA_SISWA ?>"  type="text" class="form-control" name="nama">
          </div>

          <div class="form-group">
            <label for="">Tempat Lahir</label>
            <input value="<?php echo $row->TEMPAT_LAHIR ?>"  type="text" class="form-control" name="tempat">
          </div>      

        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="Tanggal Lahir">Tanggal Lahir</label>
            <input value=""  type="date" class="form-control" name="tanggal">
          </div>   

          <div class="form-group">
            <label for="Jenis Kelamin">Jenis Kelamin</label>
            <select class="form-control" name="jenkel">
             <option value="Laki-laki">Laki-laki</option>
             <option value="Perempuan">Perempuan</option>
           </select>
         </div>

         <div class="form-group">
          <label for="Golongan Darah">Golongan Darah</label>
          <select name="goldar" class="form-control">
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
          </select>
        </div>

        <div class="form-group">
          <label for="Status">Status</label>
          <select class="form-control" name="status">
            <option value="Aktif">Aktif</option>
            <option value="Lulus">Lulus</option>
            <option value="Berhenti">Berhenti</option>
            <option></option>
          </select>
        </div>

        <div class="form-group">
          <label for="Angkatan">Angkatan</label>
          <select class="form-control" name="angkatan">
            <option value="2015/2016">2015/2016</option>
            <option value="2016/2017">2016/2017</option>
            <option value="2017/2018">2017/2018</option>
            <option value="2018/2019">2018/2019</option>
          </select>
        </div>  

        <div class="form-group">
          <label for="">No Hp</label>
          <input value=""  type="text" class="form-control" name="hp">
        </div> 

        <div class="form-group">
          <label for="">Email</label>
          <input value=""  type="text" class="form-control" name="email">
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


<?php $this->load->view("partial/foot.php") ?>
</html>