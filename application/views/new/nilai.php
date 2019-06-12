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
            <form method="POST" action="tambahdata_nilai.php" enctype="multipart/form-data" class="col-md-12">
              <div class="container mt-3"> 
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">         
                      Pilih Kelas : <select class="form-control" name="kelas" id="kelas" onchange="showUser(this.value)">
                        <option>--Kelas--</option>
                        <option value=""></option>            
                      </select> 
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                     <select class="form-control mt-4" name="guru" id="guru">                      
                      <option>--Guru--</option>
                      <option value=""></option>             
                    </select>
                  </div>
                  <div class="form-group">
                    <select class="form-control" name="mapel" id="mapel">                      
                      <option>--Mata Pelajaran--</option>
                      <option value=""></option>             
                    </select>                      
                  </div>                                       
                </div>
                <div class="col-md-3">
                  <div class="form-group mt-4">                                            
                    <select name="tahun" class="form-control">
                     <option value="">--Tahun Ajaran--</option>
                     <option value="2017/2018">2017/2018</option>
                     <option value="2018/2019">2018/2019</option>
                     <option value="2019/2020">2019/2020</option>
                     <option value="2020/2021">2020/2021</option>
                   </select>
                 </div>
                 <div class="form-group">
                  <select class="form-control" name="semester" > 
                    <option value="">--Pilih Semester--</option>                     
                    <option value="ganjil">GANJIL</option>
                    <option value="genap">GENAP</option>            
                  </select>
                </div>
              </div>
            </div>        
          </div>
          <div class="card-body">
            <div class="table-responsive" id="txtHint">
              <?php include_once 'data_input_nilai.php'; ?>                
            </div>
          </div>            


          <div class="card-footer small text-mutedtext-center">
            <button name='tambah' type='submit' class='btn btn-primary col-md-2 col-xs-12'>Tambah</button> 
         </div>

       </form>
       <p class="small text-center text-muted my-5">
        <em></em>
      </p>

    </div>
    <!-- /.container-fluid -->

<?php $this->load->view("partial/foot.php") ?>
</html>