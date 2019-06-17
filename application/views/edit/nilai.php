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
            <form method="POST" action="input_user2" enctype="multipart/form-data" class="col-md-12">
              <div class="row">
                <div class="col-md-4">                
                  
                  <div class="form-group">
                    <label for="Password Siswa">Nama Guru</label>
                    <input value=""  type="text" class="form-control" name="ayah">
                  </div>
                 
                  <div class="form-group">
                    <label for="Password Orang Tua">Nama Santri</label>
                    <input value=""  type="text" class="form-control" name="wali">
                  </div>  

                  <div class="form-group">
                    <label for="Password Orang Tua">Mapel</label>
                    <input value=""  type="text" class="form-control" name="wali">
                  </div>                           
                 
                </div>
                <div class="col-md-4">
                   <div class="form-group">
                    <label for="Password Orang Tua">Nilai</label>
                    <input value=""  type="text" class="form-control" name="ibu">
                  </div>
                   <div class="form-group">
                    <label for="Password Orang Tua">Semester</label>
                    <input value=""  type="text" class="form-control" name="hp">
                  </div> 

                  <div class="form-group">
                    <label for="Password Orang Tua">Tahun Ajaran</label>
                    <input value=""  type="text" class="form-control" name="hp">
                  </div> 
                </div>
              </div>

              <div class="card-footer small text-mutedtext-center">
                <?php 
                if(isset($_GET['ubah'])){
                 echo "<button type='submit' name='ubah' class='btn btn-warning col-md-2 col-xs-12'>Ubah</button>";
               } 
               else {
                 echo "<button name='Simpan Perubahan' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Simpan Perubahan</button> ";
               }
               ?>
             </div>

           </form>
           <p class="small text-center text-muted my-5">
            <em></em>
          </p>

        </div>

<?php $this->load->view("partial/foot.php") ?>
</html>