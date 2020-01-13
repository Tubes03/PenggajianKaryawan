<div class="row">
    <div class="col-md-12">
    <?php echo $this->session->userdata('message') <> '' ? '<div class="callout callout-info"><h4>'.$this->session->userdata('message').'</h4></div>' : ''; ?>        
    </div>
</div>

<div class="row" style="margin-bottom:10px">
    <div class="col-md-12">
        <a href="<?= site_url('karyawan/create') ?>" class="btn btn-info" style="color:white">Create</a>
    </div>
</div>

<div class="box" style="padding:10px">
    <!-- /.box-header -->
    <div class="box-body">
        <div class="table-responsive">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap table-responsive">
        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
            <tr role="row">
                <th>No</th>
                <th>Nik</th>
                <th>Username</th>
                <th>Password</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Pendidikan</th>
                <th>Asal Sekolah</th>
                <th>Jabatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php

        if ($karyawan_data->num_rows() > 0) {

        foreach ($karyawan_data->result() as $karyawan)
        {
            ?>
            <tr>
        <td width="80px"><?php echo ++$start ?></td>
        <td><?php echo $karyawan->nik ?></td>
        <td><?php echo $karyawan->username ?></td>
        <td><?php echo $karyawan->password ?></td>
        <td><?php echo $karyawan->nama ?></td>
        <td><?php echo $karyawan->alamat ?></td>
        <td><?php echo $karyawan->jenis_kelamin ?></td>
        <td><?php echo $karyawan->agama ?></td>
        <td><?php echo $karyawan->pendidikan ?></td>
        <td><?php echo $karyawan->asal_sekolah ?></td>
        <td><?php echo $karyawan->pekerjaan ?></td>
        <td style="text-align:center" >
            <a href="<?= site_url('karyawan/update/'.$karyawan->id_karyawan) ?> " class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
            <a href="<?= site_url('karyawan/update/'.$karyawan->id_karyawan) ?>" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
        </td>
        </tr>
            <?php
        }
        } else {
            ?>
            <tr>
                <th colspan="12"><center>DATA TIDAK DI TEMUKAN</center></th>
            </tr>
            <?php
        }
        ?>
        </tbody>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Nik</th>
            <th>Username</th>
            <th>Password</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Pendidikan</th>
            <th>Asal Sekolah</th>
            <th>Jabatan</th>
            <th>Action</th>
        </tr>
        </tfoot>
        </table>
        </div>
        </div>
    </div>
    <!-- /.box-body -->
</div>