<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style1.css">
    <title></title>
</head>
<body>
    <form action="/store" method="POST">
    @csrf
        <fieldset>
            <img id="logo" src="{{ asset('/seer/logo.jpg')}}" width="80px" /><hr>
            <h3>DAFTAR</h3>
        <p>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama lengkap">
        </p>
        <p>
            <label>Kontak</label>
            <input type="text" name="kontak" placeholder="No telepon">
        </p>
        <p>
            <label>Asal Tempat</label>
            <input type="text" name="asal_tempat" placeholder="Asal Tempat">
        </p>
        <p>
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" id="">
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </p>
        <p>
            <label>Tujuan</label>
            <select name="tujuan">
                <option value="kepsek">Kepala sekolah</option>
                <option value="tu">Tata Usaha</option>
                <option value="kesiswaan">Kesiswaan</option>
                <option value="kurikulum">Kurikulum</option>
                <option value="humas">Humas</option>
                <option value="kajur">Ketua Jurusan</option>
                <option value="wali_kelas">Wali kelas</option>
            </select>
        </p>
        <p>
            <!-- <label>Deskripsi:</label>
            <textarea name="Deskripsi"></textarea> -->
        </p>
        <p>
            <label>Deskripsi</label>
            <textarea name="deskripsi"></textarea>
        </p>
        <p>
           <input type="submit" value="simpan" class="btn btn-primary">

        </p>
        </fieldset>
    </form>
 <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html