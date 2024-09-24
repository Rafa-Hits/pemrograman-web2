<?php
include "visibility.php";
include "nilai.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prktikum 3</title>
</head>
<body>
    <div class="">
        <?php

            $visibility = new visibility();
            $visibility->tampilkanData();

            echo "<br>";

            echo "Akses di luar kelas" . "<br>";
            echo "public: " . $visibility->public . "<br>";
            //echo "private: " . $visibility->private . "<br>";
            //Echo "protected: " . $visibility->protected . "<br>";

            echo"<br><br>";
            echo"<h2>Konsep Pewarisan</h2>";

            include "Mahasiswa.php";
            $mahasiswa = new Mahasiswa("Muhamammad Faizal");
            $mahasiswa->ucapkanSalam();

            $mahasiswaInggris = new MahasiswaAsing("Jhon");
            $mahasiswaInggris->ucapkanSalam();


        ?>
    </div>

</body>
</html>