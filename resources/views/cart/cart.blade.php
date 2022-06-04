@extends('template')

@section('content')
    @if (count($cartItems) == 0)
        <div class="bg-yellow-100 rounded-lg py-5 px-6 mb-3 text-base text-yellow-700 inline-flex items-center w-full"
            role="alert">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="exclamation-triangle"
                class="w-4 h-4 mr-2 fill-current" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                <path fill="currentColor"
                    d="M569.517 440.013C587.975 472.007 564.806 512 527.94 512H48.054c-36.937 0-59.999-40.055-41.577-71.987L246.423 23.985c18.467-32.009 64.72-31.951 83.154 0l239.94 416.028zM288 354c-25.405 0-46 20.595-46 46s20.595 46 46 46 46-20.595 46-46-20.595-46-46-46zm-43.673-165.346l7.418 136c.347 6.364 5.609 11.346 11.982 11.346h48.546c6.373 0 11.635-4.982 11.982-11.346l7.418-136c.375-6.874-5.098-12.654-11.982-12.654h-63.383c-6.884 0-12.356 5.78-11.981 12.654z">
                </path>
            </svg>
            There is no product in the cart!
        </div>
    @else
        <input type="hidden" name="total" value=" {{ $total = 0 }} ">
        <div class="flex flex-row">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8 basis-3/4">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full">
                            <thead class="bg-white border-b">
                                <tr>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold text-lg">
                                        Producto
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold text-lg">
                                        Precio
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold text-lg">
                                        Cantidad
                                    </th>
                                    <th scope="col"
                                        class="text-sm font-medium text-gray-900 px-6 py-4 text-left font-bold text-lg">
                                        Subtotal
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($cartItems as $cart)
                                    <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                            <div class="flex flex-row ">
                                                <div class="m-5">
                                                    <form action=" {{ route('cart.remove') }} " method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value=" {{ $cart->id }} ">
                                                        <button
                                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"
                                                            type="submit">
                                                            x
                                                        </button>
                                                    </form>
                                                </div>
                                                <img src="https://cdn.lorem.space/images/furniture/.cache/640x480/lennon-cheng-3FmDZJtF4ho-unsplash.jpg"
                                                    alt="product_image" class="w-24">
                                                <p class="ml-5 mt-5 mb-5 text-lg">
                                                    {{ $cart->name }}
                                                </p>
                                            </div>
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Q {{ number_format($cart->price, 2) }}
                                        </td>
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center justify-center">
                                                <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg"
                                                    role="toolbar">
                                                    <form action=" {{ route('cart.update') }} " method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value=" {{ $cart->id }} ">
                                                        <input type="hidden" name="tipo" value="resta">
                                                        <button type="submit"
                                                            class="rounded-l inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase hover:bg-amber-700 focus:bg-amber-700 focus:outline-none focus:ring-0 active:bg-amber-800 transition duration-150 ease-in-out">-</button>
                                                    </form>
                                                    <button type="button"
                                                        class=" inline-block px-6 py-2.5 bg-white-600 text-black font-medium text-xs leading-tight uppercase hover:bg-white-700 focus:bg-white-700 focus:outline-none focus:ring-0 active:bg-white-800 transition duration-150 ease-in-out">
                                                        {{ $cart->quantity }} </button>
                                                    <form action=" {{ route('cart.update') }} " method="POST">
                                                        @csrf
                                                        <input type="hidden" name="id" value=" {{ $cart->id }} ">
                                                        <input type="hidden" name="tipo" value="suma">
                                                        <button
                                                            class=" inline-block px-6 py-2.5 bg-amber-600 text-white font-medium text-xs leading-tight uppercase hover:bg-amber-700 focus:bg-amber-700 focus:outline-none focus:ring-0 active:bg-amber-800 transition duration-150 ease-in-out"
                                                            type="submit">+</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <input type="hidden" name="suma"
                                            value=" {{ $total += $cart->price * $cart->quantity }} ">
                                        <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                            Q {{ number_format($cart->price * $cart->quantity, 2) }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="basis-1/4 ml-3">
                <div class="flex flex-col m-2 mt-16">
                    <p>
                        <center>TOTAL DEL CARRITO</center>
                    </p>
                    <div class="flex justify-between m-1">
                        <p>Subtotal del Carrito</p>
                        <p> Q {{ number_format($total) }} </p>
                    </div>
                    <a type="button" class="inline-block px-6 py-2.5 bg-gray-200 text-gray-700 font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out m-1" href=" {{ route('products.home') }} ">
                        <center>Buscar más productos</center>
                    </a>
                    <a type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out m-1" href=" {{ route('checkout') }} ">
                        <center>Iniciar Compra</center>
                    </a>
                </div>
            </div>
        </div>
    @endif
@endsection
