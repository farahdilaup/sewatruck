<h2>Edit Data kota</h2>
 
<?php 
    include 'koneksi.php';
    $id_kota  = $_GET['id_kota'];
    $sql = "SELECT *FROM kota WHERE id_kota='$id_kota'";
    $que = mysqli_query($sambungan, $sql);
 
    while ($data=mysqli_fetch_array($que)) 
    {
        $id_kota   = $data['id_kota'];
        $kota = $data['kota'];
        $harga_jarak = $data['harga_jarak'];
    }
?>
 
<form action="updatekota.php" method="post" enctype="multipart/form-data">
    
    <p>
        id kota : <br>
        <input type="text" name="id_kota" required="" value="<?php echo "$id_kota"; ?>">
    </p>
    <p>
        kota : <br>
        <input type="text" name="kota" required="" value="<?php echo "$kota"; ?>">
    </p>
    <p>
        harga jarak : <br>
        <input type="text" name="harga_jarak" required="" value="<?php echo "$harga_jarak"; ?>">
    </p>
 

 
    <p>
        <input type="submit" value="SIMPAN">
    </p>
</form>