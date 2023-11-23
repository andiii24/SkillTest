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
        <h1 class="text-3xl font-bold mb-6">{{ $category->name }}</h1>
        <div class="grid grid-cols-4 md:grid-cols-3 gap-4">
            @if($category)
                @foreach ($products as $item)
                    <a href="#" class="bg-white rounded-lg shadow-md p-4 flex items-center justify-center transition duration-300 hover:bg-gray-200">
                        <div>
                            <img src="{{ asset('storage/' . $item->image) }}" alt="Product Image" class="w-full h-48 object-cover">
                            <span class="text-lg text-center font-semibold">{{ $item->name }}</span>
                        </div>
                    </a>
                @endforeach
            @else
                <h1 class="text-3xl font-bold mb-6">No Product registered with in this Category</h1>
            @endif
        </div>
    </div>
</body>

</html>
