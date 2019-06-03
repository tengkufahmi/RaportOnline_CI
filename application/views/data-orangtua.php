<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>

<div class="container-fluid">

	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="Home">Home</a>
		</li>
		<li class="breadcrumb-item active">Data Orang Tua</li>
	</ol>

	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-table"></i>
		Data Orang Tua</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
					<thead>
						<tr>

							<th>No Induk</th>
							<th>Nama Santri</th>
							<th>Nama Ayah</th>
							<th>Nama Ibu</th>
							<th>Nama Wali</th>
							<th>No Hp</th>
							<th>Aksi</th>
						</tr>
					</thead>

					<tbody>

						<tr>

							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td>
								<a href="" class="btn btn-info" >Ubah</a>
								<a href="" class="btn btn-danger" >Hapus</a>
							</td>
						</tr>
						       
				</tbody>
			</table>
		</div>
	</div>
	<div class="card-footer small text-muted"></div>
</div>

<p class="small text-center text-muted my-5">
	<em></em>
</p>

</div>

<?php $this->load->view("partial/foot.php") ?>
</html>