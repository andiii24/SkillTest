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
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Products</h1>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mt-3">
            <div class="col-span-2 md:col-span-4">
                @if($products)
                    @foreach ($products as $item)
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        <a href="{{ url("product/".$item->id) }}" class="bg-white rounded-lg shadow-md overflow-hidden transition duration-300 hover:shadow-xl">
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Product Image" class="w-full h-48 object-cover">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold mb-2">{{ $item->name }}</h3>
                                <p class="text-gray-700">{{ $item->small_description }}</p>
                                <p class="mt-2 font-bold"><s>{{ $item->original_price }} Br</s></p>
                                <p class="font-bold">{{ $item->selling_price }} Br</p>
                                <a href="{{ url("product/".$item->id) }}" class="mt-4 inline-block bg-gray-800 text-white px-4 py-2 rounded-lg hover:bg-gray-700 focus:outline-none">View Details</a>
                            </div>
                        </a>
                    </div>
                    @endforeach

                @else
                    <h1 class="text-3xl font-bold mb-6">No product yet</h1>
                @endif
            </div>
        </div>
    </div>
</body>

</html>
