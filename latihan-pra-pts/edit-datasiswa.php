<?php
    if  ( isset($_GET["nis"])){
        $nis = $_GET["nis"];
        $check_nis = "SELECT * FROM siswa_nilai WHERE nis = '$nis';";
        include ('./input-config.php');
        $query = mysqli_query($mysqli, $check_nis);
        $row = mysqli_fetch_array($query);
    }
?>

<h1>Edit Data</h1>
<form action="edit-datasiswa.php" method="POST">
    <label for="nis"> Nomor Induk Siswa :</label>
    <input value="<?php echo $row["nis"]; ?>" readonly type="number" name="nis" placeholder="Ex. 12103102"/><br>

    <label for="nama">Nama Lengkap</label>
    <input value="<?php echo $row["namalengkap"]; ?>" type="text" name="nama" placeholder="Ex. Firdaus"/><br>

    <label for="kelas">Kelas</label>
    <input value="<?php echo $row["kelas"]; ?>" type="text" name="kelas"/><br>

    <label for="kehadiran">Kehadiran :</label>
    <input value="<?php echo $row["kehadiran"]; ?>"  type="number" name="kehadiran" placeholder="Ex. 80"/><br>

    <label for="tugas">Tugas :</label>
    <input value="<?php echo $row["tugas"]; ?>"  type="number" name="tugas" placeholder="Ex. 80"/><br>

    <label for="UTS">UTS :</label>
    <input value="<?php echo $row["UTS"]; ?>"  type="number" name="UTS" placeholder="Ex. 80"/><br>

    <label for="UAS">UAS :</label>
    <input value="<?php echo $row["UAS"]; ?>"  type="number" name="UAS" placeholder="Ex. 80"/><br>

    <input type="submit" name="simpan" value="Edit Data"/>
    <a href="input-datasiswa.php">Kembali</a>
</form>

<?php
    if( isset($_POST["simpan"])){
        $nis = $_POST["nis"];
        $nama = $_POST["nama"];
        $kelas = $_POST["kelas"];
        $kehadiran = $_POST["kehadiran"];
        $tugas = $_POST["tugas"];
        $UTS = $_POST["UTS"];
        $UAS = $_POST["UAS"];

        // EDIT - Memperbaharui Data 
        $query = "
                UPDATE datadiri SET namalengkap = '$nama',
                kelas = '$kelas',
                kehadiran = '$kehadiran',
                tugas = '$tugas',
                UTS = '$UTS',
                UAS = '$UAS'
                WHERE nis '$nis'; 
                ";

    include ('./input-config.php');
    $insert = mysqli_query($mysqli, $query);

        if($update){
        echo "
            <script>
            alert('Data berhasil diperbarui');
            window.location='input-datasiswa.php';
            </script>
        ";
        }else{
        echo "
            <script>
            alert('Data gagal');
            window.location='edit-datasiswa.php?nis=$nis';
            </script>
        ";
        }
    }
?>

