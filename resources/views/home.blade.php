@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{ _t('Dashboard') }}</div>

                    <div class="panel-body">
                        {{ _t('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>


    <form action="" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}

        <input type="file" name="image_url">

    </form>
@endsection
