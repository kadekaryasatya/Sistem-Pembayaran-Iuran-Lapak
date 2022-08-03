<?php 
//include the database connectivity setting
include ("connect.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Pencarian Lanjutan</title>
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
		<div class="panel-heading"><h5>Pencarian Lanjutan</h5></div>
			<div class="panel-body">
			<!-- ***********Edit your content STARTS from here******** -->
					
				<form role="form" name="" action="" method="GET">
					  Jenis Lapak 
					  <select class="form-control" name="id_kategori_lapak" id="id_kategori_lapak">
					  
					  <option  value="" ><--- Silahkan Pilih ---></option>
					  <?php
							include "connect.php";
           
							$sql="select * from kategori_lapak";

							$hasil=mysqli_query($conn,$sql);
							
							$no=0;
							while ($data = mysqli_fetch_array($hasil)) {
							$no++;
							$ket="";
							if (isset($_GET['id_kategori_lapak'])) {
								$id_kategori_lapak = trim($_GET['id_kategori_lapak']);

								if ($jurusan==$data['id_kategori_lapak'])
								{
									$ket="selected";
								}
							}
						?>
						<option <?php echo $ket; ?> value="<?php echo $data['id_kategori_lapak'];?>"><?php echo $data['nama_kategori'];?></option>
					  
					  <?php
								}
							  ?>
			
						
					  </select>
					  <p>
					  
					  </p>
					  <div class="form-group">
					  <input class="btn btn-embosed btn-primary" type="submit" value="Search">
					  <a href="advance-search.php" class="btn btn-embosed btn-primary" type="submit" >Reset</a>
					 
					  </div>
					  
					  
					</div>
				</form>
				
				<hr>
			<div>
				<table width="90%" class="table table-hover">
						<thead>
							<tr >
								<th>Id lapak.</th>
								<th>Nama Lapak</th>
								<th>Nama Pemilik</th>
								<th>Posisi Lapak</th>

							</tr>
						</thead>
				

				
				<?php
				if (isset($_GET['id_kategori_lapak'])) {
					$id_kategori_lapak = trim($_GET['id_kategori_lapak']);
					$query ="select * from lapak where id_kategori_lapak='$id_kategori_lapak'";
				}else {
					$query ="select * from lapak ";
					
				}
					$hasil = mysqli_query($conn, $query);
                    while ($rekod = mysqli_fetch_array($hasil)) {
					
				?>	

					<tr>
						<td><?php echo $rekod['id_lapak']?></td>
						<td><?php echo $rekod['nama_lapak']?></td>
						<td><?php echo $rekod['nama_pemilik']?></td>
						<td><?php echo $rekod['posisi_lapak']?></td>
						<td><a a href="update-form.php?id_lapak=<?php echo $rekod['id_lapak']; ?> <?php echo $rekod['nama_lapak']; ?>"
						class="btn btn-danger btn-block" data-toggle="tooltip"> Bayar Iuran
						
						
					</tr>
				<?php 
						}
				?>
					</table>
			</div>
				<?php
			
			//end db search
			?>
			
			<!-- ***********Edit your content ENDS here******** -->	
			</div> <!--body panel main -->
		
				
	</div>
    <div class="col-md-3">
		<?php 
		//include the sidebar menu
		include ("inc/sidebar-menu.php");?>
    </div><!-- end main menu -->
</div><!--toc -->
		
    </div>
<?php 
//include the footer
include ("inc/footer.php");?>

</body>
</html>
