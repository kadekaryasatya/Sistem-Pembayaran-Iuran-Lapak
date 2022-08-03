<?php 
//include the database connectivity setting
include ("connect.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Loading Flat UI Pro -->
    <link href="css/flat-ui-pro.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon1.png">
  
</head>
<body>

<?php 
//include the navigation bar
include ("inc/navbar.php");?>

<div class="container">
	<br>
	<br>
  

  <div class="row">
    
    <div class="col-md-9" name="maincontent" id="maincontent">
		
		<div id="exercise" name="exercise" class="panel panel-info">
		<div class="panel-heading"><h5>Sistem Informasi Pedagang Tradisional</h5></div>
			<div class="panel-body">
			<!-- ***********Edit your content STARTS from here******** -->
			
						
				
			
		
				<form role="form" name="" action="" method="">
					<div class="form-group">
						Sistem Informasi Pedagang Tradisional merupakan tugas akhir dari mata kuliah pemrograman internet
						yang merupakan implementasi dari materi-materi yang telah diberikan selama perkuliahan semseter 3
						 
						
					</div>
				</form>
				
				<form role="form" name="" action="" method="">
					<div class="form-group">
						Dibuat Oleh : Dek Arya  
						<p>
						Dosen Pembimbing :  I PUTU ARYA DHARMAADI, S.T., M.T. 
						<p>
						Program Studi : Teknologi Informasi,
						Fakultas Teknik, 
						Universitas Udayana	
						
					</div>
				</form>
				<hr>
			
			<!-- ***********Edit your content ENDS here******** -->	
			</div> <!--body panel main -->
		</div><!--toc -->
		
    </div><!-- end main content -->
	
    <div class="col-md-3">
		<?php 
		//include the sidebar menu
		include ("inc/sidebar-menu.php");?>
    </div><!-- end main menu -->
  </div>
</div><!-- end container -->


<?php 
//include the footer
include ("inc/footer.php");?>

</body>
</html>
