@section('title')
    add_user
@stop

@extends('layouts.master')
@section('css')
    <!-- Internal Select2 css -->
    <link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">user</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Add </span>
            </div>
        </div>

    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <div class="col-lg-6 col-xl-6 col-md-12 col-sm-12">
        <div class="card  box-shadow-0">
            <div class="card-header">
                <h4 class="card-title mb-1">Add a user</h4>
                <p class="mb-2"></p>
            </div>
            <div class="card-body pt-0">
                <form class="form-horizontal" method="post" action="{{route('addusers.store')}}" >
                    @csrf
                    <div class="form-group">
                        <label  for="name_html">Name User<span class="text-danger">*</span></label>
                        <input name="name" type="text" class="form-control" id="name_html" placeholder="Name">
                        @error('name')
                        <p>{{$message}}</p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label  for="des_html">email<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" id="des_html" required placeholder="exap@test.com">

                        <label  for="des_html">password<span class="text-danger">*</span></label>
                        <input type="password" name="password" class="form-control" id="des_html" required placeholder="exap@test.com">



                        <div class="form-group mb-0 justify-content-end">
                            <div class="checkbox">
                                <div class="custom-checkbox custom-control">
                                    <input type="checkbox" required data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                    <label for="checkbox-2" class="custom-control-label mt-1">Check me Out</label>
                                </div>
                            </div>
                        </div>
                        @error('email')
                        <p>{{$message}}</p>
                        @enderror
                        <div class="form-group mb-0 mt-3 justify-content-end">
                            <div>
                                <button type="submit" class="btn btn-primary">
                                    <a href="{{ url('/' . $page='index') }}  "class="text-decoration-none text-black-50 bold item-card" >
                                        Save
                                    </a>
                                </button>
                                <button type="submit" class="btn btn-secondary">
                                    <a href="{{ url('/../' . $page='dashboard') }}  "class="text-decoration-none text-black-50 bold item-card" >
                                        Cancel
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{URL::asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('assets/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
@endsection
