<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .product-card{
            width: 200px;
        }
    </style>
</head>

<body style="padding:0px;margin:0px;">

    <div class="bg-[#236edf]">
        <h1 class="text-2xl font-bold text-white p-4">Kreditaid Production</h1>
    </div>

    <div class="flex justify-center flex-wrap my-3 gap-4">
        @foreach ($products as $product)
            {{-- <x-product-card :product="$product" /> --}}
        @endforeach
    </div>

</body>

</html>
