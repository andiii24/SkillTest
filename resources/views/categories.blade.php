<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>
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
        <h1 class="text-3xl font-bold mb-6">Categories</h1>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
            @foreach ($categories as $item)
                <a href="{{ url("category/".$item->id) }}" class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition duration-300">
                    <div class="relative">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Category Image" class="w-full h-60 object-cover">
                        <div class="absolute inset-0 bg-black opacity-50 transition duration-300 hover:opacity-0"></div>
                        <div class="absolute inset-0 flex items-center justify-center">
                            <h3 class="text-white text-2xl font-semibold">{{ $item->name }}</h3>
                        </div>
                    </div>
                    <div class="p-4">
                        <button class="bg-gray-800 text-white px-4 py-2 rounded-lg w-full hover:bg-gray-700 focus:outline-none">Show Details</button>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
