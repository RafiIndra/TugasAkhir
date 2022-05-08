<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--{{ $no }} - {{ $merk }} - {{ $tipe }} - {{ $jenis }}-->
    Motor yang akan disewa: {{ $tipe }}
    Merk: {{ $merk }}
    No. Polisi : {{ $no }}
    <form action="{{ route('form.penyewaan') }}" method="post">
        @csrf
        Nama : <input type="text" name="nama"><br>
        Lama Sewa: <input type="text" name="durasi"><br>
        NIK : <input type="text" name="NIK"><br>
        Alamat : <input type="text" name="alamat"><br>
        <input type="hidden" name="no" value={{ $no }}>
        <input type="hidden" name="merk" value={{ $merk }}>
        <input type="hidden" name="tipe" value={{ $tipe }}>
        <input type="hidden" name="jenis" value={{ $jenis }}>
        <input type="submit" value="Sewa Sekarang">
    </form>
</body>

</html>