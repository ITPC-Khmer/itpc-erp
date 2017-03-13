@extends('layouts.admin-form')

@section('title',_t('Matrices Form'))

@section('content')

    @component('component.form',['option' => ['url' => '/stocks/matrices-form','id'=>'fileupload'],'title' => 'Form Test'])

    <div class="form-body">
        <h3 class="form-section">Person Info</h3>
        <div class="row">
            @component('component.input', ['label' => 'Title','sms' => ''])
            {!! Form::text('title',null,['class'=>"form-control", 'placeholder'=>"Title here.."]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Description','sms' => ''])
            {!! Form::textarea('description',null,['class'=>"form-control", 'placeholder'=>"Description here..."]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Title','sms' => ''])
            {!! Form::bsMultipleSelect('status', Glb::status(),$status,'status') !!}
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