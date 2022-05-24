<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>EDIT INFO MOTOR</h1>
    <form action="{{ route('simpan.edit.motor') }}" method="post">
        @csrf
        <label for="no">No. Polisi</label><br>
        <input type="text" name="no" value="{{ $no }}" />
        <br><br>
        <label for="merk">Merk</label><br>
        <input type="text" name="merk" value="{{ $merk }}" />
        <br><br>
        <label for="tipe">Tipe</label><br>
        <input type="text" name="tipe" value="{{ $tipe }}" />
        <br><br>
        <label for="jenis">Jenis</label><br>
        <input type="text" name="jenis" value="{{ $jenis }}" />
        <br><br>
        <label for="harga">Harga/hari</label><br>
        <input type="number" name="harga" value="{{ $harga }}" />
        <br><br>
        <label for="available">Tersedia (True=1/False=0)</label><br>
        <input type="number" min=0 max=1 name="available" value="{{ $available }}" />
        <br><br>
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="submit" value="simpan">
    </form>
</body>

</html>