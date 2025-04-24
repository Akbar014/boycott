
@extends('user.master')
@section('title') Product @endsection
@section('product') active @endsection
@section('content')


<div class="sl-mainpanel">
    <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="{{ route('user.home') }}">Boycott </a>
        <a class="breadcrumb-item" href="{{ url('/product') }}">Product</a>
        <!-- <a class="breadcrumb-item" href="{{ url('/projects') }}">All Projects</a> -->
        <span class="breadcrumb-item active">Product Details</span>


    </nav>

   
        <div class="sl-pagebody col-md-12">

            <a href="" class="btn btn-info pd-x-20" data-toggle="modal" data-target="#modaldemo3">Add New Product</a>
            <div class="card pd-20 pd-sm-40 mt-2">
                @if(Session::get('message'))
                <p class="text-success pl-1">{{ Session::get('message') }}</p>
                @endif
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <table id="products-table" class="table table-bordered responsive">
                    <thead>
                        <tr>
                            <th>Product name</th>
                            <!-- <th>Product category </th>
                            <th>Product category </th> -->
                            <th>Image</th>
                            <th>Description </th>
                            <th>Action</th>
                        </tr>
                    </thead>

                </table>

            </div>
        </div>
        

        <!-- modal -->
    </div><!-- sl-pagebody -->
</div>


@push('scripts')



@endpush

@endsection