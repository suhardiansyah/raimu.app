<div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Daftar Peserta Test</h2>
                                   
                                </div>
                            </div>
                        </div>
                        <br>
<div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="table-responsive table--no-card m-b-30">
                                    <table class="table table-borderless table-striped table-earning" id="tabeltester">
                                        <thead>
                                            <tr>
                                                <th>no</th>
                                              
                                                <th> Tanggal Test</th>
                                           
                                                <th class="text-center">Nama Tester</th>
                                                <th class="text-right">Tanggal Lahir</th>
                                           
                                                <th class="text-right">jenis kepribadian</th>
                                                <th class="text-right">konfirmasi</th>
                                                <th class="text-right">periksa</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                             <!-- javascript untuk tabel data -->

                                         <!-- <script src="<?php echo base_url();?>template/js/datatables/1.10.1/js/jquery.dataTables.js"></script>         Jquery yang di tambahkan secara manual -->
                                        <!-- <script src="<?php echo base_url();?>template/js/datatables/1.10.1/js/dataTables.bootstrap.js"></script> Jquery yang di tambahkan secara manual -->
                                        <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.1/js/jquery.dataTables.js"></script> <!--Jquery yang di tambahkan secara manual -->
                                        <script src="http://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.js"></script>       
                                       
                                        <script>
                                        
                                                $(document).ready(function(){
                                                    var t = $('#tabeltester').DataTable({
                                                       
                                                        "ajax"      : '<?php echo base_url('tester/data_tester'); ?>',
                                                        "order"     : [[0,'asc']],
                                                        "columns"   : [
                                                            {
                                                                "data":null,
                                                                "widht":"50px",
                                                                "sClass":"text-center",
                                                                "orderable":false,
                                                            },
                                                           
                                                            {"data":"tgl_sekarang"},
                                                          
                                                            {"data":"nama"},
                                                            {"data":"tgl_lahir"},
                                                         
                                                            {"data":"keterangan_kepribadian"},
                                                            {"data":"keterangan_konfirmasi"},
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
                            </div>
                        </div>
                    </div>