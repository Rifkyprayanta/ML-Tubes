<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendor/bootstrap/css/bootstrap.min.css')?>">
    <link href="<?php echo base_url('assets/vendor/fonts/circular-std/style.css'); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/libs/css/style.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendor/fonts/fontawesome/css/fontawesome-all.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendor/charts/chartist-bundle/chartist.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendor/charts/morris-bundle/morris.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendor/charts/c3charts/c3.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/template/vendor/fonts/flag-icon-css/flag-icon.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/bootstrap.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" />
    <title>Halaman Autism Screening</title>
</head>

<body>
    <!-- Script untuk memanggil navbar atas -->
      <?php $this->load->view('navbar/navbar'); ?>

      <!-- Script untuk memanggil sidebar samping -->
      <?php $this->load->view('sidebar/sidebar'); ?>

      <!-- Script untuk memanggil Content -->
      <?php $this->load->view('content/content'); ?>

    

        
    <!-- Optional JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/datatables/jquery.dataTables.min'); ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/datatables/dataTables.bootstrap4.min'); ?>"></script>
    <!-- jquery 3.3.1 -->
    <script src="<?php echo base_url('assets/template/vendor/jquery/jquery-3.3.1.min.js')?>"></script>
    <!-- bootstap bundle js -->
    <script src="<?php echo base_url('assets/template/vendor/bootstrap/js/bootstrap.bundle.js');?>"></script>
    <!-- slimscroll js -->
    <script src="<?php echo base_url('assets/template/vendor/slimscroll/jquery.slimscroll.js');?>"></script>
    <!-- main js -->
    <script src="<?php echo base_url('assets/template/libs/js/main-js.js');?>"></script>
    <!-- chart chartist js -->
    <script src="<?php echo base_url('assets/template/vendor/charts/chartist-bundle/chartist.min.js');?>"></script>
    <!-- sparkline js -->
    <script src="<?php echo base_url('assets/template/vendor/charts/sparkline/jquery.sparkline.js');?>"></script>
    <!-- morris js -->
    <script src="<?php echo base_url('assets/template/vendor/charts/morris-bundle/raphael.min.js');?>"></script>
    <script src="<?php echo base_url('assets/template/vendor/charts/morris-bundle/morris.js');?>"></script>
    <!-- chart c3 js -->
    <script src="<?php echo base_url('assets/template/vendor/charts/c3charts/c3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/template/vendor/charts/c3charts/d3-5.4.0.min.js');?>"></script>
    <script src="<?php echo base_url('assets/template/vendor/charts/c3charts/C3chartjs.js');?>"></script>
    <script src="<?php echo base_url('assets/template/libs/js/dashboard-ecommerce.js');?>"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable(
                {
                    "pageLength": '10', 
                });
                } );
    </script>
</body>
 
</html>