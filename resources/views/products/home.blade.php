@extends('template')

@section('content')

    {{-- @include('partials.carousel') --}}

    <div class="grid grid-cols-3 gap-4 mb-4">
        @foreach ($products as $product)
            <div class="max-w-sm rounded overflow-hidden shadow-lg">
                <img class="w-full" src="https://cdn.lorem.space/images/shoes/.cache/640x480/wengang-zhai-_fOL6ebfECQ-unsplash.jpg" alt="product_image">
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
                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href=" {{ route('products.ver', ['id' => $product->id]) }} ">Ver</a>
                    <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded" href="#">Comprar</a>

                </div>
            </div>
        @endforeach
    </div>
    <p class="mt-3">
        {{ $products->links() }}
    </p>
@endsection
