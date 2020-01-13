<div class="row">
    <div class="col-md-12">
    <?php echo $this->session->userdata('message') <> '' ? '<div class="callout callout-info"><h4>'.$this->session->userdata('message').'</h4></div>' : ''; ?>        
    </div>
</div>

<div class="row" style="margin-bottom:10px">
    <div class="col-md-12">
        <a href="<?= site_url('gaji/create')?>" class="btn btn-info" style="color:white">Create</a>
    </div>
</div>

<div class="box" style="padding:10px">
    <!-- /.box-header -->
    <div class="-boboxdy">
        <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
        <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
        <thead>
            <tr role="row">
            <th>No</th>
                <th>Tanggal</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($gaji_data as $gaji)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $gaji->tgl ?></td>
            <td><?php echo $gaji->nik ?></td>
            <td><?php echo $gaji->nama ?></td>
            <td style="text-align:center;" width="200px">

            <!-- <div class="btn-group-vertical"> -->
                <a href="<?php echo site_url('app/slip_gaji/'.$gaji->nik.'/'.$gaji->tgl) ?>" class="btn btn-success btn-xs"><i class="fa  fa-print"></i></a>
                <a href="<?php echo site_url('gaji/update/'.$gaji->id_gaji) ?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
                <a href="<?php echo site_url('gaji/delete/'.$gaji->id_gaji) ?>" onclick="return confirm('Are You Sure ?')" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></a>
            <!-- </div> -->
            </td>
        </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
        <tr>
        <th>No</th>
                <th>Tanggal</th>
                <th>Nik</th>
                <th>Nama</th>
                <th>Action</th>
        </tr>
        </tfoot>
        </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>