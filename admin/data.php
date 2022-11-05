<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>Nama</td>
                                            <td>NIM</td>
                                            <td>Jenis Kelamin</td>
                                            <td>Nomer HP</td>
                                            <td>Prodi</td>
                                            <td>Alamat</td>
                                        
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM mahasiswa ORDER BY id_mhs ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['nama_mhs']; ?></td>
                                        <td><?php echo $row['nim']; ?></td>
                                        <td><?php echo $row['jk_mhs']; ?></td>
                                        <td><?php echo $row['nohp_mhs']; ?></td>
                                        <td><?php echo $row['prodi']; ?></td>
                                        <td><?php echo $row['alamat_mhs']; ?></td>
                                     
    </tr>
    <?php
        }
    ?>
</table>