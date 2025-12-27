    <nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl flex h-16 items-center justify-between px-4">

        <!-- Nombre a la izquierda -->
        
        <p class="text-white text-2xl font-medium" style="font-family: 'Pacifico', cursive;">
            Cariluma
        </p>

        <!-- Espacio vacío para balancear el centro -->
        <div class="w-[160px]"></div>

        <!-- Menú centrado -->
        <div class="flex gap-4">
            <a href="/"          class="<?= $_SERVER['REQUEST_URI'] === '/'          ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Inicio</a>
            <a href="/post"      class="<?= $_SERVER['REQUEST_URI'] === '/post'      ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Publicaciones</a>
            <a href="/blog"      class="<?= $_SERVER['REQUEST_URI'] === '/blog'      ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Blog</a>
            <a href="/proyectos" class="<?= $_SERVER['REQUEST_URI'] === '/proyectos' ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Proyectos</a>
            <a href="/about"     class="<?= $_SERVER['REQUEST_URI'] === '/about'     ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Sobre mí</a>
            <a href="/ideas"     class="<?= $_SERVER['REQUEST_URI'] === '/ideas'     ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Ideas💡</a>
            <a href="/links"     class="<?= $_SERVER['REQUEST_URI'] === '/links'     ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' ?> rounded-md px-3 py-2 text-sm font-medium">Contacto</a>
        </div>

        <!-- Espacio vacío para balancear el centro -->
        <div class="w-[160px]"></div>

         <!-- Nombre a la derecha -->
        <p class="text-white text-base font-normal">
            Ricardo Bertarini
        </p>

        

    </div>
</nav>
