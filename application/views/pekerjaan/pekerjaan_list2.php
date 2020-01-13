<div class="row">
    <div class="col-md-12">
    <?php echo $this->session->userdata('message') <> '' ? '<div class="callout callout-info"><h4>'.$this->session->userdata('message').'</h4></div>' : ''; ?>        
    </div>
</div>

<div class="row" style="margin-bottom:10px">
    <div class="col-md-12">
        <a href="<?= site_url('pekerjaan/create')?>" class="btn btn-info" style="color:white">Create</a>
    </div>
</div>

<div class="box" style="padding:10px">
    <!-- /.box-header -->
    <div class="box-body">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
            <tr role="row">
            <th>No</th>
            <th>Jabatan</th>
            <th>Gaji Pokok</th>
            <th>Tunjangan Keluarga</th>
            <th>Tunjangan Kesehatan</th>
            <th>Tunjangan Transfortasi</th>
            <th>Tunjangan Pendidikan</th>
            <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            if ($pekerjaan_data->num_rows() > 0) {
            foreach ($pekerjaan_data->result() as $pekerjaan)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $pekerjaan->pekerjaan ?></td>
            <td><?php echo $pekerjaan->gapok ?></td>
            <td><?php echo $pekerjaan->tukel ?></td>
            <td><?php echo $pekerjaan->tukes ?></td>
            <td><?php echo $pekerjaan->tutra ?></td>
            <td><?php echo $pekerjaan->tupen ?></td>
            <td style="text-align:center" width="200px">
            
                <a href="<?php echo site_url('pekerjaan/update/'.$pekerjaan->id_pekerjaan) ?>">
                <button type="button" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></button></a>
                
                <a href="<?php echo site_url('pekerjaan/delete/'.$pekerjaan->id_pekerjaan) ?>" onclick="return confirm('Are You Sure ?')">
                <button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button></a>
                <?php
                // echo anchor(site_url('pekerjaan/update/'.$pekerjaan->id_pekerjaan),'Update'); 
                // echo ' | '; 
                // echo anchor(site_url('pekerjaan/delete/'.$pekerjaan->id_pekerjaan),'Delete','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
                ?>
            </td>
        </tr>
                <?php
            }
            } else {
                ?>
                <tr>
                    <th colspan="8"><center>DATA TIDAK DI TEMUKAN</center></th>
                </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
        <tr>
        <th>No</th>
        <th>Jabatan</th>
        <th>Gaji Pokok</th>
        <th>Tunjangan Keluarga</th>
        <th>Tunjangan Kesehatan</th>
        <th>Tunjangan Transfortasi</th>
        <th>Tunjangan Pendidikan</th>
        <th>Action</th>
        </tr>
        </tfoot>
        </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>