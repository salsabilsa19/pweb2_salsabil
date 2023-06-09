@extends('layouts.index')
@section('title', 'Ubah | Daftar Tagihan Pamsimas - PAMSIMAS')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Ubah Daftar Tagihan</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('petugas.index') }}">Daftar Tagihan</a></li>
                        <li class="breadcrumb-item active">Ubah</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Ubah Daftar Tagihan SIPA Pamsimas </h4>
                    <p class="card-title-desc">Ubah daftar tagihan </code>.
                    </p>

                    <form method="POST" action="{{ route('updatetagihan', $data['id']) }}">
                        @method('PUT')
                        @csrf                    
                        <div class="row mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Pelanggan') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" name="name" autocomplete="name" autofocus value="{{$data['name']}}">
                            </div>

                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="no_sambungan" class="col-md-4 col-form-label text-md-end">{{ __('No Sambungan') }}</label>

                            <div class="col-md-6">
                                <input id="no_sambungan" type="text" name="no_sambungan" autocomplete="no_sambungan" autofocus value="{{$data['no_sambungan']}}">
                            </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Meteran Sebelumnya') }}</label>

                            <div class="col-md-6">
                                <input id="sebelumnya" type="text" name="sebelumnya" autocomplete="alamat" autofocus value="{{$data['sebelumnya']}}">
                            </div>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="notelp" class="col-md-4 col-form-label text-md-end">{{ __('Meteran Sekarang') }}</label>

                            <div class="col-md-6">
                                <input id="sekarang" type="text" name="sekarang" autocomplete="notelp" onkeyup="hitungtagihan()" autofocus value="{{$data['sekarang']}}">
                            </div>

                                @error('notelp')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="jumlahtagihan" class="col-md-4 col-form-label text-md-end">{{ __('Jumlah Tagihan') }}</label>

                            <div class="col-md-6">
                                <input id="hasil" type="text" name="jumlahtagihan" autocomplete="jumlahtagihan" autofocus value="{{$data['jumlahtagihan']}}">
                            </div>

                                @error('jumlahtagihan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="statuspembayaran" class="col-md-4 col-form-label text-md-end">{{ __('Status Pembayaran') }}</label>

                            <div class="col-md-6">
                                <select id="statuspembayaran" name="statuspembayaran" autocomplete="statuspembayaran" autofocus value="{{$data['statuspembayaran']}}">
                                    <option value="">Pilih Status Pembayaran</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Bayar">Belum Bayar</option>
                                </select>
                            </div>

                                @error('statuspembayaran')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="simpan" type="submit" class="btn btn-primary">
                                    Simpan
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
@section('scripts')


{{-- <script>
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
$("#simpan").click(function(){
    let data={
        name: $('#name').val(),
        alamat: $('#alamat').val(),
        sebelumnya: $('#sebelumnya').val(),
        sekarang: $('#sekarang').val(),
        jumlahtagihan: $('#jumlahtagihan').val(),
        statuspembayaran: $('#statuspembayaran').val()
    }
    $.ajax({
    url: "{{ route('tagihan.update', $data['id']) }}",
    type: "PUT",
    data:data,
    dataType: "json",
    success: function(data) {
        $.each(data.data, function(key, value) {
            $('#barang_id').append('<option value="' + value.id + '">' + value
                .nama_barang + ' - (' + value.kode_barang + ')</option>');
        });
    }
}); 
});

</script> --}}
@endsection