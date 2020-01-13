<div class="box" style="padding:10px">
	<h3>Data Karyawan <?php echo $rw->nama; ?></h3>
	<table class="table">
		<tr>
			<th>Nama Lengkap</th>
			<th>:</th>
			<th><?php echo $rw->nama; ?></th>
		</tr>
		<tr>
			<th>Username</th>
			<th>:</th>
			<th><?php echo $rw->username; ?></th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>
				<a href="app/profiladmin/<?php echo $this->session->userdata('id_user'); ?>">
					<button class="btn btn-warning"><i class="fa fa-user"></i>&nbsp; Ubah Profil</button>
				</a>
				<a href="app/ubahpass/<?php echo $this->session->userdata('id_user'); ?>">
					<button class="btn btn-primary"><i class="fa fa-pencil"></i> Ubah Password</button>
				</a>
			</td>
		</tr>
	</table>
</div>