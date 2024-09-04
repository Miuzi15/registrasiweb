<?php?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Form Register</title>
    </head>
    <body>
        <form class="" action="proses.php" method="post">
            <label for="">Nama</label>
            <input type="text" name="nama" autocomplate="off"> <br>
            <label for="">Umur</label>
            <input type="text" name="umur" autocomplate="off"> <br>
            <label for="">Email</label>
            <input type="email" name="email" autocomplate="off"> <br>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="jeniskelamin" value="Pria">Pria
            <input type="radio" name="jeniskelamin" value="Wanita">Wanita
            <label for="">Agama</label>
            <select class="" name="agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select> <br>
            <label for="">Komentar</label> <br>  
            <textarea name="komentar" rows="8" cols="80"></textarea> <br>
            <button type="submit" name="submit" value = <?php echo date("h:i:sa"); ?> >Submit</button>    
        </form>
    </body>
</html>