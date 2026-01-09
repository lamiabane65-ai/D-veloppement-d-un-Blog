<div class="max-w-lg mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4">Gestion des catégories</h2>

    <ul class="mb-4 space-y-2">
    <?php foreach ($categories as $cat): ?>
        <li class="p-2 bg-gray-100 rounded"><?= $cat['name'] ?></li>
    <?php endforeach; ?>
    </ul>

    <form method="post" action="/admin/categories/add" class="flex space-x-2">
        <input type="text" name="name" placeholder="Nouvelle catégorie" required class="flex-1 border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        <button type="submit" class="bg-blue-600 text-white p-2 rounded hover:bg-blue-700 transition">Ajouter</button>
    </form>
</div>
