@extends('layouts.admin')

@section('css')
    @parent
    {{--fileupload--}}
    <link href="{{ $base_url }}assets/global/plugins/fancybox/source/jquery.fancybox.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{ $base_url }}assets/global/plugins/jquery-file-upload/blueimp-gallery/blueimp-gallery.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="{{ $base_url }}assets/global/plugins/jquery-file-upload/css/jquery.fileupload.css" rel="stylesheet"
          type="text/css"/>
    <link href="{{ $base_url }}assets/global/plugins/jquery-file-upload/css/jquery.fileupload-ui.css" rel="stylesheet"
          type="text/css"/>
    {{--end fileupload--}}
{{--    --}}{{--select2--}}{{--
    <link rel="stylesheet" type="text/css" href="{{ $base_url }}assets/global/plugins/select2/select2.min.css" />
    --}}{{--end select2--}}
@endsection

@section('js')
    @parent
    {{--fileupload--}}
    <script src="{{ $base_url }}assets/global/plugins/fancybox/source/jquery.fancybox.pack.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/vendor/tmpl.min.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/vendor/load-image.min.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/vendor/canvas-to-blob.min.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/blueimp-gallery/jquery.blueimp-gallery.min.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/jquery.iframe-transport.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/jquery.fileupload.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/jquery.fileupload-process.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/jquery.fileupload-image.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/jquery.fileupload-video.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"
            type="text/javascript"></script>
    <script src="{{ $base_url }}assets/global/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"
            type="text/javascript"></script>
    {{-- end fileupload--}}
{{--    --}}{{--validation--}}{{--
    <script type="text/javascript" src="{{ $base_url }}assets/global/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
    --}}{{--end validation--}}
{{--    --}}{{--select2--}}{{--
    <script type="text/javascript" src="{{ $base_url }}assets/global/plugins/select2/select2.min.js"></script>
    --}}{{--end select2--}}
@endsection