<div style="border:1px solid rgb(238,238,238); padding:10px; overflow:auto; width:80%; height:475px;">
<font color="orange" size="3">Hasil Tampil Data</font>
<table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tr bgcolor="#FF6600">
    <th width="5">No</td> 
    <th width="80" height="42">kd_guru</td> 
    <th width="160">nip</td> 
    <th width="70">nama_guru</td>       
    <th width="60">jenkel</td> 
    <th width="60">alamat</td>     
</tr>
<?php
    include "koneksi.php";
   $sql = 'SELECT kd_guru,nip,nama_guru,jenkel,alamat 
            FROM tb_guru';
    $Tampil = mysqli_query($sql);
    $nomer=0;
    while ( $hasil      = mysqli_fetch_array ($Tampil)) {
            $kd_guru    = stripslashes ($hasil['kd_guru']);
            $nip        = stripslashes ($hasil['nip']);
            $nama_guru  = stripslashes ($hasil['nama_guru']);
            $jenkel     = stripslashes ($hasil['jenkel']);
            $alamat     = stripslashes ($hasil['alamat']);
        {
    $nomer++;
?>
    <tr align="center" bgcolor="#DFE6EF">
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
    <tr align="center">
        <td height="32"><?=$nomer?></td>
        <td><?=$kd_guru?></td>
        <td><?=$nip?></td>
        <td><?=$nama_guru?></td>
        <td><?=$jenkel?></td>
        <td><?=$alamat?></td>
    </tr>
    <tr align="center" bgcolor="#DFE6EF">
        <td> </td>
        <td> </td>
        <td> </td> 
        <td> </td>
        <td> </td>
        <td> </td>
    </tr>
<?php  
        }
    }
    mysqli_close($Open);
?>
</table>
</div>