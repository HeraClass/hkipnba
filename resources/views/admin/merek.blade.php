@extends('layouts.vertical', ["page_title"=> "Dashboard"])

@section('css')
<link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/libs/selectize/selectize.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Merek</a></li>
                        <li class="breadcrumb-item active">Daftar Merek</li>
                    </ol>
                </div>
                <h4 class="page-title">Daftar Merek</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-3">
                        <a href="" class="btn btn-success waves-effect waves-light">Buat Baru</a>
                    </p>
                    <table id="paten-datatable" class="table dt-responsive w-100">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>JUDUL & JENIS</th>
                                <th>ABSTRAK</th>
                                <th>LINK</th>
                                <th>STATUS DOKUMEN</th>
                                <th>TANGGAL DIBUAT</th>
                                <th>JML ANGGOTA</th>
                                <th>DIBUAT OLEH</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Merek</td>
                                <td>Abstrak paten 1...</td>
                                <td><a href="#">Link</a></td>
                                <td>Dokumen Valid</td>
                                <td>2023-06-01</td>
                                <td>3</td>
                                <td>Admin</td>
                                <td><a href="#" class="btn btn-primary">Lihat</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div> <!-- container -->
@endsection

@section('script')
<script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#paten-datatable').DataTable();
    });
</script>
@endsection
