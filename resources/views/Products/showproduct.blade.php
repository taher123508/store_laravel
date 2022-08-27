@section('title')
Product
@stop
@extends('layouts.master')
@section('css')
    <!-- Internal Nice-select css  -->
    <link href="{{URL::asset('assets/plugins/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet"/>
@endsection
@section('page-header')
				<!-- breadcrumb -->

                <nav >

                    <div class="dropdown mt-1 mb-1  mr-8 border-l-pink-400">
                        <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-info"
                                data-toggle="dropdown" type="button">Category<i class="fas fa-caret-down ml-1"></i></button>
                        <div class="dropdown-menu tx-13 mr-5 ">
@foreach($categorys as $category)
                            <a class="btn btn-outline-info mb-1 mr-5" href=" showcat/{{$category->id}}">{{$category->name}}</a>
                                <br>
                            @endforeach
                        </div>
                    </div>


                    <h4 class="content-title  mb-5  mt-4 text-center text-primary bold  pink">Product</h4>
                </nav>



				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->


                    <div class="row  ">

                            @foreach( $products as $product)
                            <div class="card mt-2  m-auto col-md-  " >
                                <div class="card-body">
                                    <div class="pro-img-box  ">
                                        <div class="d-flex product-sale">
                                            <div class="badge bg-pink">New</div>
                                            <i class="mdi mdi-heart-outline ml-auto wishlist"></i>
                                        </div>

                                        <img class="w-100" src="{{URL::asset('assets/img/ecommerce/02.jpg')}}" alt="product-image">

                                        <a href="#" class="adtocart"> <i class="las  " ><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg> </i>
                                        </a>
                                    </div>

                                        <div class="text-center pt-3 mt-2 col-lg-auto">


                                            <a class="h5 mb-0 mt-2 text-center font-weight-bold text-danger ">{{$product->name}}</a>
                                            <br>
                                            <hr>

                                            <a class="h5 mb-0 mt-2 text-center font-weight-bold text-black" href="#"><span >Price:</span> {{$product->price}}</a>




                                            <br>
                                            <hr>
                                            <span class="tx-15 ml-auto">
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star text-warning"></i>
												<i class="ion ion-md-star-half text-warning"></i>
												<i class="ion ion-md-star-outline text-warning"></i>
											</span>
                                            <h4 class="h5 mb-0 mt-2 text-center font-weight-bold text-danger">{{$product->id}}</h4>
                                        </div>

                                </div>



                            </div>
                            @endforeach
                        <br>
                    </div>

@endsection
@section('js')
    <!-- Internal Nice-select js-->
    <script src="{{URL::asset('assets/plugins/jquery-nice-select/js/jquery.nice-select.js')}}"></script>
    <script src="{{URL::asset('assets/plugins/jquery-nice-select/js/nice-select.js')}}"></script>
@endsection
