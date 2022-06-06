<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">


        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="flex flex-row">
                            <div class="basis-3/5">
                                <form action="" method="POST" autocomplete="off">
                                    <h1 class="font-bold text-xl">Customer information</h1>
                                    <p>
                                        Welcome back,
                                        <b>{{ Auth::user()->name }}</b>
                                        ({{ Auth::user()->email }}).
                                    </p>
                                    <div class="m-6">

                                        {{-- Phone Number --}}
                                        <div class="form-group mb-6">
                                            <input type="text"
                                                class="form-control block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="address" name="address" placeholder="Phone Number">

                                        </div>
                                        {{-- Facturacion --}}
                                        <div class="form-group mb-6">
                                            {{-- Facturar --}}
                                            <div class="flex flex-row">
                                                <label for="exampleInputEmail1"
                                                    class="form-label inline-block mb-2 text-gray-700 mr-2">Facturar
                                                    a:</label>
                                                <div class="form-check form-check-inline">
                                                    <input
                                                        class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                        type="radio" name="inlineRadioOptions" id="inlineRadio1"
                                                        value="option1">
                                                    <label class="form-check-label inline-block text-gray-800 mr-2"
                                                        for="inlineRadio10">C/F</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input
                                                        class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                        type="radio" name="inlineRadioOptions" id="inlineRadio2"
                                                        value="option2">
                                                    <label class="form-check-label inline-block text-gray-800 mr-2"
                                                        for="inlineRadio20">NIT</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="m-6">
                                        {{-- Shipping information --}}
                                        <h2 class="font-bold text-xl mt-6">Shipping information</h2>

                                        {{-- Name, Last Name --}}
                                        <div class="form-group mb-6 flex justify-between">
                                            {{-- Name --}}
                                            <input type="text"
                                                class="form-control block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="name" name="name" placeholder="Name">

                                            {{-- Last Name --}}
                                            <input type="text"
                                                class="form-control block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="lastname" name="lastname" placeholder="Last Name">
                                        </div>

                                        {{-- Address --}}
                                        <div class="form-group mb-6">
                                            <input type="text"
                                                class="form-control block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="address" name="address" placeholder="Address">

                                        </div>

                                        {{-- References --}}
                                        <div class="form-group mb-6">
                                            <input type="text"
                                                class="form-control block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="references" name="references"
                                                placeholder="Referencia / Empresa / Oficina / Lugares cercanos (opcional)">

                                        </div>

                                        {{-- Country, State --}}
                                        <div class="form-group mb-6 flex justify-between">
                                            {{-- Country --}}
                                            <input type="text"
                                                class="form-control block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="country" name="country" placeholder="Country">

                                            {{-- State --}}
                                            <input type="text"
                                                class="form-control block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="state" name="state" placeholder="State">
                                        </div>

                                        {{-- City --}}
                                        <div class="form-group mb-6">
                                            <input type="text"
                                                class="form-control block
                                              w-full
                                              px-3
                                              py-1.5
                                              text-base
                                              font-normal
                                              text-gray-700
                                              bg-white bg-clip-padding
                                              border border-solid border-gray-300
                                              rounded
                                              transition
                                              ease-in-out
                                              m-0
                                              focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="city" name="city" placeholder="City">

                                        </div>
                                    </div>

                                    <div class="m-6">
                                        {{-- Shipping Address --}}
                                        <h1 class="font-bold text-xl">Shipping Address</h1>

                                        {{-- Shipping Address --}}
                                        <div class="form-group mb-6">
                                            <textarea class="
                                                    form-control
                                                    block
                                                    w-full
                                                    px-3
                                                    py-1.5
                                                    text-base
                                                    font-normal
                                                    text-gray-700
                                                    bg-white bg-clip-padding
                                                    border border-solid border-gray-300
                                                    rounded
                                                    transition
                                                    ease-in-out
                                                    m-0
                                                    focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                                id="address_2" rows="3" placeholder="Shipping Address"></textarea>
                                        </div>
                                    </div>

                                    <div class="m-6">
                                        {{-- Shipping method --}}
                                        <h1 class="font-bold text-xl">Shipping method</h1>

                                        {{-- Shipping Address --}}
                                        <div class="form-group mb-6">
                                            <p class="mt-2">Select a shipping method:</p>
                                            <div class="form-check p-2 border rounded">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="radioshipping" id="freeshipping">
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="freeshipping">
                                                    Free shipping
                                                </label>
                                            </div>
                                            <div class="form-check p-2 border rounded">
                                                <input
                                                    class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                                    type="radio" name="radioshipping" id="pickupshipping" checked>
                                                <label class="form-check-label inline-block text-gray-800"
                                                    for="pickupshipping">
                                                    Pick up at Office zone 4
                                                </label>
                                            </div>
                                        </div>
                                    </div>



                                    <h1 class="font-bold text-xl">Método de Pago</h1>
                                    <div class="m-6">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item bg-white border border-gray-200">
                                                <h2 class="accordion-header mb-0" id="headingOne">
                                                    <button
                                                        class="
                                                  accordion-button
                                                  relative
                                                  flex
                                                  items-center
                                                  w-full
                                                  py-4
                                                  px-5
                                                  text-base text-gray-800 text-left
                                                  bg-white
                                                  border-0
                                                  rounded-none
                                                  transition
                                                  focus:outline-none
                                                "
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">
                                                        Accordion Item #1
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body py-4 px-5">
                                                        <strong>This is the first item's accordion body.</strong> It is
                                                        shown by default,
                                                        until the collapse plugin adds the appropriate classes that we
                                                        use to style each
                                                        element. These classes control the overall appearance, as well
                                                        as the showing and
                                                        hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding
                                                        our default variables. It's also worth noting that just about
                                                        any HTML can go within
                                                        the <code>.accordion-body</code>, though the transition does
                                                        limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-white border border-gray-200">
                                                <h2 class="accordion-header mb-0" id="headingTwo">
                                                    <button
                                                        class="
                                                  accordion-button
                                                  collapsed
                                                  relative
                                                  flex
                                                  items-center
                                                  w-full
                                                  py-4
                                                  px-5
                                                  text-base text-gray-800 text-left
                                                  bg-white
                                                  border-0
                                                  rounded-none
                                                  transition
                                                  focus:outline-none
                                                "
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseTwo" aria-expanded="false"
                                                        aria-controls="collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body py-4 px-5">
                                                        <strong>This is the second item's accordion body.</strong> It is
                                                        hidden by default,
                                                        until the collapse plugin adds the appropriate classes that we
                                                        use to style each
                                                        element. These classes control the overall appearance, as well
                                                        as the showing and
                                                        hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding
                                                        our default variables. It's also worth noting that just about
                                                        any HTML can go within
                                                        the <code>.accordion-body</code>, though the transition does
                                                        limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item bg-white border border-gray-200">
                                                <h2 class="accordion-header mb-0" id="headingThree">
                                                    <button
                                                        class="
                                                  accordion-button
                                                  collapsed
                                                  relative
                                                  flex
                                                  items-center
                                                  w-full
                                                  py-4
                                                  px-5
                                                  text-base text-gray-800 text-left
                                                  bg-white
                                                  border-0
                                                  rounded-none
                                                  transition
                                                  focus:outline-none
                                                "
                                                        type="button" data-bs-toggle="collapse"
                                                        data-bs-target="#collapseThree" aria-expanded="false"
                                                        aria-controls="collapseThree">
                                                        Accordion Item #3
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                    <div class="accordion-body py-4 px-5">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default,
                                                        until the collapse plugin adds the appropriate classes that we
                                                        use to style each
                                                        element. These classes control the overall appearance, as well
                                                        as the showing and
                                                        hiding via CSS transitions. You can modify any of this with
                                                        custom CSS or overriding
                                                        our default variables. It's also worth noting that just about
                                                        any HTML can go within
                                                        the <code>.accordion-body</code>, though the transition does
                                                        limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit"
                                        class="
                                        px-6
                                        py-2.5
                                        bg-blue-600
                                        text-white
                                        font-medium
                                        text-xs
                                        leading-tight
                                        uppercase
                                        rounded
                                        shadow-md
                                        hover:bg-blue-700 hover:shadow-lg
                                        focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0
                                        active:bg-blue-800 active:shadow-lg
                                        transition
                                        duration-150
                                        ease-in-out">Submit
                                    </button>
                                </form>
                            </div>
                            <div class="basis-2/5">
                                <input type="hidden" name="total" value=" {{ $total = 0 }} ">
                                <table class="min-w-full">
                                    <tbody>
                                        @foreach ($cartItems as $cart)
                                            <tr
                                                class="bg-white border-b transition duration-300 ease-in-out hover:bg-gray-100">
                                                <td
                                                    class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                    <div class="flex flex-row ">
                                                        <img src="{{ $cart->attributes['image'] }}"
                                                            alt="product_image" class="w-24">
                                                        <p class="ml-5 mt-5 mb-5 text-lg">
                                                            {{ $cart->name }}
                                                        </p>
                                                    </div>
                                                </td>
                                                <input type="hidden" name="suma"
                                                    value=" {{ $total += $cart->price * $cart->quantity }} ">
                                                <td
                                                    class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                                    Q {{ number_format($cart->price * $cart->quantity, 2) }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <br>
                                <div class="flex flex-col m-2">
                                    <div class="flex justify-between">
                                        <p class="font-semibold m-2">Subtotal</p>
                                        <p class="font-semibold m-2">Q {{ number_format($total, 2) }}</p>
                                    </div>
                                    <div class="flex justify-between">
                                        <p class="font-semibold m-2">Envío</p>
                                        <p class="font-semibold m-2">Selecciona un medio de envió para ver el costo</p>
                                    </div>

                                    <hr class="mr-2 ml-2">

                                    <div class="flex justify-between">
                                        <p class="font-semibold m-2">Total</p>
                                        <p class="font-semibold m-2">Q {{ number_format($total, 2) }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
