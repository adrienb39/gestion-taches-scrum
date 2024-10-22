<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="./../../assets/css/style.css">
    <script src="./../../assets/js/script.js"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center h-screen">

    <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
        <h2 class="text-2xl font-bold mb-6 text-center">Créer un compte</h2>
        <form action="" method="post">
            <div class="mb-4">
                <label for="pseudo_user" class="block text-sm font-medium text-gray-700">Pseudo</label>
                <input type="text" id="pseudo_user" name="pseudo_user" placeholder="Pseudo" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="email_user" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email_user" name="email_user" placeholder="Email" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password_user" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input type="password" id="password_user" name="password_user" placeholder="Mot de passe" required 
                       class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2 focus:ring focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div>
                <button type="submit" class="w-full bg-red-500 text-white font-bold py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Envoyer</button>
            </div>
        </form>
    </div>

</body>
</html>
