<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1 class="m-6">
                        <center>Edit Product</center>
                    </h1>
                    <div class="flex justify-center">
                        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-md">
                            <form action=" {{ route('products.update') }} " method="POST">
                                @csrf
                                @method('PUT')
                                @include('products._form')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
