<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>Kode Instansi</td>
                                            <td>Nama</td>
                                            <td>Nomer HP</td>
                                            <td>Alamat</td>
                                        
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM instansi ORDER BY id_inst ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['kodeinst']; ?></td>
                                        <td><?php echo $row['nama_inst']; ?></td>
                                        <td><?php echo $row['nohp_inst']; ?></td>
                                        <td><?php echo $row['alamat_inst']; ?></td>
                                     
    </tr>
    <?php
        }
    ?>
</table>