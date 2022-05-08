<!doctype html>
<html>

<head>
    <title>Events - Praktikum Laravel Ke-2</title>
    <style>
    td {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <h1>Motor Tersedia</h1>
    <table>
        <tbody>
            <tr>
                <td>No. Polisi</td>
                <td>Merk</td>
                <td>Tipe</td>
                <td>Jenis</td>
            </tr>
        @forelse($motors as $motor)
        <tr>
            <td>{{ $motor->No_Polisi }}</td>
            <td>{{ $motor->Merk }}</td>
            <td>{{ $motor->Tipe }}</td>
            <td>{{ $motor->Jenis }}</td>
            <td>
                <form action="{{ route('sewa.motor') }}" method="post">
                    @csrf
                    <input type="hidden" name="no" value={{ $motor->No_Polisi }}>
                    <input type="hidden" name="merk" value={{ $motor->Merk }}>
                    <input type="hidden" name="tipe" value={{ $motor->Tipe }}>
                    <input type="hidden" name="jenis" value={{ $motor->Jenis }}>
                    <input type="submit" value="sewa">
                </form>
            </td>
        </tr>
        @empty
        <li>Motor Tidak Tersedia.</li>
        @endforelse
    </table>
</body>

</html>

