<div class="box">
    <div class="box-body" >
        <form action="<?php echo $action; ?>" method="post">
                <div class="form-group">
                    <label for="date">Tanggal <?php echo form_error('tgl') ?></label>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="date" class="form-control" name="tgl" id="tgl" placeholder="Tgl" value="<?php echo $tgl; ?>" />
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="varchar">Nik <?php echo form_error('nik') ?></label>
                    <div class="row">
                        <div class="col-md-12">
                            <select class="form-control" name="nik">
                                <option value="">--Pilih NIK--</option>
                                <?php 
                                $db = $this->db->get('karyawan');
                                foreach ($db->result() as $rw) {
                                    ?>
                                <option value="<?php echo $rw->nik; ?>"><?php echo $rw->nik; ?> - <?= $rw->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                </div>
                <input type="hidden" name="id_gaji" value="<?php echo $id_gaji; ?>" /> 
                <button type="submit" class="btn btn-info"><?php echo $button ?></button> 
                <a href="<?php echo site_url('gaji') ?>" class="btn btn-default">Cancel</a>
        </form>
    </div>
    
</div>