<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('simpan.add.motor') }}" method="post">
        @csrf
        <label for="no">No. Polisi</label><br>
        <input type="text" name="no" />
        <br><br>
        <label for="merk">Merk</label><br>
        <input type="text" name="merk" />
        <br><br>
        <label for="tipe">Tipe</label><br>
        <input type="text" name="tipe" />
        <br><br>
        <label for="jenis">Jenis</label><br>
        <input type="text" name="jenis" />
        <br><br>
        <label for="harga">Harga/hari</label><br>
        <input type="text" name="harga" />
        <br><br>
        <label for="available">Tersedia (True=1/False=0)</label><br>
        <input type="text" name="available" />
        <br><br>
        <input type="submit" value="simpan">
    </form>
</body>

</html>