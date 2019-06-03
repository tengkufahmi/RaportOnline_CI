<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>

<div class="container-fluid">

	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="Home">Home</a>
		</li>
		<li class="breadcrumb-item active">Data Santri</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>

			Data Santri
		</div>
		<div class="container mt-3">
			PILIH KELAS : <select class="custom-select mb-2 w-25" name="kelas" onchange="showUser(this.value)">
				<option>-- Kelas --</option>

				<option value=""></option>
				
			</select>
			<a href="input_datasiswa">
				<button name="tambah" type="button" class="btn btn-primary col-md-2 col-xs-12 float-right mr-5">+ Tambah Data</button></a>
			</div>              
			<div class="card-body">
				<div class="table-responsive" id="txtHint">

				</div>
			</div>
			<div class="card-footer small text-muted">
			</div>
		</div>

		<p class="small text-center text-muted my-5">
			<em></em>
		</p>

	</div>

	<?php $this->load->view("partial/foot.php") ?>
	</html>