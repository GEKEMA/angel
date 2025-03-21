<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Creation</title>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6">Créer un étudiant</h2>
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="nom" class="block text-gray-700">Nom</label>
                <input type="text" id="nom" name="nom" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="prenom" class="block text-gray-700">Prénom</label>
                <input type="text" id="prenom" name="prenom" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="age" class="block text-gray-700">Âge</label>
                <input type="number" id="age" name="age" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
            </div>
            <div class="mb-4">
                <label for="tel" class="block text-gray-700">Téléphone</label>
                <input type="tel" id="tel" name="tel" class="w-full px-3 py-2 border border-gray-300 rounded-lg" required>
            </div>
            <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600">Soumettre</button>
        </form>
    </div>
</body>
</html>