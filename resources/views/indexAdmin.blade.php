<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--<link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">-->
    <style>
        td {
            border: 1px solid black;
            padding: 5px;
        }
    </style>
</head>

<body>
    <div class="admin">
        <h1 id=>DAFTAR MOTOR</h1>
        <table>
            <tbody>
                <tr>
                    <td>No. Polisi</td>
                    <td>Merk</td>
                    <td>Tipe</td>
                    <td>Jenis</td>
                    <td>Harga/Hari</td>
                    <td>Available</td>
                </tr>
                @forelse($motors as $motor)
                <tr>
                    <td>{{ $motor->No_Polisi }}</td>
                    <td>{{ $motor->Merk }}</td>
                    <td>{{ $motor->Tipe }}</td>
                    <td>{{ $motor->Jenis }}</td>
                    <td>{{ $motor->harga_Per_Hari }}</td>
                    <td>{{ $motor->available }}</td>
                    <td>
                        <form action="{{ route('edit.motor') }}" method="post">
                            @csrf
                            <input type="hidden" name="motor" value={{ $motor }}>
                            <input type="hidden" name="no" value={{ $motor->No_Polisi }}>
                            <input type="hidden" name="merk" value={{ $motor->Merk }}>
                            <input type="hidden" name="tipe" value={{ $motor->Tipe }}>
                            <input type="hidden" name="jenis" value={{ $motor->Jenis }}>
                            <input type="hidden" name="harga" value={{ $motor->harga_Per_Hari }}>
                            <input type="hidden" name="available" value={{ $motor->available }}>
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                </tr>
                @empty
                <li>Motor Tidak Tersedia.</li>
                @endforelse
        </table>
        <br><br>
        <h1 id=>DAFTAR TRANSAKSI</h1>
        <table>
            <tbody>
                <tr>
                    <td>id transaksi</td>
                    <td>No. Polisi</td>
                    <td>NIK pelanggan</td>
                    <td>Tipe</td>
                    <td>Jenis</td>
                    <td>Harga/Hari</td>
                    <td>Available</td>
                </tr>
                @forelse($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->id_transaksi }}</td>
                    <td>{{ $transaksi->no_polisi_motor }}</td>
                    <td>{{ $transaksi->id_pelanggan }}</td>
                    <td>{{ $motor->Jenis }}</td>
                    <td>{{ $motor->harga_Per_Hari }}</td>
                    <td>{{ $motor->available }}</td>
                    <td>
                        <form action="{{ route('sewa.motor') }}" method="post">
                            @csrf
                            <input type="hidden" name="motor" value={{ $motor }}>
                            <input type="hidden" name="no" value={{ $motor->No_Polisi }}>
                            <input type="hidden" name="merk" value={{ $motor->Merk }}>
                            <input type="hidden" name="tipe" value={{ $motor->Tipe }}>
                            <input type="hidden" name="jenis" value={{ $motor->Jenis }}>
                            <input type="hidden" name="harga" value={{ $motor->harga_Per_Hari }}>
                            <input type="submit" value="sewa">
                        </form>
                    </td>
                </tr>
                @empty
                <li>Motor Tidak Tersedia.</li>
                @endforelse
        </table>
    </div>
</body>

</html>