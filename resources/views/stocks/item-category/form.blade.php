@php

    $id = isset($result->id)?$result->id:0;
    $parent = isset($result->parent)?$result->parent:0;
    $title = isset($result->parent)?$result->parent:0;
    $matrix_id = isset($result->matrix_id)?$result->matrix_id:0;
    $title = isset($result->title)?$result->title:'';
    $description = isset($result->description)?$result->description:'';
    $item_type_id = isset($result->item_type_id)?$result->item_type_id:0;
    $units_measure_id = isset($result->units_measure_id)?$result->units_measure_id:0;
    $exclude_sales = isset($result->exclude_sales)?$result->exclude_sales:0;
    $exclude_purchases = isset($result->exclude_purchases)?$result->exclude_purchases:0;
    $sales_account_id = isset($result->sales_account_id)?$result->sales_account_id:0;
    $inventory_account_id = isset($result->inventory_account_id)?$result->inventory_account_id:0;
    $c_o_g_s_account_id = isset($result->c_o_g_s_account_id)?$result->c_o_g_s_account_id:0;
    $inventory_adjustments_account_id = isset($result->inventory_adjustments_account_id)?$result->inventory_adjustments_account_id:0;
    $item_assembly_costs_account_id = isset($result->item_assembly_costs_account_id)?$result->item_assembly_costs_account_id:0;
    $options = isset($result->options)?$result->options:[];
    $status = isset($result->status)?$result->status:1;
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
            @component('component.input', ['label' => 'Parent','sms' => ''])
            {!! Form::select('parent', Glb::status(), $parent,['class'=>"form-control"]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Matrix','sms' => ''])
            {!! Form::select('matrix_id', Glb::status(), $matrix_id,['class'=>"form-control"]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Title','sms' => ''])
            {!! Form::text('title',$title,['class'=>"form-control", 'placeholder'=>"Title here.."]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Description','sms' => ''])
            {!! Form::textarea('description',$description,['class'=>"form-control", 'placeholder'=>"Description here..."]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Item Type','sms' => ''])
            {!! Form::select('item_type_id', Glb::status(), $item_type_id,['class'=>"form-control"]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Units of Measure','sms' => ''])
            {!! Form::select('units_measure_id', Glb::status(), $units_measure_id,['class'=>"form-control"]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Exclude from sales','sms' => ''])
            <div class="md-checkbox">
                <input type="checkbox" id="checkbox1" class="md-check" name="exclude_sales" {{$exclude_sales==1?'checked':''}}>
                <label for="checkbox1">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span>
                </label>
            </div>
            @endcomponent

            @component('component.input', ['label' => 'Exclude from Purchases','sms' => ''])
            <div class="md-checkbox">
                <input type="checkbox" id="checkbox2" class="md-check" name="exclude_purchases" {{$exclude_purchases==1?'checked':''}}>
                <label for="checkbox2">
                    <span class="inc"></span>
                    <span class="check"></span>
                    <span class="box"></span>
                </label>
            </div>
            @endcomponent

            @component('component.input', ['label' => 'Sales Account','sms' => ''])
            {!! Form::select('sales_account_id', Glb::status(), $sales_account_id,['class'=>"form-control"]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Inventory Account','sms' => ''])
            {!! Form::select('inventory_account_id', Glb::status(), $inventory_account_id,['class'=>"form-control"]) !!}
            @endcomponent

            @component('component.input', ['label' => 'C.O.G.S. Account','sms' => ''])
            {!! Form::select('c_o_g_s_account_id', Glb::status(), $c_o_g_s_account_id,['class'=>"form-control"]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Inventory Adjustments Account','sms' => ''])
            {!! Form::select('inventory_adjustments_account_id', Glb::status(), $inventory_adjustments_account_id,['class'=>"form-control"]) !!}
            @endcomponent

            @component('component.input', ['label' => 'Status','sms' => ''])
            {!! Form::select('status', Glb::status(), null,['class'=>"form-control"]) !!}
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