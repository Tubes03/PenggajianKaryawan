<!DOCTYPE html>
<html>
<head>
	<title>Data Karyawan</title>
	<base href="<?php echo base_url() ?>">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- bootstrap 3.0.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
</head>
<body onload="print()">
	<center>
		<table>
			<tr>
				<td>
					<img src="gambar/logo2.png" style="width: 200px; height: 200px;">
				</td>
				<td>
					<center>
					<h3>PT. Blind Studio Indonesia</h3>
					<h5>Taman Kopo Indah II Jl. Rahayu No 255 A Margaasih Bandung 40215 No telp (021) 58906959, faks  (021) 58907350.</h5>
					</center>
				</td>
			</tr>
		</table>
		<h4>LAPORAN DATA KARYAWAN</h4>
	</center>
	<hr>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No.</th>
				<th>Nik</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Jenis Kelamin</th>
				<th>Agama</th>
				<th>Pendidikan</th>
				<th>Asal Sekolah</th>
				<th>Jabatan</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			foreach ($rw->result() as $row) {
			 ?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row->nik; ?></td>
				<td><?php echo $row->nama; ?></td>
				<td><?php echo $row->alamat; ?></td>
				<td><?php echo $row->jenis_kelamin; ?></td>
				<td><?php echo $row->agama; ?></td>
				<td><?php echo $row->pendidikan; ?></td>
				<td><?php echo $row->asal_sekolah; ?></td>
				<td><?php echo $row->pekerjaan; ?></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>

</body>
</html>