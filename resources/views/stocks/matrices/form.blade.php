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

            @component('component.input', ['label' => _t('Title'),'sms' => ''])
            {!! Form::text('title',$title,['class'=>"form-control", 'placeholder'=>"Title here.."]) !!}
            @endcomponent

            @component('component.input', ['label' => _t('Description'),'sms' => ''])
            {!! Form::text('description',$description,['class'=>"form-control", 'placeholder'=>"Description here..."]) !!}
            @endcomponent

            <div class="form-group form-md-line-input option">
                <label class="col-md-3 control-label">{{_t('Matrices Detail')}}</label>
                <div class="col-md-9">
                    <div class="input-group input-group-sm">
                        <span class="input-group-btn btn-left">
                            {{--<button class="btn red-intense" type="button">Delete</button>--}}
                        </span>
                        <div class="input-group-control">
                            <input type="text" class="form-control input-sm" placeholder="">
                            <span class="help-block"></span>
                            <div class="form-control-focus"> </div>
                        </div>
                        <span class="input-group-btn btn-right">
                            <button class="btn green-haze add-new" type="button">{{_t('Add')}}</button>
                        </span>
                    </div>
                </div>
            </div>


            @component('component.input', ['label' => _t('Status'),'sms' => ''])
            {!! Form::select('status', status(), $status,['class'=>"form-control"]) !!}
            @endcomponent

        </div>
    </div>
    @component('component.form-actions')
        <div class="row">
            <div class="col-md-offset-2 col-md-10">
                {{--<button type="button" class="btn default">{{ _t('Back') }}</button>--}}
                <a class="btn btn-danger" href="javascript:window.history.go(-1);">Back</a>
                <button type="submit" name="submit" value="0" class="btn blue">{{ _t('Save') }}</button>
                <button type="submit" name="submit" value="1" class="btn blue">{{ _t('Save Next') }}</button>
            </div>
        </div>
    @endcomponent

    @endcomponent
@endsection

@section('script')
    @parent
    <script type="text/javascript">
        $(function () {
            var html = '<div>' +
                            '<label class="col-md-3 control-label"></label>' +
                            '<div class="col-md-9">' +
                                '<div class="input-group input-group-sm">' +
                                    '<span class="input-group-btn btn-left">' +
                                        '<button class="btn red-intense del" type="button">{{_t('Delete')}}</button>' +
                                    '</span>' +
                                    '<div class="input-group-control">' +
                                        '<input type="text" class="form-control input-sm" placeholder="">' +
                                        '<span class="help-block"></span>' +
                                        '<div class="form-control-focus"> </div>' +
                                    '</div>' +
                                    '<span class="input-group-btn btn-right">' +
                                        '<button class="btn green-haze add-new" type="button">{{_t('Add')}}</button>' +
                                    '</span>' +
                                '</div>' +
                            '</div>'+
                        '</div>';


            $('body').delegate('.add-new','click',function (e) {
                e.preventDefault();
                $('.option').append(html);
            });

            $('body').delegate('.del','click',function (e) {
                e.preventDefault();
                $(this).parent().parent().parent().parent().remove();

            });
        });
    </script>

@endsection