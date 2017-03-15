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

@section('script')
    @parent
    <script type="text/javascript">
        var current_url = '{{ url()->current() }}';

        $(function () {
            $('body').delegate('.vm-del', 'click', function (e) {
                e.preventDefault();
                var tr = $(this).parent().parent().parent();
                var id = $(this).data('id') - 0;
                var href = $(this).data('href');
                swal({
                        title: "{{ _t('Are you sure?') }}",
                        text: "{{ _t('You will not be able to recover this data!') }}",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function () {
                        $.ajax({
                            url: href,
//                            async: false,
                            data: {id: id},
                            error: function () {
                                swal({
                                    title: "{{ _t('error') }}",
                                    text: "{{ _t('An error has occurred!') }}",
                                    type: "warning",
                                    confirmButtonColor: "#DD6B55",
                                    confirmButtonText: "Close",
                                    closeOnConfirm: false
                                });
                            },
                            dataType: 'json',
                            success: function (data) {
//                                console.log(data);// affected
                                if (data.affected - 0 > 0) {
                                    tr.remove();
                                    swal("Deleted!", "{{ _t('Your imaginary file has been deleted') }}", "success");
                                } else {
                                    swal({
                                        title: "{{ _t('error') }}",
                                        text: "{{ _t('An error has occurred!') }}",
                                        type: "warning",
                                        confirmButtonColor: "#DD6B55",
                                        confirmButtonText: "Close",
                                        closeOnConfirm: false
                                    });
                                }
                            },
                            type: 'POST'
                        });


                    });
            });

        });

        //
        //        function go_search() {
        //            var url_param = current_url + '?' ;
        //            $('.head-search-th').each(function () {
        //                var input = $(this).parent().parent().find('input');
        //                var n = input.data('name');
        //                var v = input.val();
        //
        //                if($.trim(v) != '')  url_param += '&'+n+'='+encodeURIComponent($.trim(v));
        //
        //            });
        //
        //            location.href = url_param;
        //        }
    </script>
@endsection