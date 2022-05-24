<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>ID transaksi: {{ $id }}</h1>
    <form action="{{ route('simpan.edit.transaksi') }}" method="post">
        @csrf
        <label for="no">status transaksi (berjalan=0, selesai =1)</label><br>
        <input type="text" name="status" value="{{ $status }}" />
        <br><br>
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="hidden" name="no" value="{{ $no }}">
        <input type="submit" value="simpan">
    </form>
</body>

</html>