<h2 class="text-3xl font-bold mb-4">Articles récents</h2>

<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<?php foreach ($articles as $article): ?>
    <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-2"><?= $article['title'] ?></h3>
        <p class="text-gray-700"><?= $article['content'] ?></p>
    </div>
<?php endforeach; ?>
</div>
