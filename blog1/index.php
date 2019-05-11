<?php
require_once('../core/init.php');


$hasil = tampildata(1);
$hasil2 = tampildata(2);


require_once('../views/header.php');
?>

    <a href="tambah.php" class="nes-btn is-success">Tambah</a>
    <div class="nes-table-responsive">
    <table class="nes-table is-bordered is-centered" width="90%;">
        <thead>
        <tr>
            <th>Nomor</th>
            <th>Judul</th>
            <th>waktu</th>
            <th>Option</th>
        </tr>
        </thead>
        <tbody>
        
        <?php 
        $no = 1;
        if(mysqli_num_rows($hasil) > 0){
            while($row = mysqli_fetch_assoc($hasil)){ 
                // var_dump($hasil);
?>
        <tr>
            <td><?= $no; ?></td>
            
            <td><?= $row['judul'];?></td>
            <td><?= $row['waktu'];?></td>
            <td>
                <a href="edit.php" class="nes-btn is-primary">Edit</a>
                <button type="button" class="nes-btn is-error">Hapus</button>
            </td>
        </tr>
        <?php
        $no++;}
        }
        // uji continou
        // die(mysql_num_rows($hasil) > 0);
        
        // hasil2
        // $no = $no;
        if(mysqli_num_rows($hasil2) > 0){
            while($row2 = mysqli_fetch_assoc($hasil2)){ 
                // var_dump($hasil);
        ?>
        <tr>
            <td><?= $no; ?></td>
            
            <td><?= $row2['judul'];?></td>
            <td><?= $row2['waktu'];?></td>
            <td>
                <a href="edit.php" class="nes-btn is-primary">Edit</a>
                <button type="button" class="nes-btn is-error">Hapus</button>
            </td>
        </tr>
        <?php
        $no++;}
        }?>
        </tbody>
    </table>
    </div>

</div>
<?php
require_once('../views/footer.php');
?>


