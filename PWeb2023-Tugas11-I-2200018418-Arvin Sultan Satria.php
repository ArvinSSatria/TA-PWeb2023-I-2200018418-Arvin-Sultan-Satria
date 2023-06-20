<html>
    <head>
        <title>Pengelolaan Form cara #1 </title>
    </head>
    <body>
        <FORM ACTION="" METHOD="POST" NAME="input">
            Nama Anda : <input type="text" name="nama"><br>
            <input type="submit" name="Input" value="Tampilkan isi TextBox">
        </FORM>
</html>

<?php
    if (isset($_POST['Input'])) {
        $nama = $_POST['nama'];
        echo "Nama Anda : <b>$nama</b>";
    }
?>