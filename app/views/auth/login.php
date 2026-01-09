<div class="max-w-md mx-auto bg-white p-6 rounded shadow">
    <h2 class="text-2xl font-bold mb-4 text-center">Connexion</h2>
    <form method="post" action="/auth/login" class="space-y-4">
        <div>
            <label class="block mb-1 font-medium">Email :</label>
            <input type="email" name="email" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <div>
            <label class="block mb-1 font-medium">Mot de passe :</label>
            <input type="password" name="password" required class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>
        <button type="submit" class="w-full bg-blue-600 text-white p-2 rounded hover:bg-blue-700 transition">Se connecter</button>
    </form>
</div>
