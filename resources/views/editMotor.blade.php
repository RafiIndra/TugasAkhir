<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    header {
        height: 70px;
        border-radius: 10px;
    }

    #motor {
        font-size: 270%;
        /*color: #7c65ff;*/
        color: #4ab9dd;
        margin-left: 20px;
        height: auto;
    }

    #an {
        font-size: 270%;
        color: #000000;
        height: auto;

    }

    .nav-button a {
        text-decoration: none;
        font-family: "Poppins";

    }

    form {
        border-radius: 10px;
        padding: 40px;
        box-shadow: 0px 5px 10px 0px #0000001a;
        background-image: linear-gradient(#add8e6, #4ab9dd);
        margin: auto;
        width: 30%;
    }

    input[type=text] {
        width: 100%;
    }

    h1 {
        margin-top: 40px;
        text-align: center;
        font-family: Georgia, "Times New Roman", Times, serif;
        font-size: 30px;
    }
    </style>
</head>

<body>
    <header>
        <div class="nav-button"><a href="/indexAdmin"><span id="motor">Motor</span><span id="an">an</span></a></div>
    </header>
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
        <label for="available">Tersedia</label><br>
        @if ( $available == 0)
        <input type="radio" name="available" value=0 checked="checked">Dipinjam</input>
        <input type="radio" name="available" value=1>Tersedia</input>
        @else
        <input type="radio" name="available" value=0>Dipinjam</input>
        <input type="radio" name="available" value=1 checked="checked">Tersedia</input>
        @endif
        <br><br>
        <input type="hidden" name="id" value="{{ $id }}">
        <input type="submit" value="simpan">
    </form>
</body>

</html>