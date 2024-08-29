<?php 
 
    include 'koneksi.php';
    $id_kota   = $_POST['id_kota'];
    $kota = $_POST['kota'];
    $harga_jarak = $_POST['harga_jarak'];
 
     
    $sql = "INSERT INTO kota VALUES('$id_kota', '$kota', '$harga_jarak')";
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah disimpan');
                window.location='kota.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal disimpan');
                window.location='tambahkota.php';
            </script>
        ";
    }
    //penyimpanan
 
?>