<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan OOP</title>
</head>
<style>
    .wrapper{
        padding: 18px;
    }
    .form-input{
        display: block;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
</style>
<body>
    <?php
        require_once "form_mhs.php";

        $form = new form();
        $form->setTextField('Nama', '');
        $form->setTextField('NIM', '');
        $form->setTextField('Prodi', '');
        $form->setTextField('Fakultas', '');
        $form->tampilkanForm();

    ?>
</body>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dengan OOP</title>
</head>
<style>
    .wrapper{
        padding: 18px;
    }
    .form-input{
        display: block;
        border-radius: 4px;
        border: 1px solid #ccc;
    }
</style>
<body>
    <?php
        require_once "form_mhs.php";

        $form = new form();
        $form->setTextField('Nama', '');
        $form->setTextField('NIM', '');
        $form->setTextField('Prodi', '');
        $form->setTextField('Fakultas', '');
        $form->tampilkanForm();

    ?>
</body>
>>>>>>> 3b5b3c0b9083a871108adbddb789aad6889b1c86
</html>