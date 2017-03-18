@extends('layouts.admin-form')

@section('title',_t('Home'))

@section('breadcrumb')
    <div class="page-bar">
        <ul class="page-breadcrumb">
            <li>
                <a href="">Home</a>
                <i class="fa fa-circle"></i>
            </li>
            <li>
                <span>Test</span>
            </li>
        </ul>
    </div>
@endsection

@section('content')

    @component('component.form',['option' => ['url' => 'sales/inv','id'=>'fileupload'],'title' => 'Form Test'])

    <div class="form-body">
        <h3 class="form-section">Person Info</h3>
        <div class="row">
            <div class="col-md-6">
                @component('component.input', ['label' => 'Title','sms' => ''])
                {!! Form::text('xxx',null,['class'=>"form-control", 'placeholder'=>"Chee Kin"]) !!}
                @endcomponent
            </div>
            <!--/span-->
            <div class="col-md-6">
                @component('component.input', ['label' => 'Title','sms' => ''])
                <select name="foo" class="form-control"></select>
                @endcomponent
            </div>
            <!--/span-->
        </div>
        <!--/row-->
        <div class="row">
            <div class="col-md-6">
                @component('component.input', ['label' => 'Title','sms' => ''])
                {!! Form::text('xxx',null,['class'=>"form-control", 'placeholder'=>"Chee Kin"]) !!}
                @endcomponent
            </div>
            <!--/span-->
            <div class="col-md-6">
                @component('component.input', ['label' => 'Title','sms' => ''])
                {!! Form::text('xxx',null,['class'=>"form-control", 'placeholder'=>"Chee Kin"]) !!}
                @endcomponent
            </div>
            <!--/span-->
        </div>
    </div>
    @component('component.form-actions')
    <div class="fileupload-buttonbar">
        <span class="btn green fileinput-button">
                    <i class="fa fa-plus"></i><span> {{ _t('Add files') }}... </span>
                    <input type="file" name="files[]" multiple="multiple">
        </span>
        <button type="button" class="btn blue start">
            <i class="fa fa-upload"></i>
            <span> {{ _t('Start upload') }} </span>
        </button>
        <button type="submit" class="btn blue">
            <i class="fa fa-save"></i>
            <span> {{ _t('Save') }} </span>
        </button>

        <!-- The global file processing state -->
        <span class="fileupload-process"> </span>
    </div>
    @endcomponent

    {{--use for upload file--}}
    @include('component.fileupload')

    @endcomponent

@endsection


@section('script')
    {{--use for upload file--}}
    <script src="{{ $base_url }}assets/pages/scripts/form-fileupload.js" type="text/javascript"></script>



@endsection
