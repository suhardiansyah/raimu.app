
<div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <i class="fa fa-user"></i>
                                        <strong class="card-title pl-2">Nama Tester</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img height="400" width="400" class="rounded-circle mx-auto d-block" src="<?php echo base_url();?>/template/images/icon/avatar-01.jpg" alt="Card image cap">
                                            <h2 class="text-sm-center mt-2 mb-1"><?php echo $wajahmu['nama']; ?></h2>
                                            <div class="location text-sm-center">
                                                <i class="fa fa-map-marker"></i> <?=$wajahmu['alamat'];?></div>
                                        </div>
                                        <div class="row m-t-25">
                            
                            
                            
                            <div class="col-sm-6 col-lg-3" style="display:block; margin-left:auto; margin-right:auto; width:50%; ">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-chart"></i>
                                            </div>
                                            <div class="text" style="text-align:center;">
                                                <h2><?=$wajahmu['total'];?></h2>
                                                <span><?=$wajahmu['hasil'];?></span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

<div class="card-body" style="text-align:center;">
                                        <?php echo form_open('tester/tt/','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>                                                                               
                                        <button type="ti" name ="tt" class="btn btn-lg btn-primary">
                                            <i class="fa fa-star"></i><h3>1</h3> The Thinker</button>
                                        </form>

                                        <?php echo form_open('tester/tkm','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>
                                        <button type="tkm" name = "tkm" class="btn btn-lg btn-secondary">
                                            <i class="fa fa-lightbulb-o"></i><h3>2</h3> The King Maker</button>
                                        </form>

                                        <?php echo form_open('tester/td','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>
                                        <button type="td" name = "td" class="btn btn-lg btn-success">
                                            <i class="fa fa-magic"></i><h3>3</h3>The Diligent</button>
                                        </form>

                                        <?php echo form_open('tester/tg','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>
                                        <button type="tg" name ="tg" class="btn btn-lg btn-warning">
                                            <i class="fa fa-map-marker"></i><h3>4</h3>The Generous</button>
                                        </form>

                                        <?php echo form_open('tester/tl','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>
                                        <button type="tl" name="tl" class="btn btn-lg btn-danger">
                                            <i class="fa fa-rss"></i><h3>5</h3>The Leader</button>
    									</form>
    <br><br>
                                        <?php echo form_open('tester/tc','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>
                                        <button type="tc" name ="tc" class="btn btn-lg btn-primary">
                                            <i class="fa fa-star"></i><h3>6</h3> The Conceptor</button>
                                        </form>

                                        <?php echo form_open('tester/ti','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>
                                        <button type="ti" name="ti" class="btn btn-lg btn-secondary">
                                            <i class="fa fa-lightbulb-o"></i><h3>7</h3>The Inspirator</button>
                                        </form>

                                        <?php echo form_open('tester/tm','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>
                                        <button type="tm" name = "tm" class="btn btn-lg btn-success">
                                            <i class="fa fa-magic"></i><h3>8</h3>The Manager</button>
                                        </form>

                                        <?php echo form_open('tester/te','enctype="multipart/form-data" class="form-horizontal"');?>
                                        <?php echo form_hidden('kode',$wajahmu['kode']);?>
                                        <button type="te" name ="te" class="btn btn-lg btn-warning">
                                            <i class="fa fa-map-marker"></i><h3>9</h3>The Equalizer</button>
                                        </form>
    <br><br>
                                   
                                        <?php echo anchor('tester','TOLAK',array('class'=>'btn btn-outline-danger btn-lg btn-block'))?>

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
                                                    <label for="text-input" class=" form-control-label">ID Tester</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="text" id="disabled-input" name="text-input" placeholder="<?=$wajahmu['kode'];?>" disabled="" class="form-control">
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Nama Lengkap Tester</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="text"  name="text-input" value="<?=$wajahmu['nama'];?>" disabled class="form-control">
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Tanggal Lahir</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="date" value="<?php echo $wajahmu['tgl_lahir'];?>" class="form-control" >
                                                    </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="email-input" class=" form-control-label">Golongan Darah</label>
                                                </div>
                                                <div class="col col-md-4">
                                                    <input type="text" placeholder="<?=$wajahmu['goldar'];?>"  class="form-control" disabled="">
                                                </div>
                                            </div>
                                            
                                            
                                            
                                            
                                           
                                        </form>
                                    </div>
                       
                                        <hr>
                                    </div>
                                </div>
                            </div>