@extends('layouts.admin')

@section('title','Home')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <!-- BEGIN SAMPLE FORM PORTLET-->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-green-haze">
                        <i class="icon-settings font-green-haze"></i>
                        <span class="caption-subject bold uppercase"> Form Layouts</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default fullscreen" href="javascript:"
                           data-original-title="" title=""> </a>
                    </div>
                </div>
                <div class="portlet-body" style="height: auto;">


                    <form class="form-horizontal margin-bottom-40" role="form">
                        <h4>Horizontal Form</h4>
                        <div class="form-group form-md-line-input">
                            <label for="inputEmail1" class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="form_control_1" placeholder="Email">
                                <div class="form-control-focus"></div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label for="inputPassword12" class="col-md-2 control-label">Password</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="form_control_1" placeholder="Password">
                                <div class="form-control-focus"></div>
                            </div>
                        </div>
                        <h4>Horizontal Form</h4>
                        <div class="form-group form-md-line-input">
                            <label for="inputEmail1" class="col-md-2 control-label">Email</label>
                            <div class="col-md-10">
                                <input type="email" class="form-control" id="form_control_1" placeholder="Email">
                                <div class="form-control-focus"></div>
                            </div>
                        </div>
                        <div class="form-group form-md-line-input">
                            <label for="inputPassword12" class="col-md-2 control-label">Password</label>
                            <div class="col-md-4">
                                <input type="password" class="form-control" id="form_control_1" placeholder="Password">
                                <div class="form-control-focus"></div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-offset-2 col-md-10">
                                <button type="button" class="btn blue">Sign in</button>
                            </div>
                        </div>
                    </form>


                </div>
            </div>
        </div>
        <!-- END SAMPLE FORM PORTLET-->
    </div>

@endsection

