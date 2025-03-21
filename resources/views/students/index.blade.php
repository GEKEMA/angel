<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Liste des étudiants</title>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto mt-8 p-4 bg-white shadow-md rounded-lg">
        <h1 class="text-3xl font-bold mb-6 text-center">Liste des étudiants</h1>
        <div class="overflow-x-auto" style="max-height: 500px;">
            <table class="min-w-full bg-white border border-gray-200 rounded-lg mx-auto">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="py-3 px-4 border border-gray-300 text-left">Nom</th>
                        <th class="py-3 px-4 border border-gray-300 text-left">Prénom</th>
                        <th class="py-3 px-4 border border-gray-300 text-left">Âge</th>
                        <th class="py-3 px-4 border border-gray-300 text-left">Sexe</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr class="hover:bg-gray-100">
                            <td class="py-3 px-4 border border-gray-300">{{ $student['nom'] }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $student['prenom'] }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $student['age'] }}</td>
                            <td class="py-3 px-4 border border-gray-300">{{ $student['sexe'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>