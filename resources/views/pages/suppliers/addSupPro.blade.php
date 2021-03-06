@extends('../../layouts.app')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            الموردين
            <small>عرض مورد</small>
            <small>اضف منتج</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li><a href="{{url('/suppliers')}}">الموردين</a></li>
            <li><a href="{{url('/sup_product/'.$id)}}">عرض مورد</a></li>
            <li class="active">اضف منتج</li>
        </ol>
    </section>
    <br><br>
    <div class="box box-primary">
        <div class="box-body">
            @if (Session::has('message'))
                <div class="alert alert-info">{{ Session::get('message') }}</div>
            @endif
            <div>@include('errors.list')</div>
            {!! Form::open(['route' => ['add_sup_pro.store'], 'method' => 'post', 'files' => true]) !!}
            <div class="row">
                <input type="hidden" name="supplier_id" value="{{$id}}">
                <div class="col-xs-12 col-sm-6 col-lg-6">
                    <div class="form-group">
                        <label>الاسم</label>
                        <input class="form-control" type="text" name="name" >
                    </div>
                </div>
                {{--<div class="col=xs-12 col-sm-6 col-lg-6">--}}
                    {{--<div class="form-group">--}}
                        {{--<div class="dropdown pull-left">--}}
                            {{--<button class="btn btn-primary dropdown-toggle " type="button" data-toggle="dropdown">قائمة التصنيفات--}}
                                {{--<span class="caret"></span></button>--}}
                            {{--<ul class="dropdown-menu">--}}
                                {{--@foreach($cat as $ca)--}}
                                    {{--<li value="{{$ca->id}}">{{$ca->category}}</li>--}}
                                {{--@endforeach--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}

                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <div class="form-group">
                        <label>الوصف</label>
                        <textarea name="desc" class="form-control"></textarea>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="form-group">
                        <label>الصورة</label>
                        <input class="form-control" type="file" name="img">
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="form-group">
                        <label>الوحدة</label>
                        <input class="form-control" type="text" name="unit" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="form-group">
                        <label>سعر التكلفة</label>
                        <input class="form-control" type="text" name="cost_price" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="form-group">
                        <label>سعر الشراء</label>
                        <input class="form-control" type="text" name="buy_price" >
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="form-group">
                        <label>الباركود</label>
                        <input class="form-control" type="text" name="parcode" >
                    </div>
                </div>
            </div>

            <input type="submit" class="btn btn-success pull-left" value="اضافة منتج">

            {!! Form::close() !!}


        </div>
    </div>
@stop