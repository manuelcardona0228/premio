<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="https://code.jquery.com/jquery-2.2.4.min.js" defer></script>
        <script src="{{ asset('js/ciudad.js') }}" defer></script>
</head>
<body>
    <!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class="relative  bg-blueGray-50">
    <div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
        background-image: url('https://images.pexels.com/photos/257988/pexels-photo-257988.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260');
        ">
            <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
            <div class="items-center flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">
                            Registrate y podras ganarte un fabuloso premio.
                        </h1>
                        <p class="mt-4 text-lg text-blueGray-200">
                            Ingresando tus datos basicos,
                            comenzaras a participar por un fabuloso vehiculo 0 kilometros,
                            aprovecha que nos encontramos en promociones
                            y ven por un mantenimiento para tu vehiculo con hasta un 40% de descuento.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
    </div>
    <section class="pb-10 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap">
                <div class="w-full lg:w-6/12 px-4 mx-auto">
                    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                        <div class="px-4 py-5 flex-auto">
                            @if(session('success'))
                            <div class="flex bg-green-100 rounded-lg p-4 mb-4 text-sm text-emerald-600" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <div>
                                    <span class="font-medium">{{ session('success') }}</span>
                                </div>
                            </div>
                            @elseif(session('error'))
                            <div class="flex bg-red-100 rounded-lg p-4 mb-4 text-sm text-red-700" role="alert">
                                <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                <div>
                                    <span class="font-medium">{{ session('error') }}</span>
                                </div>
                            </div>
                            @endif
                            <h1 class="text-3xl font-bold leading-normal" >Registrate</h1>
                            <p class="text-sm leading-normal mb-3">Ingresa tu información personal.</p>
                            <form action="/registrar/cliente" method="POST">
                                @csrf
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Nombres</label><input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Nombres" name="nombre" value="{{ old('nombre') }}">
                                    @error('nombre')
                                        <span class="text-sm text-red-600 font-semibold py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Apellidos</label><input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Apellidos" name="apellido" value="{{ old('apellido') }}">
                                    @error('apellido')
                                        <span class="text-sm text-red-600 font-semibold py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Cédula</label><input type="text" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Cédula" name="cedula" value="{{ old('cedula') }}">
                                    @error('cedula')
                                        <span class="text-sm text-red-600 font-semibold py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Departamento</label>
                                    <select id="departamento_id" name="departamento_id" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                        <option value="" selected>Seleccione un departamento...</option>
                                        @foreach ($departamentos as $departamento)
                                            <option value="{{ $departamento->id }}">{{ $departamento->nombre }}</option>
                                        @endforeach
                                    </select>
                                    @error('departamento_id')
                                        <span class="text-sm text-red-600 font-semibold py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Ciudad</label>
                                    <select id="ciudad_id" name="ciudad_id" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150">
                                    </select>
                                    @error('ciudad_id')
                                        <span class="text-sm text-red-600 font-semibold py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Celular</label><input type="tel" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" placeholder="Celular" name="celular" value="{{ old('celular') }}">
                                    @error('celular')
                                        <span class="text-sm text-red-600 font-semibold py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3">
                                  <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="grid-password">Correo Electronico</label><input type="email" class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" name="email" placeholder="Correo Electronico" value="{{ old('email') }}">
                                  @error('email')
                                        <span class="text-sm text-red-600 font-semibold py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="relative w-full mb-3 mt-5">
                                  <input name="habeas_data" type="checkbox" class="border-0 px-3 py-3 text-blue-600 bg-white rounded text-sm shadow focus:outline-none focus:ring ease-linear transition-all duration-150 form-checkbox h-5 w-5"><span class="ml-2 text-gray-700">Acepto Politica de tratamiento de datos</span>
                                  @error('habeas_data')
                                        <span class="text-sm text-red-600 font-semibold py-2">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="text-center mt-6">
                                  <button class="bg-blue-700 text-white active:bg-blue-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150" type="submit"> Registrarme </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="relative  pt-8 pb-6 mt-1">
                <div class="container mx-auto px-4">
                    <div class="flex flex-wrap items-center md:justify-between justify-center">
                        <div class="w-full md:w-6/12 px-4 mx-auto text-center">
                            <div class="text-sm text-blueGray-500 font-semibold py-1">
                            Made with <a href="https://www.creative-tim.com/product/notus-js" class="text-blueGray-500 hover:text-gray-800" target="_blank">Notus JS</a> by <a href="https://www.creative-tim.com" class="text-blueGray-500 hover:text-blueGray-800" target="_blank"> Creative Tim</a>.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </section>
</section>
</body>
</html>
