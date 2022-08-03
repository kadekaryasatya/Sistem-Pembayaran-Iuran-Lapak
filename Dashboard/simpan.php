<?php
include 'connect.php';
		

if(isset($_POST['submit']))
{    
	$id_lapak=$_POST['id_lapak'];
	$tanggal_iuran=$_POST['tanggal_iuran'];
	$periode_iuran=$_POST['periode_iuran'];
	$id_kategori_iuran=$_POST['id_kategori_iuran'];
	$nilai=$_POST['nilai'];
	$id_admin=$_POST['id_admin'];
     $sql = "INSERT INTO pembayaran_iuran(id_lapak, tanggal_iuran , periode_iuran,id_kategori_iuran,nilai,id_admin) 
	 VALUES ($id_lapak,'$tanggal_iuran',$periode_iuran, $id_kategori_iuran,$nilai,$id_admin)";
     if (mysqli_query($conn, $sql)) {
       echo"<script>
					alert ('PEMBAYARAN BERHASIL'); document.location.href = 'carilapak.php'
				</script>";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>