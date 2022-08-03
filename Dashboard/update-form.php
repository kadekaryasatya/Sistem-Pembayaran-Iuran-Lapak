<?php 
//include the database connectivity setting
include ("connect.php");
 include 'lib.php'; 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Form Pembayaran</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Loading Flat UI Pro -->
    <link href="css/flat-ui-pro.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon1.png">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
  <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/jquery-3.4.1.min.js"></script>

  
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
		<div class="panel-heading"><h5>Pembayaran Iuran</h5></div>
			<div class="panel-body">
			<!-- ***********Edit your content STARTS from here******** -->
		
			<?php
				include "connect.php";	
				$id_lapak  = @$_GET['id_lapak'];
				$query ="select * from lapak where id_lapak='$id_lapak'";
				$hasil = mysqli_query($conn, $query);
                $rekod = mysqli_fetch_array($hasil);
				
	
			?>
			
			
				
				
				<form role="form" name="form" action="simpan.php" method="POST">
					<div class="form-group">
					
					  <!-- Id Lapak -->
					  <input class="form-control" type="hidden" value="<?php echo $rekod['id_lapak']?>" name="id_lapak" readonly>
					
					  Nama Lapak 
					  <b><input class="form-control" name="nama_lapak" 
					  type="text"  value="<?php echo $rekod['nama_lapak']?>" disabled></b> 
					
					  
					  Pilih Jenis Iuran
					  <select class="form-control"  name="id_kategori_iuran"  id="id_kategori_iuran" >
						<option  value="" ><--- Silahkan Pilih ---></option>
						<?php 
							include 'connect.php';
						
							$query1 ="Select * from kategori_iuran ";
							$sql = mysqli_query($conn,$query1);
							while($data = mysqli_fetch_array($sql)){
						?>
								<option name="id" value="<?php echo $data['id_kategori_iuran']?>"><?php echo $data['nama_kategori_iuran']?></option>
						<?php 	 
							}
						?>
					  </select>
					  
		
					  <div id="nilai_iuran">
					  
					  </div>
					  
					  
					  Tanggal Iuran <input class="form-control" name="tanggal_iuran" id="tanggal_iuran"
					  type="date" required  >	
					  
					  Periode Iuran <input class="form-control" type="number" id="periode_iuran" name="periode_iuran" onkeyup="total_bayar()" 
					 placeholder="Satuan Hari" required min="0" max="400">
					  
					  <?php
						session_start();
						$query1 ="select * from admin ";	
						$hasil1 = mysqli_query($conn, $query1);
						$data = mysqli_fetch_array($hasil1);
                      ?> 
					   <input  type="hidden" class="form-control" type="text" value="<?php echo $data['id_admin']?>" name="id_admin" readonly>
					  
						<b> 
					  Total Bayar<input class="form-control" name="nilai" id="nilai" type="text" readonly style="font-weight: bold">
					  </b> 
					  <p>
					  <p>
					  
					  
					  
					  <input class="btn btn-embosed btn-primary" name="submit" type="submit" value="Bayar" >
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
	
	 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	 
     <script type="text/javascript">						
	   $(document).ready(function() {
	   $("#id_kategori_iuran").change(function(){
            // variabel dari nilai combo box kategori_iuran
          var id_kategori_iuran = $("#id_kategori_iuran").val();
	   
			$.ajax({
                type: "POST",
                dataType: "html",
                url: "auto_proses.php",
                data: "id_kategori_iuran="+id_kategori_iuran,
                success: function(data){
                   $("#nilai_iuran").html(data);
                }
            });
        });
	});
	  
	  
	function total_bayar(){
		var data = document.getElementById("hargaiuran").value;
		var data1 = document.getElementById("periode_iuran").value;
		document.getElementById("nilai").value=data*data1;
								
		}
					  
 </script>


</body>
</html>
