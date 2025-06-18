<?php $nama = "Asep Rohman"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @php $umur=18; @endphp
    ini profile saya 
    <?php echo $nama; ?> <br>
    Umur saya: {{ $umur }}
</body>
</html>