@extends('admin.layout')
@push('customcss')
<link href="{{ asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
@endpush
@section('title','Data Tiket')
@section('content')

<div class="page-title">
    <div class="title_left">
        <h3>Tiket</h3>
    </div>

    <div class="title_right">
        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
            <div class="pull-right">
                <a href="{{route('tiket.create')}}" class="btn btn-info">Tambah Data</a>
            </div>
        </div>
    </div>
</div>

<div class="clearfix"></div>
<div class="col-md-12 col-sm-12 ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Daftar Tiket</h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="#">Settings 1</a>
                        <a class="dropdown-item" href="#">Settings 2</a>
                    </div>
                </li>
                <li><a class="close-link"><i class="fa fa-close"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="example1" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Tiket</th>
                                    <th>Kategori Tiket</th>
                                    <th>Jumlah Tiket</th>
                                    <th>Harga Tiket</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($tiket as $item)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$item->nama_tiket}}</td>
                                    <td>{{$item->kategori->nama_kategori}}</td>
                                    <td>{{$item->jumlah_tiket}}</td>
                                    <td>{{$item->harga_tiket}},-</td>
                                    <td>
                                        <a href="{{url('admin/tiket/'. $item->id . '/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                                        {!! Form::open(['url' => 'admin/tiket/' . $item->id, 'id' => 'delete' ,'style' => 'display: inline-flex;']) !!}
                                        {!! Form::hidden('_method', 'DELETE') !!}
                                        {!! Form::submit('Hapus', ['class' => 'btn btn-danger btn-sm']) !!}
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('datatables')
<script src="{{ asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@endpush
@push('customdatatables')
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
@endpush
@push('confirm')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
@endpush

@push('customconfirm')
<script>
    $('#delete').on('submit', function(e) {
        var form = this;
        e.preventDefault();
        swal({
                title: "Apakah Anda Yakin?",
                text: "Setelah Di Hapus, Maka Akan Terhapus Permanen",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    // swal("Poof! Your imaginary file has been deleted!", {
                    //     icon: "success",
                    // });
                    return form.submit();
                } else {
                    //swal("Your imaginary file is safe!");
                }
            });
    });
</script>
@endpush