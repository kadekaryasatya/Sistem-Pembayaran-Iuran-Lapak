<?php
include "connect.php";
if (isset($_POST['id_kategori_iuran'])) {
    $id_kategori_iuran= $_POST["id_kategori_iuran"];

    $sql = "select * from kategori_iuran where id_kategori_iuran=$id_kategori_iuran";
    $hasil = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($hasil)) {
        ?>
        <input class="form-control" name="hargaiuran" id="hargaiuran"  type="hidden"  value="<?php echo $data['nilai']?>"  readonly>
        <?php
    }
}
    ?>