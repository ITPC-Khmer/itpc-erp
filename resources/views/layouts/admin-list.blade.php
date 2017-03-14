@extends('layouts.admin')

@section('css')
    @parent
    <style>
        .form-group.form-md-line-input{
            margin: 0 !important;
            /*margin-top: 0px;*/
            /*margin-right: 0px;*/
            /*margin-bottom: 0px;*/
            /*margin-left: 0px;*/
            padding-top: 0px !important;
        }
    </style>

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ $base_url }}assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
@endsection

@section('js')
    @parent
    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ $base_url }}assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{ $base_url }}assets/pages/scripts/ui-sweetalert.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
@endsection