<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoran</title>
</head>

<body>
    <!--{{ $nama }} - {{ $NIK }} - {{ $durasi }} - {{ $alamat }}<br>
    {{ $no }} - {{ $merk }} - {{ $tipe }} - {{ $jenis }} - {{ $transaksi->id }}-->
    <div class="container">
        <div class="invoice">
            <div class="logo">
                <span id="motor">Motor</span><span id="an">an</span></a>
            </div>
            <div class="id-transaksi">
                <p>id_transaksi: {{ $transaksi->id }}</p><br>
            </div>
            <div class="invoice-text">
                <p>INVOICE<br>
                    Nama Pelanggan: {{ $nama }}<br>
                    NIK: {{ $NIK }}<br>
                    Merk motor: {{ $merk }}<br>
                    Tipe motor: {{ $tipe }}<br>
                    Harga per hari: {{ $harga }}<br>
                    Lama sewa: {{ $durasi }}<br>
                    Total bayar: Rp {{ $transaksi->total_harga }}<br><br><br>

                    Silahkan lakukan pembayaran saat mengambil motor, atau lakukan transfer ke nomor berikut:<br>
                    1234356172187 MANDIRI a.n Deddy Corbuzier</p>
                <br><br>
            </div>
        </div>
    </div>
    <div class="okay">
        <a href="{{ route('home.button') }}">
            <button>OKAY</button>
        </a>
    </div>
</body>
<script>
window.onload = function() {
    document.title = "Motoran-{{ $transaksi->id }}";
    window.print();
    /*var url = document.location.href,
        params = url.split("?")[1].split("&"),
        data = {},
        tmp;
    for (var i = 0, l = params.length; i < l; i++) {
        tmp = params[i].split("=");
        data[tmp[0]] = tmp[1];
    }
    document.getElementById("invoice-kodepby").innerText = data.kodebayar;
    document.getElementById("invoice-totalbayar").innerText = data.totalbayar;
    document.getElementById("invoice-jmlmalam").innerText = data.jmlmalam;
    document.getElementById("invoice-namahotel").innerText =
        dataHotel[data.id].nama;
    document.getElementById("invoice-lokasi").innerText =
        dataHotel[data.id].lokasi;
    document.getElementById("invoice-alamat").innerText =
        dataHotel[data.id].alamat;
        */
};
</script>

</html>