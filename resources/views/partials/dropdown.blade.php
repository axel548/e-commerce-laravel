<button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex items-center justify-between ">Menu
    <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
            clip-rule="evenodd"></path>
    </svg></button>
<!-- Dropdown menu -->
<div id="dropdownNavbar" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 ">
    {{-- <ul class="py-1 text-sm" aria-labelledby="dropdownLargeButton">
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Settings</a>
        </li>
        <li>
            <a href="#" class="block px-4 py-2 hover:bg-gray-100">Earnings</a>
        </li>
    </ul> --}}
    <div class="py-1">
        <div class="px-4 py-3 text-sm">
            <div>Quiénes somos</div>
        </div>

        <a href=" {{ route('weare.misionvision') }} " class="block px-4 py-2 text-sm hover:bg-gray-100">Misión / Visión</a>
        <a href=" {{ route('weare.description') }} " class="block px-4 py-2 text-sm hover:bg-gray-100">Descripción del Negocio</a>
    </div>
    <div class="py-1">
        @auth
            <a href=" {{ route('dashboard') }} " class="block px-4 py-2 text-sm hover:bg-gray-100">Dashboard</a>
        @else
            <a href=" {{ route('login') }} " class="block px-4 py-2 text-sm hover:bg-gray-100">Login</a>
            <a href=" {{ route('register') }} " class="block px-4 py-2 text-sm hover:bg-gray-100">Register</a>
        @endauth
    </div>
</div>
