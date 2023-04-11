<table>
  <style>
    .field {
      padding: 4px;
      font-weight: 700
    }
  </style>
  <thead>
  <tr>
      <th class="field">Nama Lengkap</th>
      <th class="field">NISN</th>
      <th class="field">NIK</th>
      <th class="field">Tempat Lahir</th>
      <th class="field">Tanggal Lahir</th>
      <th class="field">Asal Sekolah</th>
      <th class="field">Umur</th>
      <th class="field">Jenis Kelamin</th>
      <th class="field">Alamat</th>
      <th class="field">No HP</th>
      <th class="field">Kebutuhan Khusus</th>
      <th class="field">Disabilitas</th>
      <th class="field">Nomor</th>
      <th class="field">KIP</th>
      <th class="field">Nama Ayah Kandung</th>
      <th class="field">Nama Ibu Kandung</th>
      <th class="field">Nama Wali</th>
      <th class="field">Penghasilan Ortu</th>
      <th class="field">Golongan Darah</th>
      <th class="field">Prestasi</th>
  </tr>
  </thead>
  <tbody>
  @foreach($student as $value)
      <tr>
        <td>{{$value->nama_lengkap}}</td>
        <td>{{$value->nisn}}</td>
        <td>{{$value->nik}}</td>
        <td>{{$value->tempat_lahir}}</td>
        <td>{{$value->tanggal_lahir}}</td>
        <td>{{$value->asal_sekolah}}</td>
        <td>{{$value->umur}}</td>
        <td>{{$value->jenis_kelamin}}</td>
        <td>{{$value->alamat}}</td>
        <td>{{$value->no_telepon}}</td>
        <td>{{$value->kebutuhan_khusus}}</td>
        <td>{{$value->disabilitas}}</td>
        <td>{{$value->nomor}}</td>
        <td>{{$value->kip}}</td>
        <td>{{$value->nama_ayah_kandung}}</td>
        <td>{{$value->nama_ibu_kandung}}</td>
        <td>{{$value->nama_wali}}</td>
        <td>{{$value->penghasilan_ortu}}</td>
        <td>{{$value->goldar}}</td>
        <td>{{$value->prestasi}}</td>
      </tr>
  @endforeach
  </tbody>
</table>