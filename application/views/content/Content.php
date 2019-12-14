 <?php if($this->session->userdata('level')=='0') { ?>
<div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><?php echo $judul; ?></h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Halaman Depan</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Penjelasan Dataset</h5>
                            <div class="card-body p-0">
                                <p>Dataset merupakan</p>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Dataset Autism Screening</h5>
                                    <div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">No</th>
                                                        <th class="border-0">P 1</th>
                                                        <th class="border-0">P 2</th>
                                                        <th class="border-0">P 3</th>
                                                        <th class="border-0">P 4</th>
                                                        <th class="border-0">P 5</th>
                                                        <th class="border-0">P 6</th>
                                                        <th class="border-0">P 7</th>
                                                        <th class="border-0">P 8</th>
                                                        <th class="border-0">P 9</th>
                                                        <th class="border-0">P 10</th>
                                                        <th class="border-0">Penyakit Kuning</th>
                                                        <th class="border-0">Keluarga dengan Autis</th>
                                                        <th class="border-0">Hasil</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php 
                                                        $no = 1;
                                                        foreach($data as $u){ 
                                                    ?>
                                                    <tr>
                                                        <td><?php echo $no++ ?></td>
                                                        <td><?php echo $u->A1 ?></td>
                                                        <td><?php echo $u->A2 ?></td>
                                                        <td><?php echo $u->A3 ?></td>   
                                                        <td><?php echo $u->A4 ?></td>
                                                        <td><?php echo $u->A5 ?></td>
                                                        <td><?php echo $u->A6 ?></td>   
                                                        <td><?php echo $u->A7 ?></td>
                                                        <td><?php echo $u->A8 ?></td>
                                                        <td><?php echo $u->A9 ?></td>
                                                        <td><?php echo $u->A10 ?></td> 
                                                        <td><?php echo $u->Jaundice ?></td>
                                                        <td><?php echo $u->Family_mem_with_ASD ?></td> 
                                                        <td><?php echo $u->Class ?></td>               
                                                    </tr>
                                                <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                       
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>

<?php } elseif ($this->session->userdata('level')=='1') { ?>
    <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title"><?php echo $judul; ?></h2>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">Halaman Depan</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ============================================================== -->
                    <!-- end pageheader  -->
                    <!-- ============================================================== -->
                    <div class="ecommerce-widget">
                        <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                        <div class="card">
                            <h5 class="card-header">Penjelasan Dataset</h5>
                            <div class="card-body p-2">
                                <p>Dataset merupakan</p>
                            </div>
                        </div>
                        </div>
                        </div>
                        <div class="row">
                            <!-- ============================================================== -->
                      
                            <!-- ============================================================== -->

                                          <!-- recent orders  -->
                            <!-- ============================================================== -->
                            <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <h5 class="card-header">Pertanyaan Seputar Autis</h5>
                                    <div class="card-body p-0">
                                        <form action="<?=site_url('user/pertanyaan2')?>" method="post"> 
                                            <label class="col-lg-12 control-label">1. Apakah anda akan menoleh jika dipanggil nama anda?  :  </label>
                                            <div class="col-lg-12">
                                             <button class="btn btn-primary" type="submit" value="1" name="submit">Jarang</button>

                                             <button class="btn btn-primary" type="submit" value="0" name="submit">Sering</button>

                                             <button class="btn btn-primary" type="submit" value="0" name="submit">Kadang-kadang</button>

                                             <button class="btn btn-primary" type="submit" value="0" name="submit">Selalu</button>
                                               <br>
                                               <br>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2018 Concept. All rights reserved. Dashboard by <a href="https://colorlib.com/wp/">Colorlib</a>.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
<?php } ?>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->