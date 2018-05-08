<?php
include "../../../php/connection.php";
$query = mysqli_query($link,"SELECT id_pegawai, nama, password FROM pegawai ORDER BY id_pegawai ASC");
?>
<form action="" method="post">
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Id Pegawai</th>
            <th>Nama</th>
            <th>Password</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
            <?php
                $no = 1;
                while($data = mysqli_fetch_array($query)){
                ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $data["id_pegawai"]; ?></td>
                    <td><?php echo $data["nama"];?></td>
                    <td><?php echo $data["password"];?></td>

                </tr>
            <?php $no++; } ?>
        <?php } ?>
    </table>
</form>
