<div class="bg-white p-6 rounded shadow mb-6">
    <h2 class="text-3xl font-bold mb-4"><?= $article['title'] ?></h2>
    <p class="text-gray-700"><?= $article['content'] ?></p>
</div>

<h3 class="text-2xl font-bold mb-2">Commentaires</h3>
<div class="space-y-2">
<?php foreach ($comments as $comment): ?>
    <div class="bg-gray-100 p-3 rounded">
        <strong class="text-gray-800"><?= $comment['author'] ?>:</strong> <?= $comment['content'] ?>
    </div>
<?php endforeach; ?>
</div>
