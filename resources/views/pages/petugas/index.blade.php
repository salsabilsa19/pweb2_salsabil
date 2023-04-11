@extends('layouts.index')
@section('title', 'Daftar Petugas Pamsimas - MTI Priangan')

@section('content')
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0 font-size-18">Daftar Petugas Pamsimas</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Beranda</a></li>
                        <li class="breadcrumb-item active">Daftar Petugas Pamsimas</li>
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
                            <h4 class="card-title">Daftar Petugas Pamsimas</h4>
                            <p class="card-title-desc">Daftar petugas pada aplikasi pamsimas</code>.
                            </p>
                        </div>

                        <div class="">
                            <a href="{{ route('petugas.create') }}" class="btn btn-primary">Tambah <i class="bx bx-plus"></i></a>
                        </div>
                    </div>


                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Email</th>
                                    <th style="max-width: 10px">Aksi</th>
                                </tr>
                            </thead>
    
    
                            <tbody>
                                @foreach ($petugas as $item)
                                    <tr>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>
                                            <div class="d-flex gap-3">
                                                <a class="btn btn-outline-primary" href="{{ route('petugas.edit',$item->id) }}"><i class="bx bx-pencil"></i> Ubah</a>
                                                <form action="{{ route('petugas.destroy',$item->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-outline-danger"><i class="bx bx-trash"></i></button>
                                                </form>
                                            </div>
                                        </td>
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
