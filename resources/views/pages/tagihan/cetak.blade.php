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
    <br>
    {{-- <p>{{ $tagihan->created_at }}</p> --}}
    <table class="static" align="center" rules="all" border="1px" style="width: 95%">      
      <thead>
        <tr>
            <th>Nama Pelanggan</th>
            {{-- <th>Alamat</th> --}}
            <th>Meteran Sebelumnya</th>
            <th>Meteran Sekarang</th>
            <th>Jumlah Tagihan</th>
            <th>Status Pembayaran</th>
            {{-- <th style="max-width: 10px">Aksi</th> --}}
        </tr>
    </thead>
    <tbody>
      <tbody>
        @foreach ($tagihan as $item)
            <tr>
                <td>{{ $item->name }}</td>
                {{-- <td>{{ $item->alamat }}</td> --}}
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