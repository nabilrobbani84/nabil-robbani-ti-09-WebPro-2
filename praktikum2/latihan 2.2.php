<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Hello, world!</h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <form >
        Nama : <input type="text" name="nama" value="" size="30"><br/>
        Mata kuliah :
        <select name="matkul">
            <option value="DDP">Dasar-Dasar pemrograman </option>
            <option value="BDI">Basis Data</option>
            <option value="WEB1">Pemrograman web</option>
        </select><br>
        Nilai UTS : <input type="text" name="nilai_uts" value="" size="6">
        Nilai UAS : <input type="text" name="nilai_uas" value="" size="6">
        Nilai Praktikum : <input type="text" name="nilai_tugas" value="" size="6">
        <br>
        <button name="proses">Simpan</button>
    </form>

    <?php
    error_reporting(0);
        $proses = $_POST['proses'];
        $nama_siswa = $_POST['nama'];
        $mata_kuliah = $_POST['matkul'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];
        $nilai_tugas = $_POST['nilai_tugas'];
        
        if(!empty($proses)) {
    ?>

    <?= $proses ?>
    Nama Siswa <?= $nama_siswa ?>
    <br>Mata Kuliah <?= $mata_kuliah ?>
    <br>Nilai UTS <?= $nilai_uts ?>
    <br>Nilai UAS <?= $nilai_uas ?>
    <br>Nilai tugas <?= $nilai_tugas ?>

    
    <?php } ?>
  </body>
</html>