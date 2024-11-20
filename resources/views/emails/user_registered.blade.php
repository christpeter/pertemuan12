<!DOCTYPE html>
<html>
<head>
    <title>Selamat Datang!</title>
</head>
<body>
    <h1>Halo, {{ $user->name }}!</h1>
    <p>Terima kasih telah mendaftar di aplikasi kami. Berikut adalah informasi akun Anda:</p>
    <ul>
        <li>Nama: {{ $user->name }}</li>
        <li>Email: {{ $user->email }}</li>
        <li>Tanggal Pendaftaran: {{ now()->format('d-m-Y H:i:s') }}</li>
    </ul>
    <p>Selamat menggunakan aplikasi kami!</p>
</body>
</html>