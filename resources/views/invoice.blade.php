<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('style.css') }}"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!--{{ $nama }} - {{ $NIK }} - {{ $durasi }} - {{ $alamat }}<br>
    {{ $no }} - {{ $merk }} - {{ $tipe }} - {{ $jenis }} - {{ $transaksi->id }}-->
    <div class="container">
        INVOICE<br>
        id_transaksi: {{ $transaksi->id }}<br>
        Nama Pelanggan: {{ $nama }}<br>
        NIK: {{ $NIK }}<br>
        Merk motor: {{ $merk }}<br>
        Tipe motor: {{ $tipe }}<br>
        Harga per hari: {{ $harga }}<br>
        Lama sewa: {{ $durasi }}<br>
        Total bayar: Rp {{ $transaksi->total_harga }}<br><br><br>

        Silahkan lakukan pembayaran saat mengambil motor, atau lakukan transfer ke nomor berikut:<br>
        1234356172187 MANDIRI a.n Deddy Corbuzier
        <br><br>
        <a href="{{ route('home.button') }}">
            <button>OKAY</button>
        </a>
    </div>
</body>

</html>