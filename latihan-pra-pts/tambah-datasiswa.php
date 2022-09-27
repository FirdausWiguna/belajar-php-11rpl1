<h1>Tambah Data</h1>
<form action="input-datadiri-tambah.php" method="POST">
    <label for="nis"> Nomor Induk Siswa :</label>
    <input type="number" name="nis" placeholder="Ex. 12103102"/><br>

    <label for="nama">Nama Lengkap</label>
    <input type="text" name="nama" placeholder="Ex. Firdaus"/><br>

    <label for="kelas">Kelas</label>
    <input type="text" name="kelas"/><br>

    <label for="kehadiran">Kehadiran :</label>
    <input type="number" name="kehadiran" placeholder="Ex. 80"/><br>

    <label for="tugas">Tugas :</label>
    <input type="number" name="tugas" placeholder="Ex. 80"/><br>

    <label for="UTS">UTS :</label>
    <input type="number" name="UTS" placeholder="Ex. 80"/><br>

    <label for="UAS">UAS :</label>
    <input type="number" name="UAS" placeholder="Ex. 80"/><br>

    <input type="submit" name="simpan" value="Simpan Data"/>
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

        // CREATE - Menambahkan Data ke Database 
        $query = "
                INSERT INTO siswa_nilai VALUES
                ('$nis', '$nama', '$kelas', '$kehadiran', '$tugas', '$UTS','$UAS');
                ";

                include ('./input-config.php');
                $insert = mysqli_query($mysqli, $query);

                if ($insert){
                    echo "
                            <script>
                                    alert('Data berhasil ditambahkan');
                                    window.location='input-datasiswa.php';
                            </script>
                    ";
                }
    }

