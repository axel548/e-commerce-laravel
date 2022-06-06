@extends('template')

@section('content')
    <div class="flex justify-center">
        <div class="flex flex-col md:flex-row md:max-w-xl rounded-lg bg-white shadow-lg">
            <img class=" w-full h-96 md:h-auto object-cover md:w-60 rounded-t-lg md:rounded-none md:rounded-l-lg"
                src="{{ $product->image }}" alt="" />
            <div class="p-6 flex flex-col justify-start">
                <h5 class="text-gray-900 text-xl font-medium mb-2">{{ $product->name }}</h5>
                <p class="text-gray-700 text-base mb-4">
                    {{ $product->description }}
                </p>
                <p class="text-gray-700 text-base"><b>Price:</b> ${{ $product->price }} </p>
                <p class="text-gray-700 text-base"><b>Weight:</b> {{ $product->weight }} </p>
                <p class="text-gray-700 text-base"><b>Stock:</b> {{ $product->stock }} </p>
                <div class="px-6 pt-4 pb-2">
                    <span
                        class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $product->category }}</span>
                </div>

                @include('partials.add_product')
            </div>
        </div>
    </div>
@endsection
