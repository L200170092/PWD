<html>
<head>
<title>tugas</title>
<body>
<H1>Nilai</H1>
<form method='POST' action='tugaaas.php'>
<p>Nilai A (0-100) : <input type='text' name='nilaiA' size='3'></p>
<p>Nilai B (0-100) : <input type='text' name='nilaiB' size='3'></p>
<p><input type='submit' value='Jumlahkan' name='submit'></p>
</form>
<?php
error_reporting (E_ALL ^ E_NOTICE);
$nilaiA = $_POST['nilaiA'];
$nilaiB = $_POST['nilaiB'];
$submit = $_POST['submit'];
$jumlah = $nilaiA + $nilaiB;
if($submit){
    if($nilaiA=='' and $nilaiB==''){
        echo"Nilai kosong</br>";
    }else{
        echo"Nilai A adalah $nilaiA</br>";
        echo"Nilai B adalah $nilaiB</br>";
        echo"Jadi Nilai A ditambah Nilai B adalah $jumlah";
    }
}
?>
</body>
</html>