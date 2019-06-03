<!DOCTYPE html>
<html>
<?php $this->load->view("partial/head.php") ?>

<div class="container-fluid">

	<!-- Breadcrumbs-->
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="Home">Home</a>
		</li>
		<li class="breadcrumb-item active">Halaman Admin</li>
	</ol>                    

	<!-- DataTables Example -->
	<div class="card mb-3">
		<div class="card-header">
			<i class="fas fa-home"></i>
		HALAMAN ADMIN</div>
		<div class="card-body">
			<a href="">
				<button name="tambah" type="button" class="btn btn-primary col-xs-3 float-right">Tambah Pengumuman</button></a>
				<div class="table-responsive mt-5">
					<?php foreach ($pengumuman as $info) :?>
					<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
						<thead>
							<tr>
								<th>Judul</th>
								<th>Isi</th>
								<th>Waktu</th>                        
								<th>Aksi</th>                  
							</tr>
						</thead>

						<tbody>

							<tr>
								<td><?php echo $info->judul ?></td>
								<td><?php echo $info->isi ?></td>
								<td><?php echo $info->time ?></td>
								<td>
									<a href="" class="btn btn-info" >Ubah</a>
									<a href="" class="btn btn-danger" >Hapus</a>
								</td>


							</tr>

						</tbody>
					</table>
				<?php endforeach;?>
				</div>
			</div>
			<div class="card-footer small text-muted">
			</div>
		</div>
	</div>

	<?php $this->load->view("partial/foot.php") ?>
	</html>