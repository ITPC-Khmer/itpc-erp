@extends('layouts.admin-list')

@section('title',_t('Matrices'))


@section('content')
    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-bell-o"></i>{{ _t('Matrices List') }} </div>
                    <div class="tools">
                        <a href="javascript:" class="collapse"> </a>
                        {{-- <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                         <a href="javascript:;" class="reload"> </a>
                         <a href="javascript:;" class="remove"> </a>--}}
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="table-scrollable table-responsive">
                        <table class="table table-striped table-bordered table-advance table-hover">
                            <thead>
                            <tr>
                                <th style="width: 160px;">  <a href="{{ url('/stocks/matrices-form') }}" class="btn btn-outline btn-circle btn-sm purple">
                                        <i class="fa fa-plus"></i> Add </a> </th>
                                <th> {{ _t('title') }}
                                    {!! get_title_search('title','') !!}
                                </th>
                                <th> {{ _t('description') }}
                                    {!! get_title_search('description','') !!}
                                </th>
                                <th> {{ _t('status') }}
                                    {!! Form::select('status', array_merge([''=>''],status()),null,['class'=>"form-control"]) !!}
                                </th>

                            </tr>
                            </thead>
                            <tbody>

                            @foreach ($result as $row)
                            <tr>
                                <td>
                                    {!! Form::open(['url' => "/stocks/matrices-form", 'method' => 'put']) !!}
                                    {!! Form::hidden('id',$row->id) !!}
                                    <button type="submit" class="btn btn-outline btn-circle btn-sm purple">
                                        <i class="fa fa-edit"></i> Edit </button>
                                    <a data-href="{{ url('/stocks/matrices-delete') }}" data-id="{{  $row->id }}" href="javascript:" class="btn btn-outline btn-circle dark btn-sm black vm-del">
                                        <i class="fa fa-trash-o"></i> Delete </a>
                                    {!! Form::close() !!}
                                </td>
                                <td class="highlight">
                                    <div class="success"></div>{{ nbs(2) }}
                                    <a href="javascript:"> {!! highlight($row->title,$title) !!} </a>
                                </td>
                                <td class="hidden-xs"> {!! highlight($row->description,$description) !!} </td>
                                {{--<td class="hidden-xs">{{ status()[$row->status] }}</td>--}}
                                <td class="hidden-xs">
                                    {!! Form::select('status',status(),$row->status,['class'=>"form-control"]) !!}
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- END SAMPLE TABLE PORTLET-->
        </div>
    </div>

    <div class="row">
        <div class="col-md-5">
            <div class="dataTables_info">
                @if($result->total() > 12)
                <span>{{ $result->firstItem() }} - {{ $result->lastItem() }} of {{ $result->total() }} (for page {{ $result->currentPage() }} )</span>
                @endif
            </div>
        </div>
        <div class="col-md-6" style="text-align: right;">
            <div class="dataTables_paginate paging_bootstrap_full_number">
                {{ $result->links() }}
            </div>
        </div>
    </div>
@endsection

@section('script')
    @parent

@endsection

