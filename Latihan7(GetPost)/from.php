<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="process.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>

        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br><br>

        <label for="alamat">Alamat:</label><br>
        <textarea id="alamat" name="alamat" rows="4" cols="50"></textarea><br><br>

        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <input type="radio" id="pria" name="jenis_kelamin" value="pria">
        <label for="pria">Pria</label>
        <input type="radio" id="wanita" name="jenis_kelamin" value="wanita">
        <label for="wanita">Wanita</label><br><br>

        <label for="hobi">Hobi:</label><br>
        <input type="checkbox" id="membaca" name="hobi[]" value="membaca">
        <label for="membaca">Membaca</label>
        <input type="checkbox" id="berenang" name="hobi[]" value="berenang">
        <label for="berenang">Berenang</label>
        <input type="checkbox" id="olahraga" name="hobi[]" value="olahraga">
        <label for="olahraga">Olahraga</label><br><br>

        <label for="kota">Kota:</label><br>
        <select id="kota" name="kota">
            <option value="jakarta">Jakarta</option>
            <option value="bandung">Bandung</option>
            <option value="surabaya">Surabaya</option>
            <option value="yogyakarta">Yogyakarta</option>
        </select><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>
