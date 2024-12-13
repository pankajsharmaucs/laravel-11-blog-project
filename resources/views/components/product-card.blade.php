<div class="product-card border p-4 rounded-lg shadow-md   ">
    <img src="{{ $product->image }}" alt="{{ $product->title }}" class="product-image w-full h-48 object-cover rounded-t-lg">
    <div class="product-details p-3">
        <h3 class="product-title text-lg font-semibold text-gray-800">{{ $product->title }}</h3>
        <p class="product-price text-xl font-bold text-green-600">{{ $product->price }} </p>
    </div>
</div>
