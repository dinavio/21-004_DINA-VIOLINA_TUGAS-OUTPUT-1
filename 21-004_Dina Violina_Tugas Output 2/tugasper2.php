<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas output 2</title>
    <link rel= "stylesheet" href="tugas2.css"/>
</head>
<body id="hsl">

    <div class="identitas">
        <?php
        $nama= "Tugas";
        $nama .= " ";
        $nama .= "Output 2";
        echo $nama;
        ?>
    </div>
    <br><br>
    <div class="hasil">
        <?php
            $name = ($_POST["nama"]);
            $nim = ($_POST["NIM"]) ;
            $email = ($_POST["email"]);
            $gender= ($_POST["gender"]);
            $alamat = ($_POST["alamat"]);
            $jeniskelamin = ($_POST["gender"]);
            $jurusan =($_POST["jurusan"]);
            $beratbadan =($_POST["beratbadan"]);
            $bb= (int)$beratbadan;
            $bmi =($_POST["bmi"]);
            $bmii=(float)$bmi;
            $hobby =($_POST["hobi"]);


            echo "Data nama = ".$name ."<br>" ;
            echo "NIM = ".$nim ."<br>" ;
            echo "E-mail =".$email ."<br>";
            echo "Jenis kelamin =".$gender ."<br>";
            echo "Jurusan =".$jurusan ."<br>";
            echo "Berat Badan =".$bb ."<br>";
            echo "BMI =".$bmii ."<br>";
            echo "Hobby =".$hobby ."<br>";    
        ?>
    </div>
    

</body>
</html>