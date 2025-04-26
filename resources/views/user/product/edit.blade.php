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

        <!-- <a href="" class="btn btn-info pd-x-20" data-toggle="modal" data-target="#modaldemo3">Add New Product</a> -->


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

            {!! Form::model($product, ['id' => 'products-form', 'method' => 'PUT', 'enctype' => 'multipart/form-data', 'route' => ['user.product.update', $product->id]]) !!}
            <div class="modal-body pd-20" style="">
                <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Edit Product</a></h4>

                <div class="row">
                    <div class="col-md-6 form-group">
                        {!! Form::label('name', 'Product Name:') !!}
                        {!! Form::text('name', null, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : '')]) !!}
                        @if ($errors->has('name'))
                        <span class="invalid-feedback">{{ $errors->first('name') }}</span>
                        @endif
                    </div>

                    <?php
                    $d_categories = [
                        1 => 'Bangladeshi',
                        2 => 'Indian',
                        3 => 'Kadeyani',
                        4 => 'Israili'
                    ];
                    $p_categories = [
                        1 => 'Chockolate',
                        2 => 'Drinks & Water',
                        3 => 'Chips',
                        4 => 'Biscuit',
                        5 => 'Cosmetic',
                        6 => 'Soap & Detergent',
                        7 => 'Fragrance',
                        8 => 'Tea, Coffie & Milk',
                        9 => 'Baby Food',
                        10 => 'Daily needs',
                        11 => 'Restaurent & Electric',
                        12 => 'Others',
                    ];
                    ?>
                    <div class="col-md-6 form-group">
                        {!! Form::label('d_category', 'Select Type:') !!}
                        {!! Form::select('d_category', $d_categories, null, ['class' => 'form-control' . ($errors->has('d_category') ? ' is-invalid' : ''), 'placeholder' => 'Select Category']) !!}
                        @if ($errors->has('d_category'))
                        <span class="invalid-feedback">{{ $errors->first('d_category') }}</span>
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        {!! Form::label('image', 'Image:') !!}
                        {!! Form::file('image', ['class' => 'form-control']) !!}
                        @if ($product->image)
                        <p class="mt-2">Current Image: <img src="{{ asset('images/products/' . $product->image) }}" alt="Product Image" style="max-width: 100px; margin-top: 10px;"></p>
                        @endif
                        @if ($errors->has('image'))
                        @foreach ($errors->get('image') as $error)
                        <span class="invalid-feedback">{{ $error }}</span>
                        @endforeach
                        @endif
                    </div>

                    <div class="col-md-6 form-group">
                        {!! Form::label('p_category', 'Select Product Category:') !!}
                        {!! Form::select('p_category', $p_categories, null, ['class' => 'form-control' . ($errors->has('p_category') ? ' is-invalid' : ''), 'placeholder' => 'Select Category']) !!}
                        @if ($errors->has('p_category'))
                        <span class="invalid-feedback">{{ $errors->first('p_category') }}</span>
                        @endif
                    </div>

                    

                    <div class="col-md-6 form-group">
                        {!! Form::label('description', 'Description:') !!}
                        {!! Form::textarea('description', null, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : '')]) !!}
                        @if ($errors->has('description'))
                        @foreach ($errors->get('description') as $error)
                        <span class="invalid-feedback">{{ $error }}</span>
                        @endforeach
                        @endif
                    </div>

                    
                </div><!-- row -->
            </div><!-- modal-body -->
            <div class="modal-footer">
                <div class="form-group">
                    {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
                    <!-- <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button> -->
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>


    <!-- modal -->
</div><!-- sl-pagebody -->
</div>


@push('scripts')



@endpush

@endsection