<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <?php
        $ar_prodi =["SI"=>"Sistem Informasi", "TI"=>"Teknik Informatika", "BD"=>"Bisnis Digital"];
        $ar_skill =["HTML"=>10, "CSS"=>10, "Javascript"=>20, "RWD Bosstrapt"=>20, "PHP"=>30, "Java"=>50];
    ?>

    <fieldset style="background-color: aquamarine;">
        <legend>From Registrasi IT Club Data Science</legend>
        <table>
            <tr>
                <th>Form Registrasi</th>
            </tr>
            <tr>
                <th><form method="POST">

                </th>
            </tr>
            <tr>
                <td>NIM : </td>
                <td> <input type="text" name="nim" value="" size="30"></td>
            </tr>
            <tr>
                <td>Nama : </td>
                <td> <input type="text" name="nama" value="" size="30"><td/></td></tr></td>
            </tr>
            <tr>
                <td>Jenis Kelamin : </td>
                <td>
                    <input type="radio" name="jk" value="Laki-laki" size="30">Laki-laki
                    <input type="radio" name="jk " value="Perempuan" size="30">Perempuan
                <td/>
            </tr>
            <tr>
                <td>Program Studi : </td>
                <td>
                    <select name="prodi">
                        <?php
                            foreach($ar_prodi as $prodi => $p){ ?>
                            <option value="<?= $prodi ?>"><?= $p ?></option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td> Skill Programming : </td>
                <td>
                    <?php
                    foreach($ar_skill as $skill => $s){
                    ?>
                    <input type="checkbox" name="skill[]" value="<?= $s ?>"><?= $skill ?>
                    <?php } ?>
                </td>
            </td>
            </tr>
            <tr>
                <td>
                    <button name="proses">Simpan</button>
                </td>
            </tr>
                    </form>
            
        </table>
    </fieldset>

    <?php
    if(isset($_POST['proses'])){
        $nim = $_POST['nim'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $prodi = $_POST['prodi'];
        $skill = $_POST['skill'];
        $email = $_POST['email'];
        $nilai = 0;
        $predikat = predikat($nilai);
    ?>
    Nama : <?= $nama ?><br>
    NIM : <?= $nim ?><br>
    JK : <?= $jk ?><br>
    Prodi : <?= $prodi ?><br>
    skill : <?= $skill ?><br>
    Email : <?= $skill ?><br>

    <?php 
        function skor_skill($total){
            if($total >= 100 && $total <= 170 ) {
                return "Sangat Baik";
            } elseif ($total >= 60 && $total <= 100 ) {
                return "Baik";
            } elseif ($total >= 40 && $total <= 60 ){
                return "Cukup";
            } elseif ($total >= 0 && $total <= 40 ){
                return "Kurang";
            } else {
                return "Tidak Memadai";
            }
    }
    echo 'kategori Skill :'.skor_skill($total);
    } 

    foreach($skill as $data){
        switch ($data){
            case 'html' :
                $nilai += 10;
                break;
            case 'css' :
                $nilai += 10;
                break;
            case 'javascript' :
                $nilai += 20;
                break;
            case 'bootstrap' :
                $nilai += 20;
                break;
            case 'php' :
                $nilai += 30;
                break;
            case 'java' :
                $nilai += 50;
                break;
            default :
            $nilai +=
            break;
        }
    }
    ?>
    <?php
    echo "<h4>Informasi yang di anda kirim : </h4>";
    echo "<br>Nama : $nama";
    echo "<br>NIM : $nim";
    echo "<br>Jenis Kelamin : $jk";
    echo "<br>Program Studi : $studi";
    echo "<br/> Predikat : $predikat";
    echo "<br>Email : $email";
    echo "<br>skill : ";
    foreach ($skill as $data){
        echo $data . ", ";
    }
    echo "<br> Skor Skill : $nilai";
    ?>
    
</body>
</html>