<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <title><?php echo $headerTitle; ?></title>
  <link rel="icon" type="image/png" href="assets/dist/img/logosdd2.png">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <!-- jQuery 3 -->
  <script src="bower_components/jquery/dist/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
  
 <!-- DataTables -->
  <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
  <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
  
      <!-- PACE -->
  <script src="bower_components/PACE/pace.min.js"></script>
    <!-- Pace style -->
  <link rel="stylesheet" href="plugins/pace/pace.min.css">
  <link rel="stylesheet" href="css/screen.css">
  <script src="lib/jquery.js"></script>
  <script src="dist/jquery.validate.js"></script>
  <script src="localization/messages_id.js"></script>
  
  <!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <link rel="application/javascript" href="assets/jquery/jquery-2.2.3.min.js">
  <link rel="application/javascript" href="bower_components/bootstrap/dist/js/bootstrap.js">  
  
  <link rel="stylesheet" href="dist/cheers-alert.min.css">
  <script src="dist/cheers-alert.min.js"></script>
    <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="bower_components/select2/dist/css/select2.min.css">
        <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- Select2 -->
  <script src="bower_components/select2/dist/js/select2.full.min.js"></script>

<style type="text/css">
	.main-sidebar { background-color: $your-color !important }
	
	/* Center the loader */
#divLoading
{
    display : none;
}
#divLoading.show
{
    display : block;
    position : fixed;
    z-index: 100;
    background-image : url('assets/dist/img/loader4.gif');
    background-color:'transparent';
    opacity : 1;
    background-repeat : no-repeat;
    background-position : center;
    left : 0;
    bottom : 0;
    right : 0;
    top : 0;
}
#loadinggif.show
{
    left : 50%;
    top : 50%;
    position : absolute;
    z-index : 101;
    width : 32px;
    height : 32px;
    margin-left : -16px;
    margin-top : -16px;
}
div.content {
   width : 1000px;
   height : 1000px;
}
.animate-bottom {
  position: relative;
  -webkit-animation-name: animatebottom;
  -webkit-animation-duration: 1s;
  animation-name: animatebottom;
  animation-duration: 1s
}

@-webkit-keyframes animatebottom {
  from { bottom:-100px; opacity:0 } 
  to { bottom:0px; opacity:1 }
}

@keyframes animatebottom { 
  from{ bottom:-100px; opacity:0 } 
  to{ bottom:0; opacity:1 }
}
.select2-container--default .select2-selection--single .select2-selection__placeholder {
  color: #444;
}

.select2-container--default .select2-selection--single .select2-selection__rendered {
    color: #fff;
}

#formTambah label.error {
	margin-left: 10px;
	width: auto;
	display: inline;
}
.left{
	float: left;
	margin-left: 50px;
}
  </style>