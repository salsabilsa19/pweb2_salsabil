<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{-- <meta name="crsf-token" content="{{ crsf_token() }}"> --}}
  <style>
    table.static {
      position: relative;
      border: 1px solid #543535
    }
  </style>
  <title>Cetak Data Laporan</title>
</head>
<body>
  <div class="form-group">
    <h2 align="center"><b>Laporan Data Pembayaran SIPA</b></h2>
    <p align="center">{{ $tglawal}} - {{ $tglakhir}}</p>
    <br>
    {{-- <p>{{ $tagihan->created_at }}</p> --}}
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">      
      <thead>
        <tr>
            <th rowspan="2">Nama Pelanggan</th>
            <th rowspan="2">No Sambungan</th>
            {{-- <th>Alamat</th> --}}
            <th colspan="2">Meteran</th>
            <th rowspan="2">Jumlah Tagihan</th>
            <th rowspan="2">Status Pembayaran</th>
            {{-- <th style="max-width: 10px">Aksi</th> --}}
        </tr>
        <tr>
          <th rowspan="1">Sebelumnya</th>
          <th rowspan="1">Sekarang</th>
        </tr>
    </thead>
    <tbody>
      <tbody>
        @foreach ($tagihan as $item)
            <tr>
                <td>{{ $item->name }}</td>
                <td>{{ $item->no_sambungan }}</td>
                <td>{{ $item->sebelumnya }}</td>
                <td>{{ $item->sekarang }}</td>

                <td>{{ $item->jumlahtagihan }}</td>
                <td>{{ $item->statuspembayaran }}</td>                
            </tr>
        @endforeach
    </tbody>
    </tbody>
    </table>
  </div>
  <script type="text/javascript">
    window.print();
  </script>
</body>
</html>