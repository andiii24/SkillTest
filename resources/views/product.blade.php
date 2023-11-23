<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="font-sans bg-gray-100">
    <nav class="bg-gray-900 text-white py-4">
        <div class="container mx-auto flex justify-between items-center">
            <a href="#" class="text-2xl font-bold">Ecommerce</a>
            <ul class="flex space-x-4">
                <li><a href="{{ url('/') }}" class="hover:text-gray-300">Home</a></li>
                <li><a href="{{ url('categories') }}" class="hover:text-gray-300">Categories</a></li>
                <li><a href="{{ url('products') }}" class="hover:text-gray-300">Products</a></li>
            </ul>
        </div>
    </nav>
    <div class="max-w-4xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-md rounded-lg overflow-hidden">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class="p-6">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="w-full h-auto">
                </div>
                <div class="p-6">
                    <h1 class="text-2xl font-semibold mb-4">{{ $product->name }}</h1>
                    <p class="text-gray-700 mb-4">{{ $product->small_description }}</p>
                    <p class="text-gray-900 text-3xl font-bold mb-4">${{ $product->selling_price }}</p>
                    <p class="text-gray-700 mb-4">Original Price: <s>${{ $product->original_price }}</s></p>
                    <p class="text-gray-700 mb-4">Available Quantity: {{ $product->qty }}</p>
                    <p class="text-gray-700 mb-4">Status: {{ $product->status }}</p>
                    <p class="text-gray-700 mb-4">Trending: {{ $product->trending }}</p>
                    <div class="mt-6">
                        <button class="bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none">Add to Cart</button>
                    </div>
                </div>
            </div>
            <div class="p-6">
                <h2 class="text-xl font-semibold mb-4">Product Description</h2>
                <p class="text-gray-700">{{ $product->description }}</p>
            </div>
        </div>
    </div>
</body>

</html>
