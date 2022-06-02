@extends('template')

@section('content')
    <div class="max-w-sm w-full lg:max-w-full lg:flex">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
            style="background-image: url('https://cdn.lorem.space/images/furniture/.cache/640x480/laura-davidson-ULP07chR5EQ-unsplash.jpg')"
            title="Woman holding a mug">
        </div>
        <div
            class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <p class="text-sm text-gray-600 flex items-center">
                    <svg class="fill-current text-gray-500 w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 20 20">
                        <path
                            d="M4 8V6a6 6 0 1 1 12 0v2h1a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-8c0-1.1.9-2 2-2h1zm5 6.73V17h2v-2.27a2 2 0 1 0-2 0zM7 6v2h6V6a3 3 0 0 0-6 0z" />
                    </svg>
                    Members only
                </p>
                <div class="text-gray-900 font-bold text-xl mb-2"> {{ $product->name }} </div>
                <p class="text-gray-700 text-base"> {{ $product->description }} </p>
                <p class="text-gray-700 text-base"><b>Price:</b> ${{ $product->price }} </p>
                <p class="text-gray-700 text-base"><b>Weight:</b> {{ $product->weight }} </p>
                <p class="text-gray-700 text-base"><b>Stock:</b> {{ $product->stock }} </p>
                {{-- <div class="px-6 pt-4 pb-2"> --}}
                <span
                    class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#{{ $product->category }}</span>
                {{-- </div> --}}
            </div>
            <div class="flex items-center">
                <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mr-2" href=" ">+</a>
                <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mr-2" href=" ">1</a>
                <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded mr-2" href=" ">+</a>
            </div>
        </div>

    </div>
@endsection
