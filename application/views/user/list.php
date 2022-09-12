                        <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Daftar User</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i><a href ='<?php echo base_url();?>user_agent/add_user/'>Tambah User</a></button>
                                        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                            <select class="js-select2" name="type">
                                                <option selected="selected">Export</option>
                                                <option value="">Option 1</option>
                                                <option value="">Option 2</option>
                                            </select>
                                            <div class="dropDownSelect2"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2" id="mytable">
                                        <thead>
                                            <tr>
                                                <th>
                                                    no
                                                </th>
                                                <th>id</th>
                                                <th>nama</th>
                                                <th>email</th>
                                                <th>tanggal pendaftaran</th>
                                                <th>Peran</th>
                                                <th>Level</th>
                                                <th>sisa kuota</th>
                                                <th>aksi</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                         <!-- javascript untuk tabel data -->
                                        <script src="<?php echo base_url();?>template/js/datatables/1.10.1/js/jquery.dataTables.js"></script>         <!-- Jquery yang di tambahkan secara manual-->
                                        <!--<script src="<?php echo base_url();?>template/js/datatables/1.10.1/js/dataTables.bootstrap.min.js"></script>--> <!---Jquery yang di tambahkan secara manual-->
                                        <script>
                                                $(document).ready(function(){
                                                    var t = $('#mytable').DataTable({
                                                        "ajax"      : '<?php echo base_url('user_agent/data'); ?>',
                                                        "order"     : [[1,'asc']],
                                                        "columns"   : [
                                                            {
                                                                "data":null,
                                                                "widht":"50px",
                                                                "sClass":"text-center",
                                                                "orderable":false,
                                                            },
                                                            {
                                                                "data":"id",
                                                                "widht":"120px",
                                                                "sClass":"text-center"
                                                            },
                                                            {"data":"nama"},
                                                            {"data":"email"},
                                                            {"data":"tgl_daftar"},
                                                            {"data":"level_user"},
                                                            {"data":"level_jual"},
                                                            {"data":"kuota"},
                                                            {"data":"aksi"},
                                                            ]
                                                    });

                                                    t.on('order.dt search.dt',function(){
                                                        t.column(0,{search:'applied',order:'applied'}).nodes().each(function(cell,i){
                                                            cell.innerHTML = i+1;
                                                        });
                                                    }).draw();
                                                });
                                        </script>
                                        </tbody>
   
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
                            </div>
                        </div>

