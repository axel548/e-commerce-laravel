<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="flex flex-row">
            <div class="basis-3/5">casdc</div>
            <div class="basis-2/5">
                <input type="hidden" name="total" value=" {{ $total = 0 }} ">
                <table class="min-w-full">
                    <tbody>
                        @foreach ($cartItems as $cart)
                            <tr class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                    <div class="flex flex-row ">
                                        <img src="https://cdn.lorem.space/images/furniture/.cache/640x480/lennon-cheng-3FmDZJtF4ho-unsplash.jpg"
                                            alt="product_image" class="w-24">
                                        <p class="ml-5 mt-5 mb-5 text-lg">
                                            {{ $cart->name }}
                                        </p>
                                    </div>
                                </td>
                                <input type="hidden" name="suma" value=" {{ $total += $cart->price * $cart->quantity }} ">
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
</x-app-layout>
