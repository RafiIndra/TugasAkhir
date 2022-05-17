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
    <header>
        <div class="nav-button"><a href="/"><span id="motor">Motor</span><span id="an">an</span></a></div>
    </header>
    <!--{{ $no }} - {{ $merk }} - {{ $tipe }} - {{ $jenis }}-->
    <div class="container-information">

        <div class="information">
            <h1 id=Title>Rincian Pesanan</h1>
            <p>Motor yang akan disewa</p>
            <h2 class="text-information">{{ $tipe }}</h2>
            <p>Merk</p>
            <h2 class="text-information">{{ $merk }}</h2>
            <p>No. Polisi</p>
            <h2 class="text-information">{{ $no }}</h2>
            <p>Harga per hari</p>
            <h2 class="text-information">Rp.{{ $harga }}</h2>
        </div>

        <div class="form1">
            <form action="{{ route('form.penyewaan') }}" method="post">
                @csrf
                <table>
                    <tr>
                        <td>
                            <label for="nama">Nama</label>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="durasi">Lama Sewa (hari)</label>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="number" name="durasi" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="NIK">NIK</label>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="number" name="NIK" min="1000000000000000" maxlength="9999999999999999" required
                                oninvalid="this.setCustomValidity('NIK tidak sesuai')"
                                oninput="this.setCustomValidity('')" /><br>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="alamat">Alamat</label>
                        </td>
                        <td>:</td>
                        <td>
                            <input type="text" name="alamat" required><br>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><input type="submit" value="Sewa Sekarang"></td>
                    </tr>
                </table>
                <input type="hidden" name="motor" value={{ $motor }}>
                <input type="hidden" name="no" value={{ $no }}>
                <input type="hidden" name="merk" value={{ $merk }}>
                <input type="hidden" name="tipe" value={{ $tipe }}>
                <input type="hidden" name="jenis" value={{ $jenis }}>
                <input type="hidden" name="harga" value={{ $harga }}>

            </form>
        </div>

    </div>
    <footer>
        <div class="container-fluid" id="cr">
            <h5 id="creator">© 2022 Motoran corp</h5>
        </div>
    </footer>
</body>

</html>