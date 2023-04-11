@extends('layouts.index')
@section('title', 'Daftar Masyarakat - MTI Priangan')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Daftar Masyarakat</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Masyarakat</li>
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

                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h4 class="card-title">Daftar Masyarakat</h4>
                            <p class="card-title-desc">Daftar masyarakat pamsimas</code>.
                            </p>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                </tr>
                            </thead>
    
    
                            <tbody>
                                @foreach ($masyarakat as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
@endsection
