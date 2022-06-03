<header class="flex justify-between items-end py-4">
    <div class="flex items-center flex-grow gap-4">
        <a href=" {{ route('products.home') }} ">
            <img src=" {{ asset('images/logo.png') }} " alt="Logo" class="h-12">
        </a>
        <form action=" {{ route('products.home') }} " method="GET" class="flex-grow">
            <input type="text" name="search" placeholder="Buscar" value=" {{ request('search') }} "
                class="border border-gray-200 rounded py-2 px-4 w-1/2">
        </form>
    </div>


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

    @auth
        <a href=" {{ route('dashboard') }} ">Dashboard</a>
    @else
        <a href=" {{ route('login') }} ">Login</a>
    @endauth


</header>
