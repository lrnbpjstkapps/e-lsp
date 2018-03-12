<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
	<?php echo $title; ?>
  </h1>
  <ol class="breadcrumb">
	<?php 
		for($i=0; $i<count($navbar); $i++){
			if($navbarLink[$i]=="Home"){
				echo '<li class="active"><a href="Home"><i class="fa fa-dashboard"></i>'.$navbar[$i].'</a></li>';
			}else if($navbarLink[$i]=="-"){
				echo '<li>'.$navbar[$i].'</li>';
			}else{
				echo '<li class="active"><a href="'.$navbarLink[$i].'">'.$navbar[$i].'</a></li>';
			}
		}	
	?>	
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
	<div class="col-md-12">