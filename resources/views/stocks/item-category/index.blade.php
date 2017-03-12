@extends('layouts.admin-list')

@section('title',_t('Item Category'))


@section('content')
    <!-- BEGIN SAMPLE TABLE PORTLET-->
    <div class="portlet box blue">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-cogs"></i>Bordered Bootstrap 3.0 Responsive Table </div>
            <div class="tools">
                <a href="javascript:;" class="collapse"> </a>
                <a href="#portlet-config" data-toggle="modal" class="config"> </a>
                <a href="javascript:;" class="reload"> </a>
                <a href="javascript:;" class="remove"> </a>
            </div>
        </div>
        <div class="portlet-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th> # </th>
                        <th > Table cell
                            {!! get_title_search('title',$title='') !!}
                        </th>
                        <th > Table cell
                            {!! get_title_search('title',$title='') !!}
                        </th>
                        <th > Table cell
                            {!! get_title_search('title',$title='') !!}
                        </th>
                        <th > Table cell
                            {!! get_title_search('title',$title='') !!}
                        </th>
                        <th > Table cell
                            {!! get_title_search('title',$title='') !!}
                        </th>
                        <th > Table cell
                            {!! get_title_search('title',$title='') !!}
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> 1 </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                    </tr>
                    <tr>
                        <td> 2 </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                    </tr>
                    <tr>
                        <td> 3 </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                        <td> Table cell </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- END SAMPLE TABLE PORTLET-->
@endsection

@section('script')
    @parent

@endsection

