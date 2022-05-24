<!doctype html>
<html>

<head>
    <title>Motoran</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}" />
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>


<body>
    <header>
        <div class="nav-button"><a href="/"><span id="motor">Motor</span><span id="an">an</span></a></div>
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
    <br>
    <div class="hero">
        <br>
        <h1 id="heroText">Rent a motorbike, easily.</h1>
        <div class="logo2">
            <span id="motor">Motor</span><span id="an">an</span></a>
        </div>
        <img src=motor2.png id="gambarIndex" />
    </div>
    <!-- <div class="container">
        <table>
            <tbody>
                <tr>
                    <td>No. Polisi</td>
                    <td>Merk</td>
                    <td>Tipe</td>
                    <td>Jenis</td>
                    <td>Harga/Hari</td>
                </tr>
                @forelse($motors as $motor)
                <tr>
                    <td>{{ $motor->No_Polisi }}</td>
                    <td>{{ $motor->Merk }}</td>
                    <td>{{ $motor->Tipe }}</td>
                    <td>{{ $motor->Jenis }}</td>
                    <td>{{ $motor->harga_Per_Hari }}</td>
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
    </div> -->
    <h1 id="Title">Motor Tersedia</h1>
    <div class="sort-motor">
        <form action="{{ route('sort.motor') }}" method="post">
            @csrf
            <label for="merk">Pilih Merk:</label>
            <select name="merk" id="merk">
                <option value="">Any</option>
                <option value="honda">honda</option>
                <option value="yamaha">yamaha</option>
                <option value="suzuki">suzuki</option>
                <option value="kawasaki">kawasaki</option>
            </select>
            <label for="tipe">Pilih Tipe Unit</label>
            <input type="text" name="tipe">
            <input type="submit" value="Cari">
        </form>
    </div>
    <br>
    <div class="row">
        @forelse($motors as $motor)
        <div class="column">
            <div class="card">
                <p>{{ $motor->Merk }}</p>
                <h1 class="tipe">{{ $motor->Tipe }}</h1>
                <p class="price"><span>Rp.</span>{{ $motor->harga_Per_Hari }}</p>
                <p>{{ $motor->No_Polisi }}</p>
                <p>
                <form action="{{ route('sewa.motor') }}" method="post">
                    @csrf
                    <input type="hidden" name="motor" value={{ $motor }}>
                    <input type="hidden" name="no" value={{ $motor->No_Polisi }}>
                    <input type="hidden" name="merk" value={{ $motor->Merk }}>
                    <input type="hidden" name="tipe" value={{ $motor->Tipe }}>
                    <input type="hidden" name="jenis" value={{ $motor->Jenis }}>
                    <input type="hidden" name="harga" value={{ $motor->harga_Per_Hari }}>
                    <button class="submit" type="submit">Sewa</button>
                </form>
                </p>
            </div>
        </div>
        @empty
        <h1>Motor Tidak Tersedia.</h1>
        @endforelse
    </div>
    <footer>
        <div class="container-fluid" id="cr">
            <h5 id="creator">© 2022 Motoran corp</h5>
        </div>
    </footer>


</body>

</html>