@forelse($products as $product)
<div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mt-3">
    <div class="custom-block bg-white shadow-lg">
        <img src="{{ asset($product->image_path) }}" class="custom-block-image img-fluid" alt="{{ $product->name }}">
        <div class="d-flex">
            <div>
                <h6 class="mb-2 mt-2">{{ $product->name }}</h6>
                <p>{{ $product->description }}</p>
            </div>
           
        </div>
        <button class="btn btn-info text-white mt-2" onclick="doantioRequestDetail({{ $product->id }})">
            View Details
        </button>
    </div>
</div>
@empty
<div class="col-12 text-center">
    <p>No products found in this category</p>
</div>
@endforelse