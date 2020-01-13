<div class="row">
    <div class="col-md-12">
    <?php echo $this->session->userdata('message') <> '' ? '<div class="callout callout-info"><h4>'.$this->session->userdata('message').'</h4></div>' : ''; ?>        
    </div>
</div>

<div class="row" style="margin-bottom:10px">
    <div class="col-md-12">
        <a href="<?= site_url('user/create')?>" class="btn btn-info" style="color:white">Create</a>
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
                <th>Nama</th>
                <th>Username</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach ($user_data as $user)
            {
                ?>
                <tr>
            <td width="80px"><?php echo ++$start ?></td>
            <td><?php echo $user->nama ?></td>
            <td><?php echo $user->username ?></td>
            <td style="text-align:center" width="200px">
               
            </td>
        </tr>
                <?php
            }
            ?>
        </tbody>
        <tfoot>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        </tfoot>
        </table>
        </div>
    </div>
    <!-- /.box-body -->
</div>