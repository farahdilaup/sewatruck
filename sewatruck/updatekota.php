<?php 
 
    include 'koneksi.php';
    $id_kota     = $_POST['id_kota'];
    $kota   = $_POST['kota'];
    $harga_jarak = $_POST['harga_jarak'];

    //perintah sql untuk menyimpan ke database
    $sql = "UPDATE kota SET id_kota='$id_kota', kota='$kota', harga_jarak='$harga_jarak' WHERE id_kota='$id_kota'";
     
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data telah diubah');
                window.location='kota.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal diubah');
                window.location='kota.php?id_kota=$id_kota';
            </script>
        ";
    }
    //penyimpanan
?>