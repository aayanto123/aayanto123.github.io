<?php
include 'koneksi.php';
$sql = 'SELECT kd_siswa,nis,nama_siswa,jenkel,agama,tempat_lahir,tanggal_lahir,alamat,no_telp,foto,tahun_angkatan,status
        FROM tb_siswa';
        
$query = mysqli_query($konek, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($konek));
}

echo "<table>
        <thead>
            <tr>
                <th>kd_siswa</th>
                <th>nis</th>
                <th>nama_siswa</th>
                <th>jenkel</th>
                <th>agama</th>
                <th>tempat_lahir</th>
                <th>tanggal_lahir</th>
                <th>alamat</th>
                <th>no_telp</th>
                <th>foto</th>
                <th>tahun_angkatan</th>
                <th>status</th>
            </tr>
        </thead>
        <body>";
        
while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['kd_siswa'].'</td>
            <td>'.$row['nis'].'</td>
            <td>'.($row['nama_siswa']).'</td>
            <td>'.$row['jenkel'].'</td>
            <td>'.$row['agama'].'</td>
            <td>'.$row['tempat_lahir'].'</td>
            <td>'.$row['tanggal_lahir'].'</td>
            <td>'.$row['alamat'].'</td>
            <td>'.$row['no_telp'].'</td>
            <td>'.$row['foto'].'</td>
            <td>'.$row['tahun_angkatan'].'</td>
            <td>'.$row['status'].'</td>
        </tr>';
}
echo '
    </body>
</table>';
mysqli_free_result($query);
mysqli_close($konek)
?>