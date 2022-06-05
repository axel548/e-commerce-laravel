@extends('template')

@section('content')
    {{-- 'Clothes', 'Electronics', 'Furniture', 'Shoes', 'Others' --}}
    {{-- @include('partials.carousel') --}}
    <div class="bg-gray-50 rounded-lg py-5 px-6 mb-4 text-base text-gray-500 mb-3" role="alert">
        <div class="flex items-center justify-center">
            <div class="flex items-center justify-center">
                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="toolbar">
                    <button type="button"
                        class="rounded-l inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase hover:bg-amber-700 focus:bg-amber-700 focus:outline-none focus:ring-0 active:bg-amber-800 transition duration-150 ease-in-out">All</button>
                    <button type="button"
                        class=" inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase hover:bg-amber-700 focus:bg-amber-700 focus:outline-none focus:ring-0 active:bg-amber-800 transition duration-150 ease-in-out">Clothes</button>
                    <button type="button"
                        class=" inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase hover:bg-amber-700 focus:bg-amber-700 focus:outline-none focus:ring-0 active:bg-amber-800 transition duration-150 ease-in-out">Electronics</button>
                    <button type="button"
                        class=" inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase hover:bg-amber-700 focus:bg-amber-700 focus:outline-none focus:ring-0 active:bg-amber-800 transition duration-150 ease-in-out">Furniture</button>
                    <button type="button"
                        class=" inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase hover:bg-amber-700 focus:bg-amber-700 focus:outline-none focus:ring-0 active:bg-amber-800 transition duration-150 ease-in-out">Shoes</button>
                    <button type="button"
                        class=" rounded-r inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase hover:bg-amber-700 focus:bg-amber-700 focus:outline-none focus:ring-0 active:bg-amber-800 transition duration-150 ease-in-out">Others</button>
                </div>
            </div>
        </div>
    </div>


    <div class="grid grid-cols-3 gap-4 mb-4">
        @foreach ($products as $product)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src=" {{ $product->image }} " alt="product_image">
                <div class="px-6 py-4">
                    <div class="font-bold text-xl mb-2">{{ $product->name }}</div>
                    <p class="text-gray-700 text-base">
                        {{ $product->description }}
                    </p>
                </div>
                <div class="px-6 pt-4 pb-2">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $product->category }}</span>
                </div>
                <div class="px-6 pt-4 pb-2 mb-3">
                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                        href=" {{ route('products.ver', ['id' => $product->id]) }} ">Ver</a>
                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                        href="#">Comprar</a>

                </div>
            </div>
        @endforeach
    </div>
    <p class="mt-3">
        {{ $products->links() }}
    </p>
@endsection
