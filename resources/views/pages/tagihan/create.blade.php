@extends('layouts.index')
@section('title', 'Tambah | Daftar Tagihan Pamsimas - PAMSIMAS')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Tambah Daftar Tagihan</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('tagihan.index') }}">Daftar Tagihan</a></li>
                        <li class="breadcrumb-item active">Tambah</li>
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

                    <h4 class="card-title">Tambah Daftar Tagihan SIPA Pamsimas </h4>
                    <p class="card-title-desc">Tambah daftar tagihan </code>.
                    </p>

                    <form method="POST" action="{{ route('tagihan.store') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nama Pelanggan') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" name="name" autocomplete="name" autofocus>
                            </div>

                            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        {{-- <div class="row mb-3">
                            <label for="alamat" class="col-md-4 col-form-label text-md-end">{{ __('Alamat') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" name="alamat" autocomplete="alamat" autofocus>
                            </div>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span> 
                                @enderror
                        </div> --}}
                        <div class="row mb-3">
                            <label for="no_sambungan" class="col-md-4 col-form-label text-md-end">{{ __('Nomor Sambungan') }}</label>

                            <div class="col-md-6">
                                <input id="text" type="text" name="no_sambungan" autocomplete="alamat" autofocus>
                            </div>                                
                        </div>

                        <div class="row mb-3">
                            <label for="sebelumnya" class="col-md-4 col-form-label text-md-end">{{ __('Meteran Sebelumnya') }}</label>

                            <div class="col-md-6">
                                <input id="sebelumnya" type="number" name="sebelumnya" autocomplete="sebelumnya" autofocus>
                            </div>

                                @error('alamat')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="sekarang" class="col-md-4 col-form-label text-md-end">{{ __('Meteran Sekarang') }}</label>

                            <div class="col-md-6">
                                <input id="sekarang" type="number" name="sekarang" autocomplete="notelp" autofocus onkeyup="hitungtagihan()">
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
                                <input id="hasil" type="text" name="jumlahtagihan" autocomplete="jumlahtagihan" autofocus>
                            </div>
                            {{-- <span id="hasil"></span> --}}
                                @error('jumlahtagihan')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                            <label for="statuspembayaran" class="col-md-4 col-form-label text-md-end">{{ __('Status Pembayaran') }}</label>

                            <div class="col-md-6">
                                <select name="statuspembayaran" autocomplete="statuspembayaran" autofocus>
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
                                <button type="submit" class="btn btn-primary">
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
