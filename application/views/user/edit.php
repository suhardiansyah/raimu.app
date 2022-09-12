<div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Tambah User</strong> Agen penjualan
                                    </div>
                                    <div class="card-body card-block">
                                        
                                         <?php echo form_open('user_agent/add_user','enctype="multipart/form-data" class="form-horizontal"');?> 
                                         <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <?php
                                                    $userid = 'userrr';?>
                                                    <input type="text" id="text-input" name="userid" value="<?= $userid?>" class="form-control" disab>
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="text" id="text-input" name="nama" value = "<?php echo $user['nama'];?>"placeholder="Nama Lengkap" class="form-control" value>
                                                    <small class="form-text text-muted">Di Isikan Nama Lengkap Anda Sesuai Kartu Identitas</small>
                                                </div>
                                            </div>
    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="date" id="text-input" name="tgl_lahir" value = "<?php echo $user['tgl_lahir'];?> placeholder="Nama Lengkap" class="form-control">
                                                    <small class="form-text text-muted">Di Isikan Tanggal Lahir Sesuai Kartu Identitas</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col col-md-3">
                                                    <input type="email" id="email-input" name="email" value = "<?php echo $user['email'];?> placeholder="Email Pengguna" class="form-control">
                                                    <small class="help-block form-text">Please enter your email</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col col-md-3">
                                                    <input type="password" id="password" name="password"  placeholder="Password" class="form-control">
                                                    <small class="help-block form-text">Please enter a complex password</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="password-input" class=" form-control-label">Re-Enter Password</label>
                                                </div>
                                                <div class="col col-md-3">
                                                    <input type="password" id="password-input" name="password-input" placeholder="Password" class="form-control">
                                                    <small class="help-block form-text">Please enter a complex password</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label" value = "<?php echo $user['level_user'];?>">Level Akses</label>
                                                </div>
                                                <div class="col col-md-3">
                                                <?php
                                                        echo form_dropdown('level_akses',array(null=>'Level Akses','1'=>'Super User','2'=>'Administrator','3'=>'Operator'),null,"class='form-control'");
                                                    ?>
                                                </div>
                                            </div> 
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="select" class=" form-control-label">Level Penjualan</label>
                                                </div>
                                                <div class="col col-md-3">
                                                    <?php
                                                        echo form_dropdown('level_penjualan',array(null=>'Level Penjualan','1'=>'Cabang','2'=>'Distributor','3'=>'Agen'),null,"class='form-control'");
                                                    ?>
                                                </div>
                                            </div> 
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="file-input" class=" form-control-label">Upload Foto Profil</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="file" id="file-input" name="foto" class="form-control-file">
                                                </div>
                                            </div>
    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Kuota</label>
                                                </div>
                                                <div class="col col-md-3">
                                                    <input type="text" id="text-input" name="kuota" placeholder="Kuota" value = "<?php echo $user['kuota'];?>" class="form-control">
                                                    <small class="form-text text-muted">Jumlah Kuota</small>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <button type="submit" name="submit"class="btn btn-primary btn-sm">
                                                    <i class="fa fa-dot-circle-o"></i> Simpan
                                                </button>
                                                </button>
                                                <?php echo anchor('user_agent/list_user','Kembali',array('class'=>'btn btn-warning btn-sm'))?>
                                            </div>
                                        </form>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>