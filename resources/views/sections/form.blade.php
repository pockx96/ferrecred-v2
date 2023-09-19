<section class="flex flex-col justify-center items-center  h-3/5 w-full">
    <h2 class="flex text-4xl text-blue-500">Contacto</h2>
    <form class="flex  flex-col mt-4 p-4 border-2 border-gray-400 shadow-md rounded w-1/2">
        <div class="flex justify-between top-inputs h-14 px-6">
            <div class="w-2/5 h-full mb-4">
                <input type="text" id="nombre" name="nombre" class="w-full p-2 border-2 border-gray-400 rounded h-full" placeholder="Nombre">
            </div>
            <div class="w-2/5 mb-4 h-full">
                <input type="email" id="correo" name="correo" class="w-full p-2 border-2 border-gray-400 rounded h-full" placeholder="Correo electronico">
            </div>
        </div>
        <div class="self-center mb-4 w-4/5 mt-4">
            <textarea id="mensaje" name="mensaje" rows="4" class="w-full p-2 border-2 border-gray-400 rounded "></textarea>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded">
            Enviar
        </button>
    </form>

</section>