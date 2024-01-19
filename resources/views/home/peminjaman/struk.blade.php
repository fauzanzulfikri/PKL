<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <STYle>
        td{
            padding-left: 30px;
            padding-right: 10px;
        }
    </STYle>
    <title>Perpustakaan Sekolah</title>
</head>
<body onload="window.print()">
    <center>
        <div class="row">
            <div class="col-12">
        <table>
        <h4>Bukti Peminjaman Buku</h4>
        <th colspan="4"><hr></th>
        <tr>    
            <td colspan="1"><b>Nama Petugas</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->User->nama}}</td>
        </tr>
        <tr>    
            <td colspan="1"><b>ID Peminjaman</b></td>
            <td align="right" >:</td>
            <td >{{$peminjaman->id}}</td>
        </tr>
        <tr>    
            <td colspan="1"><b>Nis</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->Siswa->nis}}</td>
        </tr>
        <tr>    
            <td colspan="1"><b>Nama Peminjam</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->Siswa->nama}}</td>
        </tr>
        <th colspan="4"><hr></th>
        <tr>    
            <td colspan="1"><b>Tanggal Pinjam</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->tgl_pinjam}}</td>
        </tr>
        <tr>    
            <td colspan="1"><b>Tanggal Kembali</b></td>
            <td align="right">:</td>
            <td>{{$peminjaman->tgl_kembali}}</td>
        </tr>
        <tr>
            <td colspan="4">
                <br>
                <i>Detail Buku Yang di Pinjam :</i>
                <table border='1'>
                    <thead>
                        <th>No</th>
                        <th>Kode</th>
                        <th>Jumlah</th>
                        <th>Keterangan</th>
                    </thead>
                    <tbody>
                        @foreach ($detail as $p)
                        <tr>
                            <td>{{$p->id}}</td>
                            <td>{{$p->kode_buku}}</td>
                            <td>{{$p->jumlah}}</td>
                            <td>{{$p->keterangan}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    <br>
                </table>
    
            </td>
        </tr>
    
        <th colspan="4"><hr></th>
        
    </table><br>
    
    <br>
    
</div>
</div>
    </center>
</body>
</html>