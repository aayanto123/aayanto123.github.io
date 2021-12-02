<?php
include 'koneksi.php';
$sql = 'SELECT kd_guru,nip,nama_guru,jenkel,alamat 
        FROM tb_guru';
        
$query = mysqli_query($konek, $sql);

if (!$query) {
    die ('SQL Error: ' . mysqli_error($konek));
}

echo "<table>
        <thead>
            <tr>
                <th>kd_guru</th>
                <th>nip</th>
                <th>nama_guru</th>
                <th>jenkel</th>
                <th>alamat</th>
            </tr>
        </thead>
        <body>";
        
while ($row = mysqli_fetch_array($query))
{
    echo '<tr>
            <td>'.$row['kd_guru'].'</td>
            <td>'.$row['nip'].'</td>
            <td>'.($row['nama_guru']).'</td>
            <td>'.$row['jenkel'].'</td>
            <td>'.$row['alamat'].'</td>
        </tr>';
}
echo '
    </body>
</table>';
mysqli_free_result($query);
mysqli_close($konek)
?>