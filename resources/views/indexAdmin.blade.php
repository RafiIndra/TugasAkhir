<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Motoran</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <style>
    header {
        height: 70px;
        border-radius: 10px;
    }

    #motor {
        font-size: 270%;
        color: #7c65ff;
        color: #4ab9dd;
        margin-left: 20px;
        height: auto;
        font-weight: 500;
    }

    #an {
        font-size: 270%;
        color: #000000;
        height: auto;
        font-weight: 500;
    }

    .nav-button a {
        text-decoration: none;
    }

    table {
        font-family: 'Arial';
        margin: 25px auto;
        border-collapse: collapse;
        border: 1px solid black;
        border-bottom: 2px solid #00cccc;
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.10),
            0px 10px 20px rgba(0, 0, 0, 0.05),
            0px 20px 20px rgba(0, 0, 0, 0.05),
            0px 30px 20px rgba(0, 0, 0, 0.05);

    }

    th,
    td {
        border: 1px solid black;
        background-image: linear-gradient(#add8e6, #4ab9dd);
        border-bottom: 1px solid #ddd;
        background-color:
            padding: 8px 20px;
        text-align: center;

    }

    h1 {
        margin-top: 40px;
        text-align: center;
        font-family: Georgia, "Times New Roman", Times, serif;
        font-size: 30px;
    }

    .add-motor {
        width: fit-content;
        margin: auto;
    }

    .logout {
        float: right;
        width: fit-content;
        margin-top: -45px;
        margin-right: 35px;
    }

    .logout>button {
        float: right;
        color: var(--primary-color);
        font-size: large;
        text-decoration: none;
        border-radius: 5px;
        border: none;
        background-color: white;
    }

    #tes {
        text-decoration: none;
        color: var(--primary-color);
        font-family: "poppins";
        font-weight: normal;
    }
    </style>
</head>

<body>
    <header>
        <div class="nav-button"><a href="/indexAdmin"><span id="motor">Motor</span><span id="an">an</span></a></div>
        <div class="logout">
            <button>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <x-dropdown-link id="tes" :href="route('logout')" onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-dropdown-link>
                </form>
            </button>
        </div>
    </header>

    <div class="admin">
        <h1 id=>DAFTAR MOTOR</h1>
        <table>
            <tbody>
                <tr>
                    <th>No. Polisi</th>
                    <th>Merk</th>
                    <th>Tipe</th>
                    <th>Jenis</th>
                    <th>Harga/Hari</th>
                    <th>Available</th>
                    <th>Ubah</th>
                    <th>Hapus</th>
                </tr>
                @forelse($motors as $motor)
                <tr>
                    <td>{{ $motor->No_Polisi }}</td>
                    <td>{{ $motor->Merk }}</td>
                    <td>{{ $motor->Tipe }}</td>
                    <td>{{ $motor->Jenis }}</td>
                    <td>{{ $motor->harga_Per_Hari }}</td>
                    @if ($motor->available == 0)
                    <td>Dipinjam</td>
                    @else
                    <td>Tersedia</td>
                    @endif
                    <td>
                        <form action="{{ route('edit.motor') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value={{ $motor->id }}>
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
                    <td>
                        <form action="{{ route('delete.motor') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value={{ $motor->id }}>
                            <input type="submit" value="Hapus">
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8">Motor Tidak Tersedia.</td>
                </tr>
                @endforelse
        </table>
        <div class="add-motor">
            <a href="{{ route('add.motor') }}">
                <button>Tambahkan Motor</button>
            </a>
        </div>
        <br><br>

        <h1 id=>DAFTAR TRANSAKSI</h1>
        <table>
            <tbody>
                <tr>
                    <th>ID Transaksi</th>
                    <th>No. Polisi</th>
                    <th>NIK Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat Pelanggan</th>
                    <th>Lama Sewa<br>(hari)</th>
                    <th>total_harga</th>
                    <th>status_transaksi</th>
                    <th>edit</th>
                    <th>hapus</th>
                </tr>
                @forelse($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->id_transaksi }}</td>
                    <td>{{ $transaksi->no_polisi_motor }}</td>
                    <td>{{ $transaksi->id_pelanggan }}</td>
                    <td>{{ $transaksi->nama_pelanggan }}</td>
                    <td>{{ $transaksi->alamat_pelanggan }}</td>
                    <td>{{ $transaksi->durasi }}</td>
                    <td>{{ $transaksi->total_harga}}</td>
                    @if ($transaksi->status_transaksi == 0)
                    <td>Berjalan</td>
                    @else
                    <td>Selesai</td>
                    @endif
                    <td>
                        <form action="{{ route('edit.transaksi') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value={{ $transaksi->id_transaksi }}>
                            <input type="hidden" name="status" value={{ $transaksi->status_transaksi }}>
                            <input type="hidden" name="no" value={{ $transaksi->no_polisi_motor }}>
                            <input type="submit" value="Edit">
                        </form>
                    </td>
                    <td>
                        <form action="{{ route('delete.transaksi') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value={{ $transaksi->id_transaksi }}>
                            <input type="submit" value="delete">
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="10">Transaksi Tidak Tersedia.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>

</html>