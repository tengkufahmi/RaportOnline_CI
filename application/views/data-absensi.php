<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>

<div class="container-fluid">

	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="Home">Home</a>
		</li>
		<li class="breadcrumb-item active">Absensi</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
		Data Absensi</div>

		<div class="container mt-3">
			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						Pilih Tanggal : <input type="date" class="form-control" name="ajax" id="ajax">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						Pilih Kelas : <select class="form-control" name="kelas" id="kelas">                      
							<option>--Kelas--</option>
							
							<option value=""></option>
							
						</select>
					</div>
				</div>
				<div class="col-md-3">
					<input type = "button" onclick = "ajaxFunction()" class="btn btn-secondary mt-4" value ="Filter"/>
				</div>
				<div class="col-md-3">
					<a href="input_absen_banyak">
						<button name="tambah" type="button" class="btn btn-primary float-right mr-3 mt-4">+ Tambah Data</button></a>
					</div>
				</div>                  
			</div>
			
			<div class="card-body">
				<div class="table-responsive" id="txtHint">
					
				</div>
			</div>

			<div class="card-footer small text-muted">
			</div>

			<p class="small text-center text-muted my-5">
				<em></em>
			</p>

		</div>

		<?php $this->load->view("partial/foot.php") ?>
		</html>