<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Mahasiswa</title>
</head>
<body>
    <h2>Input Data Mahasiswa</h2>
    <form action="process.php" method="post">
        NIM: <input type="text" name="nim" placeholder="Masukkan NIM" required><br><br>
        Nama: <input type="text" name="nama" placeholder="Masukkan Nama" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>