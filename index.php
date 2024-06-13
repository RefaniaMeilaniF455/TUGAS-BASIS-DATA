<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" type="text/css" href="style.css">
   <title>Tugas_Basis_Data_8</title>
</head>
<body>
   <div class="container">
      <center><h1>Toko Buku Pintar</h1></center>
      <div class="main">
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql = 'SELECT * FROM pelanggan';
         $result = mysqli_query($conn, $sql);
         ?>
         <h3>Tabel Pelanggan</h3>
         <table>
          <tr>
            <th>Id_pelanggan</th>
            <th>nama</th>
            <th>alamat</th>
            <th>tanggal_lahir</th>
            <th>no_telp</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['Id_pelanggan'];?></td>
               <td><?= $row['nama'];?></td>
               <td><?= $row['alamat'];?></td>
               <td><?= $row['tanggal_lahir'];?></td>
               <td><?= $row['no_telp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql2 = 'SELECT * FROM buku';
         $result = mysqli_query($conn, $sql2);
         ?>
      </table>
         <h3>Tabel buku</h3>
         <table>
          <tr>
            <th>id_buku</th>
            <th>judul</th>
            <th>pengarang</th>
            <th>penerbit</th>
            <th>harga</th>
            <th>stok</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_buku'];?></td>
               <td><?= $row['judul'];?></td>
               <td><?= $row['pengarang'];?></td>
               <td><?= $row['penerbit'];?></td>
               <td><?= $row['harga'];?></td>
               <td><?= $row['stok'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql3 = 'SELECT * FROM pegawai';
         $result = mysqli_query($conn, $sql3);
         ?>
         <h3>Tabel pegawai</h3>
         <table>
          <tr>
            <th>id_pegawai</th>
            <th>nama</th>
            <th>jabatan</th>
            <th>no_telp</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pegawai'];?></td>
               <td><?= $row['nama'];?></td>
               <td><?= $row['jabatan'];?></td>
               <td><?= $row['no_telp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
         </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM transaksi';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>Tabel transaksi</h3>
         <table>
          <tr>
            <th>id_transaksi</th>
            <th>id_pelanggan</th>
            <th>id_pegawai</th>
            <th>tanggal_transaksi</th>
            <th>total_biaya</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_transaksi'];?></td>
               <td><?= $row['id_pelanggan'];?></td>
               <td><?= $row['id_pegawai'];?></td>
               <td><?= $row['tanggal_transaksi'];?></td>
               <td><?= $row['total_biaya'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM detail_transaksi';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>Tabel detail_transaksi</h3>
         <table>
          <tr>
            <th>id_transaksi</th>
            <th>id_buku</th>
            <th>jumlah</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_transaksi'];?></td>
               <td><?= $row['id_buku'];?></td>
               <td><?= $row['jumlah'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
            </table>
         <?php
         include("koneksi.php");
         // query untuk menampilkan data
         $sql4 = 'SELECT * FROM pemasok';
         $result = mysqli_query($conn, $sql4);
         ?>
         <h3>Tabel pemasok</h3>
         <table>
          <tr>
            <th>id_pemasok</th>
            <th>Nama_pemasok</th>
            <th>alamat</th>
            <th>No_telp</th>
         </tr>
            <?php if($result): ?>
            <?php while($row = mysqli_fetch_array($result)): ?>
            <tr>
               <td><?= $row['id_pemasok'];?></td>
               <td><?= $row['Nama_pemasok'];?></td>
               <td><?= $row['alamat'];?></td>
               <td><?= $row['No_telp'];?></td>
            </tr>             
            <?php endwhile; else: ?>
            <tr>
            <td colspan="7">Belum ada data</td>
            </tr>
            <?php endif; ?>
      </div>
   </div>
</body>
</html>