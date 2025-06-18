<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if($barang)
        @if($kode)
        kode promo {{$kode}} untuk {{$barang}}
    @else 
        menampilkan promo untuk {{$barang}}
    @endif
    @else 
        menampilkan semua promo barang
    @endif

</body>
</html>