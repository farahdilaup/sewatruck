
<h2>Data kota</h2>
 
 <a href="tambahkota.php">Tambah Baru</a>
  
 <table border="1" width="600">
     <tr>
        <th> no </th>
         <th>id kota</th>
         <th>Nama kota</th>
         <th>Harga jarak</th>
         <th>aksi</th>
     </tr>
  
     <?php 
  
         include 'koneksi.php';
         $sql = "SELECT *FROM kota";
         $que = mysqli_query($sambungan, $sql);//eksekusi perintah $sql
         $no=1;
         while ($data=mysqli_fetch_array($que)) 
         {
             //deklarasi database
             //var      //wajib sama dengan yg di database
             $id_kota    = $data['id_kota'];
             $kota   = $data['kota'];
             $harga_jarak = $data['harga_jarak'];

  
             echo
             "
                 <tr>
                     <td align='center'>$no</td>
                     <td>$id_kota</td>
                     <td>$kota</td>
                     <td>$harga_jarak</td>
                     <td>
                         <a href='editkota.php?id_kota=$id_kota'>Edit</a>
                         <a href='hapuskota.php?id_kota=$id_kota'>Hapus</a>
                     </td>
                 </tr>
             ";
             $no++;
         }
  
     ?>
 </table>