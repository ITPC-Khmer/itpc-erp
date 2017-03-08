@extends('layouts.admin-form')

@section('title',_t('Home'))

@section('content')

    @component('component.form',['option' => ['url' => 'xx'],'title' => 'Form Test'])

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
    <button type="submit" class="btn green">Submit</button>
    <button type="button" class="btn default">Cancel</button>
    @endcomponent

    @endcomponent


@endsection

