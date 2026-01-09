<h2 class="text-3xl font-bold mb-4">Tous les articles</h2>

<div class="space-y-4">
<?php foreach ($articles as $article): ?>
    <div class="bg-white p-4 rounded shadow hover:shadow-lg transition">
        <h3 class="text-xl font-semibold mb-1">
            <a href="/article/show?id=<?= $article['id'] ?>" class="text-blue-600 hover:underline"><?= $article['title'] ?></a>
        </h3>
        <p class="text-gray-700"><?= $article['content'] ?></p>
    </div>
<?php endforeach; ?>
</div>
