<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido a AccesRH!</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

</head>
<body class="bg-gradient-to-r from-blue-800 via-indigo-700 to-violet-800">

<header>


<nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
      <img src="{{ asset('/images/Aicon.png') }}" class="h-20" alt="Acces Icon">
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-900 from-20% via-blue-500 via-40% to-sky-300 to-40% self-center text-5xl  ">ReportHub</span>
  </a>
  <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
      <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registrate!</button>
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Abrir menu principal</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
  </div>
  <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="registro" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Inicio</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Iniciar Sesion</a>
      </li>
      <li>
        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ReportHub</a>
      </li>
    </ul>
  </div>
  </div>
</nav>

</header>

<div class="p-6">
        <h1 class="pt-20 mb-2 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Acces</span> Report Hub</h1>
        <p class="text-2xl font-normal text-gray-500  text-white">Rellena el formulario con tu información de contacto para poder realizar la cotizacion de tu proyecto.</p>
    </div>


<main  class="items-center justify-center space-x-8 p-6">

<div class="h-full flex-shrink-0 bg-white p-4 rounded-lg"> <!-- Añadido bg-white, p-4 y rounded-lg -->
                    <img class="h-auto max-w-lg rounded-lg" src="{{ asset('/images/main.svg') }}" alt="Introduccion Acces">
                </div>

        <div class="h-full flex-shrink-0 bg-red ">
          <form method="POST" action="/Acces" class="h-full max-w-lg mx-auto mt-8 bg-blue-400 shadow-inner rounded-lg p-6">
            @csrf
            <div class="mb-5">
                <label class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Nombre Completo:</label>
                <input type="text" name="nameClient" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Victor Ramos" required />
            </div>
            <div class="mb-5">
                <label  class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Empresa:</label>
                <input type="text" name="nameBusiness" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Tiendita S.A de C.V" required />
            </div>
            <div class="mb-5">
                <label class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Giro:</label>
                <input type="text" name="giro" id="name" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Mercantil" required />
            </div>
            <div class="mb-5">
                <label  class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Numero de Empleados:</label>
                <input type="number" name="empleados" id="empleados" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900
                 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="100" required />
            </div>
            <div class="mb-5">
                <label  class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Numero de Sucursales:</label> 
                <input type="number" name="sucursales" id="empleados" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900 rounded-lg 
                focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="5" required />
            </div>
              <div class="mb-5">
                  <label  class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Correo:</label>
                  <input type="email" name="emailClient" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900 rounded-lg 
                  focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="vic@tiendita.com.mx" required /> 
              </div>
              <div class="mb-5">
                <label  class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Celular:</label> 
                <input type="tel" name="phone" id="empleados" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900 
                rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 
                dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="6142463319" required />
            </div>
              <div class="mb-5">
                  <label class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Your password</label>
                  <input type="password" name="password" id="password" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900 
                  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required /> 
              </div>
              <div class="mb-5">
                  <label for="repeat-password" class="block mb-2 text-2xl font-medium text-gray-900 dark:text-white">Repeat password</label> 
                  <input type="password" name="passwordRepeat" id="repeat-password" class="shadow-sm bg-gray-50 border border-gray-300 text-2xl text-gray-900 
                  rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 
                  dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" required />
              </div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg focus:outline-none focus:shadow-outline">Registro</button>
                
          </form>
        </div>


</main>



<footer>



</footer>



<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>