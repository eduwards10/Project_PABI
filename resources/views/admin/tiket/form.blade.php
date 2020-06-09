@extends('admin.layout')
@section('content')
@php
$formTitle = !empty($item) ? 'Edit' : 'Tambah'
@endphp
<!-- page content -->
<div class="page-title">
    <div class="title_left">
        <h3>{{$formTitle}} Data</h3>
    </div>
</div>
<div class="clearfix"></div>

<div class="row">
    <div class="col-md-12 col-sm-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>{{$formTitle}} Tiket</h2>
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
                @include('admin.partials.flash', ['$errors' => $errors])
                @if(!empty($item))
                {!! Form::model($item, ['url'=>['admin/tiket', $item->id], 'method' => 'PUT']) !!}
                {!! Form::hidden('id') !!}
                @else
                {!! Form::open(['url' => 'admin/tiket']) !!}
                @endif
                <div class="field item form-group">
                    {!! Form::label('nama_tiket', 'Nama Tiket') !!}
                    {!! Form::text('nama_tiket', null, ['class' => 'form-control']) !!}
                </div>
                <div class="field item form-group">
                    {!! Form::label('harga_tiket', 'Harga Tiket') !!}
                    {!! Form::text('harga_tiket', null, ['class' => 'form-control uang', 'id' => 'rupiah']) !!}
                </div>
                <div class="field item form-group">
                    {!! Form::label('id_kategori', 'Nama Kategori') !!}
                    {!! Form::select('id_kategori', \App\Models\Kategori::pluck('nama_kategori', 'id'), null, ['class' => 'form-control']) !!}
                </div>
                <div class="field item form-group">
                    {!! Form::label('jumlah_tiket', 'Jumlah Tiket') !!}
                    {!! Form::number('jumlah_tiket', null, ['class' => 'form-control']) !!}
                </div>
                <div class="ln_solid">
                    <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                            <button type='submit' class="btn btn-primary">Submit</button>
                            <a href="{{route('tiket.index')}}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection