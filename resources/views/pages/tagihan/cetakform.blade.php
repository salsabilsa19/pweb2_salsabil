@extends('layouts.index')
@section('title', 'Daftar Tagihan Pamsimas - SIPA')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Cetak Laporan</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item active">Cetak Laporan</li>
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
                    <div class="d-flex flex-column">
                        <div class="form-group col-5">
                            <label for="tanggal_awal">Tanggal Awal</label>
                            <input type="date" class="form-control mr-3" id="tanggal_awal" name="tanggal_awal">
                        </div>
                        <br>
                        <div class="form-group col-5">
                            <label for="tanggal_akhir">Tanggal Akhir</label>
                            <input type="date" class="form-control" id="tanggal_akhir" name="tanggal_akhir">
                        </div>     
                        <br>                   
                        <div class="form-group col-5">
                            <a href="" onclick="this.href='/cetak/'+document.getElementById('tanggal_awal').value +
                            '/' + document.getElementById('tanggal_akhir').value" 
                            target="_blank" class="btn btn-primary mr-2">Cetak <i class="bx bx-printer"></i></a>
                        </div>                        
                    </div>
                </div>                
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
