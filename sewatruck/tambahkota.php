<h2>Tambah Data Kota</h2>
                        <!--enctype="multipart/form-data", wajib ada kalo ada upload file-->
<form action="simpankota.php" method="post" enctype="multipart/form-data">
    <p>
        id kota : <br>
        <input type="text" name="id_kota" required="">
    </p>
 
    <p>
       kota : <br>
        <input type="text" name="kota" required="">
    </p>
 
    <p>
        harga jarak : <br>
        <input type="text" name="harga_jarak" required="">
    </p>
 
    <p>
        <input type="submit" value="SIMPAN">
    </p>
</form>