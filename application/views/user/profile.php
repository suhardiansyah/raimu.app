<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">Profile User</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img height="200" width = "200" class="rounded-circle mx-auto d-block" src="<?php echo base_url()."/upload/img/foto_user/".$this->session->userdata('foto');?>" alt="Card image cap">
                                            <h5 class="text-sm-center mt-2 mb-1"><?php echo $this->session->userdata('nama');?></h5>
                                            <div class="location text-sm-center">
                                                <i class="fa fa-map-marker"></i> <?php echo $this->session->userdata('level_user');?></div>
                                        </div>
                                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2>10368</h2>
                                                <span>Kuota Terpakai</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="widgetChart1" height="116" width="253" class="chartjs-render-monitor" style="display: block; height: 130px; width: 282px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $this->session->userdata('kuota');?></h2>
                                                <span>Sisa Kuota</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="widgetChart2" height="102" width="253" class="chartjs-render-monitor" style="display: block; height: 114px; width: 282px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2>1,086</h2>
                                                <span>this week</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="widgetChart3" height="102" width="253" class="chartjs-render-monitor" style="display: block; height: 114px; width: 282px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2>$1,060,386</h2>
                                                <span>total earnings</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                                            <canvas id="widgetChart4" height="103" width="253" class="chartjs-render-monitor" style="display: block; height: 115px; width: 282px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                        <div class="card-body card-block">
                                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label class=" form-control-label">User ID</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <p class="form-control-static">USER ID</p>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="text" id="disabled-input" name="text-input" value = "<?php echo $this->session->userdata('nama');?>" placeholder="Nama Lengkap" disabled="" class="form-control">
                                                    <small class="form-text text-muted">Di Isikan Nama Lengkap Anda Sesuai Kartu Identitas</small>
                                                </div>
                                            </div>
    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="date" id="disabled-input" name="text-input" value = "<?php echo $this->session->userdata('tgl_lahir');?>" placeholder="Nama Lengkap" class="form-control" disabled="">
                                                    <small class="form-text text-muted">Di Isikan Tanggal Lahir Sesuai Kartu Identitas</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label" >Email</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="email" id="email-input" value = "<?php echo $this->session->userdata('email');?>" name="email-input" placeholder="Email Pengguna" class="form-control" disabled="">
                                                    <small class="help-block form-text">Please enter your email</small>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label" >Level</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="text" value = "<?php echo $this->session->userdata('level_jual');?>" class="form-control" disabled="">
                                                
                                                </div>
                                            </div>
                   
                                            
    <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Sisa Kuota</label>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <input type="text" id="text-input" value = "<?php echo $this->session->userdata('kuota');?>" name="text-input" placeholder="Kuota" class="form-control" disabled="">
                                                    <small class="form-text text-muted">Jumlah Sisa Kuota</small>
                                                </div>
                                            </div>        
                                        </form>
                                    </div>
                       
                                        <hr>
                                    </div>
                                </div>
                            </div>