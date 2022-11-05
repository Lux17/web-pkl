<table border="1">
    <tr bgcolor="#e5e5e5">
    <th>No</th>
                                            <td>Nama</td>
                                            <td>NIM</td>
                                            <td>No HP Mahasiswa</td>
                                            <td>Prodi</td>
                                            <td>Nama Pembimbing</td>
                                            <td>No HP Pembimbing</td>
                                            <td>Nama Instansi</td>
                                            <td>Alamat Instansi</td>
                                            <td>Nomer Telp Instansi</td>
    </tr>
    <?php
        include "../koneksi.php";
        $no=0;
        $query    =mysqli_query($kon, "SELECT * FROM pendaftaran ORDER BY id_daftar ASC");
        while($row =mysqli_fetch_array($query)){
        $no++
    ?>
    <tr>
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $row['nama_mhs']; ?></td>
                                        <td><?php echo $row['nim']; ?></td>
                                        <td><?php echo $row['nohp_mhs']; ?></td>
                                        <td><?php echo $row['prodi']; ?></td>
                                        <td><?php echo $row['nama_pem']; ?></td>
                                        <td><?php echo $row['nohp_pem']; ?></td>
                                        <td><?php echo $row['nama_inst']; ?></td>
                                        <td><?php echo $row['alamat_inst']; ?></td>
                                        <td><?php echo $row['nohp_inst']; ?></td>
                                      
                                     
    </tr>
    <?php
        }
    ?>
</table>