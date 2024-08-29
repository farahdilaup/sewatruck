<?php 
    include 'koneksi.php';
    $id_kota  = $_GET['id_kota'];
    $sql = "DELETE FROM kota WHERE id_kota='$id_kota'";
    $que = mysqli_query($sambungan, $sql);  
    //peyimpanan
    if ($que) //jika berhasil
    {
        echo
        "
            <script type='text/javascript'>
                alert('Data berhasil dihapus');
                window.location='kota.php';
            </script>
        ";
    }
    else //jika gagal
    {
        echo
        "
            <script type='text/javascript'>
                alert('Gagal dihapus');
                window.location='kota.php';
            </script>
        ";
    }
 
?>