@php

$id = isset($result->id)?$result->id:0;
$title = isset($result->title)?$result->title:'';
$description = isset($result->description)?$result->description:'';
$status = isset($result->status)?$result->status:'1';

@endphp
@extends('layouts.admin-form')

@section('title',_t('Matrices Form'))

@section('content')
    @component('component.form',['option' => ['url' => '/stocks/matrices-form','id'=>'fileupload'],'title' => 'Form Test'])
    {!! Form::hidden('id',$id) !!}

    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="form-body">
        <h3 class="form-section">Person Info</h3>
        <div class="row">
            @component('component.input', ['label' => 'Title','sms' => ''])
            {!! Form::text('title',$title,['class'=>"form-control", 'placeholder'=>"Title here.."]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Description','sms' => ''])
            {!! Form::textarea('description',$description,['class'=>"form-control", 'placeholder'=>"Description here..."]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Status','sms' => ''])
            {!! Form::select('status', Glb::status(), $status,['class'=>"form-control"]) !!}
            @endcomponent
        </div>
    </div>
    @component('component.form-actions')
        <div class="row">
            <div class="col-md-offset-2 col-md-10">
                {{--<button type="button" class="btn default">{{ _t('Back') }}</button>--}}
                <a class="btn btn-danger" href="javascript:window.history.go(-1);">Back</a>
                <button type="submit" class="btn blue">{{ _t('Submit') }}</button>
            </div>
        </div>
    @endcomponent

    @endcomponent
@endsection

@section('script')
    @parent

@endsection