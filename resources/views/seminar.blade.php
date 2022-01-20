<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTA Verification</title>
</head>
<body>
    <h1>Selamat! Anda telah terdaftar sebagai peserta seminar {{ $details['judul'] }}!</h1>
    <p>Nomor Peserta : {{$details['member_id']}}</p>
    <p>Silahkan bergabung pada <?php echo $details['jam']." ".$details['tanggal']; ?>.</p>
    <p>Terimakasih</p>
</body>
</html>