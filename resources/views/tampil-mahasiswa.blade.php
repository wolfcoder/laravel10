<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Mahasiswa</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
<section class="container">
    <h1 class="text-red">Daftar Mahasiswa Eloquent</h1>
    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>IPK</th>
        </tr>
        @forelse( $mahasiswas as $mhs )
            <tr>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>

                <td>{{ $mhs->ipk }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="3">Tidak ada data</td>
            </tr>
            )
        @endforelse

    </table>
</section>

</body>
</html>

