<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #00aa41;
  color: white;
}

#customer td {
    text-align: center;
}
</style>
</head>
<body>

<center><h3>DATA PEMBAYARAN</h3></center>

<table id="customers">
  <tr>
    <th>NO</th>
    <th>ID Petugas</th>
    <th>NISN</th>
    <th>Tanggal Bayar</th>
    <th>Bulan Dibayar</th>
    <th>Tahun Dibayar</th>
    <th>SPP Tahun</th>
    <th>Nominal SPP</th>
    <th>Jumlah Bayar</th>
  </tr>
  @php
    $no=1; 
  @endphp
  @foreach ($pembayaran as $item)
   <tr>
    <td>{{$no++}}</td>
    <td>{{$item->petugas->nama_petugas}}</td>
    <td>{{$item->nisn}}</td>
    <td>{{$item->tgl_bayar}}</td>
    <td>{{$item->bulan_dibayar}}</td>
    <td>{{$item->tahun_dibayar}}</td>
    <td>{{$item->spp->tahun}}</td>
    <td>{{number_format($item->spp->nominal, 0,",",".")}}</td>
    <td>{{number_format($item->jumlah_bayar, 0,",",".")}}</td>
  </tr>
  @endforeach

</table>

</body>
</html>


