@extends('template')

@section('content')
    <!-- Container for demo purpose -->
    <div class="container my-24 px-6 mx-auto">

        <!-- Section: Design Block -->
        <section class="mb-32">
            <style>
                @media (min-width: 992px) {
                    #cta-img-nml-50 {
                        margin-left: 50px;
                    }
                }
            </style>

            <div class="flex flex-wrap">
                <div class="grow-0 shrink-0 basis-auto w-full lg:w-5/12 mb-12 lg:mb-0">
                    <div class="flex lg:py-12">
                        <img src="https://s3.amazonaws.com/cdn.wp.m4ecmx/wp-content/uploads/2015/05/31143018/Qu%C3%A9-es-el-eCommerce-compressor.jpg"
                            class="w-full rounded-lg shadow-lg" id="cta-img-nml-50" style="z-index: 10" alt="" />
                    </div>
                </div>

                <div class="grow-0 shrink-0 basis-auto w-full lg:w-7/12">
                    <div
                        class="bg-yellow-500 h-full rounded-lg p-6 lg:pl-12 text-white flex items-center text-center lg:text-left">
                        <div class="lg:pl-12">
                            <h2 class="text-3xl font-bold mb-6">Descripción del Negocio</h2>
                            <p class="mb-6 pb-2 lg:pb-0">
                                Somos perfectamente conscientes de que nuestros productos deben ser seleccionados con el
                                mayor cuidado, puesto que nuestros clientes necesitan el mayor confort y seguridad en cada
                                una de sus aventuras.
                            </p>

                            <div class="flex flex-col md:flex-row md:justify-around xl:justify-start mb-6 mx-auto">
                                <p class="flex items-center mb-4 md:mb-2 lg:mb-0 mx-auto md:mx-0 xl:mr-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                                        <path fill="currentColor"
                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                        </path>
                                    </svg>
                                    Mejor equipo
                                </p>

                                <p class="flex items-center mb-4 md:mb-2 lg:mb-0 mx-auto md:mx-0 xl:mr-20">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                                        <path fill="currentColor"
                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                        </path>
                                    </svg>
                                    Mejor calidad
                                </p>

                                <p class="flex items-center mb-2 lg:mb-0 mx-auto md:mx-0">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-4 h-4 mr-2">
                                        <path fill="currentColor"
                                            d="M504 256c0 136.967-111.033 248-248 248S8 392.967 8 256 119.033 8 256 8s248 111.033 248 248zM227.314 387.314l184-184c6.248-6.248 6.248-16.379 0-22.627l-22.627-22.627c-6.248-6.249-16.379-6.249-22.628 0L216 308.118l-70.059-70.059c-6.248-6.248-16.379-6.248-22.628 0l-22.627 22.627c-6.248 6.248-6.248 16.379 0 22.627l104 104c6.249 6.249 16.379 6.249 22.628.001z">
                                        </path>
                                    </svg>
                                    Mejor experiencia
                                </p>
                            </div>

                            <p>
                                El mayor secreto para el buen funcionamiento, es la selección de los mejores proveedores y
                                una atención al cliente super especializada, puesto que casi todo el equipo que trabaja en
                                esta empresa son amantes y practicantes habituales.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section: Design Block -->

    </div>
    <!-- Container for demo purpose -->
@endsection
