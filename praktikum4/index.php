<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
            require_once "orangbiasa.php";
            require_once "mahasiswa.php";
            require_once "nilai.php";
            require_once "oranginggris.php";

            // OrangBiasa
            $james = new OrangBiasa();
            $james->setnama('James Smith');
            $james->ucapkanSalam();

            echo "<br>";
            // orang inggris
            $Rano = new OrangInggris();
            $Rano->setnama('Rano Karno');
            $Rano->ucapkanSalam();

            echo "<br>";


            // Mahasiswa

            $Emely = new OrangBiasa();
            $Emely->setnama('Emely Smith');
            $Emely->ucapkanSalam();


            $mahasiswa = new Mahasiswa();
            $mahasiswa->setnama('Emely Walker');
            $mahasiswa->setnim(701230055);
            // nilai
            $nilaimahasiswa = new Nilai();
            $nilaimahasiswa->setTugas(90);
            $nilaimahasiswa->setUts(85);
            $nilaimahasiswa->setUas(88);

            // Set nilai
            $mahasiswa->setnilai($nilaimahasiswa);

            // Tampilkan data
            $mahasiswa->tampilkanData();
        ?>
    </div>
</body>
</html>
