<form action="" method="POST">
    <h1> Hitung Volume dan Luas Balok </h1>
    <h2> By Firdaus Wiguna</h2>
    <p>Panjang :</p>
    <input type="number" name="Panjang" placeholder="Ex. 5" /><br>
    <br>
    <p>Lebar :</p>
    <input type="number" name="Lebar" placeholder="Ex. 5" /><br>
    <br>
    <p>Tinggi :</p>
    <input type="number" name="Tinggi" placeholder="Ex. 5" /><br>
    <br>
    <input type="submit" name="proses" value="Hitung Volume & Luas" />
</form>

<?php 
    if (isset($_POST["proses"])){
        echo "<hr>"; 
        $panjang = $_POST["Panjang"];
        $lebar = $_POST["Lebar"];
        $tinggi = $_POST["Tinggi"];
        $volume = 2 * $panjang * $lebar + 2 * $panjang * $tinggi + 2 * $lebar * $tinggi;
        $luas =  $panjang * $lebar * $tinggi;

        echo "Panjang : $panjang <br>";
        echo "Lebar : $lebar <br>";
        echo "Tinggi : $tinggi <br>";
        echo "Volume : $volume <br>";
        echo "Luas : $luas <br>";
    }
?>