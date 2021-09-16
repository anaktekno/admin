@extends('layouts.main')
@section('judul','Data Semua Proposal')
@section('konten')

<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="row">

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Selamat Datang {{\Auth::user()->name}}!</strong>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success  mb-2">{{session('success')}}</div>
                        @endif

                        @if (session('danger'))
                        <div class="alert alert-danger  mb-2">{{session('danger')}}</div>
                        @endif

                        <div class="my-2">
                            <button type="button" class="btn btn-danger m-l-10 m-b-10">Belum dinilai <span id="belum"
                                    class="badge badge-light"></span></button>
                            <button type="button" class="btn btn-success m-l-10 m-b-10">Sudah dinilai <span id="sudah"
                                    class="badge badge-light"></span></button>
                            <button type="button" class="btn btn-primary m-l-10 m-b-10">Total proposal <span id="sudah"
                                    class="badge badge-light">{{count($proposal)}}</span></button>
                        </div>


                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Institusi</th>
                                    <th>Judul Proposal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($proposal as $item)
                                <tr>
                                    <td>{{$loop -> iteration}}</td>
                                    <td>{{$item -> Institusi_Anggota_1 }}</td>
                                    {{-- <td>{{$item -> Fakultas_Anggota_1 }}</td> --}}
                                    <td>{{$item -> Judul_Proposal }}</td>

                                    <td>
                                        @if (count($item->nilai) == 2)
                                        <div class="badge sudah p-2 badge-success">Sudah dinilai</div>
                                        @else
                                        <div class="badge belum p-2 badge-danger">Belum dinilai</div>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div><!-- .animated -->
</div><!-- .content -->


@endsection
@push('script')
<script src="{{ asset('style/vendors/jquery/dist/jquery.min.js') }}"></script>
<script>
    let belum = $('.belum').length;
        let sudah = $('.sudah').length;
        $('#belum').html(belum)
        $('#sudah').html(sudah)
</script>
@endpush