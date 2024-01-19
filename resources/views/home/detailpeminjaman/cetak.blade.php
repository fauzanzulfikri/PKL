<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
    <title>Perpustakaan Sekolah</title>
</head>
<body onload="window.print()">
    <center>
        <h4>Laporan Detail Peminjaman Perpustakaan Sekolah</h4>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Buku</th>
                    <th>Jumlah</th>
                    <th>Keterangan</th>
                    <th>Id Peminjaman</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dpeminjaman as $dp)
                        <tr>
                            <td>{{$dp->id}}</td>
                            <td>{{$dp->Buku->judul}}</td>
                            <td>{{$dp->jumlah}}</td>
                            <td>{{$dp->keterangan}}</td>
                            <td>{{$dp->Peminjaman->id}}</td>
                        </tr>
                @endforeach
            </tbody>
        </table>
    </center>
    <h3 align="right">Tertanda</h3>
    <p align="right">.............</p>
</body>
</html>