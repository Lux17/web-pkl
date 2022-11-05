<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>Nama</td>
                                            <td>NIDN</td>
                                            <td>Jenis Kelamin</td>
                                            <td>Nomer HP</td>
                                            <td>Alamat</td>
                                        
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM pembimbing ORDER BY id_pem ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['nama_pem']; ?></td>
                                        <td><?php echo $row['nidn']; ?></td>
                                        <td><?php echo $row['jk_pem']; ?></td>
                                        <td><?php echo $row['nohp_pem']; ?></td>
                                        <td><?php echo $row['alamat_pem']; ?></td>
                                     
    </tr>
    <?php
        }
    ?>
</table>