<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Tambah Buku</h2>
    <form action="/buku/{{ $buku[$id]}}" method="post">
        @csrf
        <input type="text" name="judul" value="{{ $buku['judul'] }}"><br>
        <input type="text" name="harga" value="{{ $buku['harga']}}" required><br>
        <select name="kategori" id="">
            <option value="">pilih kategori</option>
            <option value="Self Improvment {{ $buku}}">Self Improvment</option>
            <option value="Bacaan">Bacaan</option> 
            <option value="Teknologi">Teknologi</option>
        </select><br>
        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>