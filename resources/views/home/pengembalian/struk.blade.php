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
        <h4>Bukti Pengembalian Buku</h4>
        <th colspan="4"><hr></th>
        <tr>    
            <td colspan="1"><b>ID</b></td>
            <td align="right" >:</td>
            <td >{{$pengembalian->id}}</td>
        </tr>
        <tr>    
            <td colspan="1"><b>Tanggal Pengembalian</b></td>
            <td align="right">:</td>
            <td>{{$pengembalian->tgl_pengembalian}}</td>
        </tr>
        <tr>    
            <td colspan="1"><b>Denda</b></td>
            <td align="right">:</td>
            <td>Rp.{{number_format($pengembalian->denda)}}</td>
        </tr>
        <tr>    
            <td colspan="1"><b>ID Peminjaman</b></td>
            <td align="right">:</td>
            <td>{{$pengembalian->Peminjaman->id}}</td>
        </tr>
    </table><br>
    <br>
    <p align="right">Bandung,.........</p >
</div>
</div>
    </center>
</body>
</html>