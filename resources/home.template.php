<?php require __DIR__ . '/partials/header.php'; ?>

<div class="border-b border-gray-200 pb-8 mb-8">
    <h1 class="text-4xl font-semibold text-gray-900 sm:text-5xl">Bienvenido a Cariluma</h1>
    <p class="text-lg text-gray-600 w-full max-w-4xl">Te queremos acompañar en tus procesos</p>
</div>

<div class="border-b border-gray-200 pb-8 mb-8">
    <h2 class="text-4xl font-semibold text-gray-900 sm:text-4xl">Publicaciones recientes</h2>

    <p class="text-lg text-gray-600 w-full max-w-4xl">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque suscipit qui necessitatibus officiis soluta voluptatum numquam a aperiam quasi nemo quas ullam eaque, optio modi nam ut odit dolore. Impedit.
    </p>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-x-8 gap-y-16">

    <?php foreach ($posts as $posts): ?>
    
        <article>
            <h3 class="text-lg font-semibold text-gray-900 hover:text-gray-600">
                <a href="#">
                    <?= $posts['title'] ?>
                </a>
            </h3>

            <p class="mt-2 text-sm text-gray-600"><?= $posts['excerpt'] ?></p>
        </article>
    <?php endforeach; ?>
</div>

<?php require __DIR__ . '/partials/footer.php'; ?>
