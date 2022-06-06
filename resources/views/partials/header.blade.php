<header class="flex justify-between items-end py-4">
    <div class="flex items-center flex-grow gap-4">
        <div class="flex items-center flex-grow gap-4">
            <a href=" {{ route('products.home') }} ">
                <img src=" {{ asset('images/logo.png') }} " alt="Logo" class="h-12">
            </a>

            <form action=" {{ route('products.home') }} " method="GET" class="flex">
                <input type="search"
                    class="form-control relative flex-auto min-w-0 block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none w-80"
                    placeholder="Search" aria-label="Search" aria-describedby="button-addon2" name="search" >
                <button
                    type="submit"
                    class="input-group-text flex items-center px-3 py-1.5 text-base font-normal text-gray-700 text-center whitespace-nowrap rounded"
                    id="basic-addon2">
                    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                        </path>
                    </svg>
                </button>
            </form>

        </div>


        <div class="flex gap-3">
            <a class="text-black hover:opacity-80 focus:opacity-80 mr-4 dropdown-toggle hidden-arrow flex items-center mr-7"
                href=" {{ route('cart.list') }} " id="dropdownMenuButton1" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                <svg class="w-5 h-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path
                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                    </path>
                </svg>
                <span class="text-white bg-red-700 absolute rounded-full text-xs -mt-2.5 ml-4 py-0 px-1.5">
                    {{ Cart::getTotalQuantity() }} </span>
            </a>

            @include('partials.dropdown')
        </div>
    </div>
</header>
