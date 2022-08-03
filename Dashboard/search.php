   
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
    if (isset($_POST['search'])) {
        require_once 'connect.php';

        $search = $_POST['search'];

        $query = mysqli_query($conn, "select *from lapak where nama_lapak like '%$search%' ");
        while ($rekod = mysqli_fetch_array($query)) {
?>
					<tr>
						<td>
							<?php
							$id=$rekod['id_lapak'];
							$nama_lapak=$rekod['nama_lapak'];
							echo $id;
							$urlupdate="update-form.php?nama_lapak=$nama_lapak";
							?>
						</td>
						<td><?php echo $rekod['nama_lapak']?></td>
						<td><?php echo $rekod['nama_pemilik']?></td>
						<td><?php echo $rekod['posisi_lapak']?></td>
						<td><a href="<?php echo $urlupdate?>" class="btn btn-danger btn-block" title="Pembayaran Iuran" 
						data-toggle="tooltip"> Bayar Iuran
						
						
					</tr>
<?php }
} ?>