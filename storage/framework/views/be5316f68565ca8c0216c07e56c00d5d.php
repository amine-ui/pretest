<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">



    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles / Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>


</head>

<body class="bg-gradient-to-br from-blue-100 via-gray-100 to-blue-50 min-h-screen flex items-center justify-center p-4">

    <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
        <h2 class="text-3xl font-extrabold text-center text-gray-800 mb-6">
            Recherche d'un étudiant
        </h2>


        <!-- Search Form -->
        <form action="<?php echo e(route('etudiant.detail')); ?>" method="get" class="">
            <?php echo csrf_field(); ?>

            <!-- Search Input -->
            <div class="mb-5">
                <label for="search" class="block text-gray-700 font-medium mb-2">
                    Rechercher par code apogée
                </label>
            </div>

            <!-- Submit Button -->

            <div class=" flex justify-center">
                <input type="text" name="search" id="search" placeholder="Enter student name or ID"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 transition duration-200" />

                <button type="submit" id="btnsearch"
                    class="ml-2 bg-yellow-700 text-white font-semibold text-lg px-6 py-3 rounded-lg shadow-md hover:bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-yellow-400 focus:ring-offset-2 transition duration-300">
                    Search
                </button>
            </div>
            <?php if(session('error')): ?>
                <div class="mt-3 text-red-600 ">
                    <?php echo e(session('error')); ?>

                </div>
            <?php endif; ?>

            <!-- Modallllllllll -->
            


            


        </form>
        <form method="POST" action="<?php echo e(route('logout')); ?>">
            <?php echo csrf_field(); ?>

            <button type="submit" class="mt-2 w-full max-w-md"
                style="background-color: red; color: white; border: none; padding: 10px 20px; cursor: pointer;">
                Log Out
            </button>
        </form>
        <div class="bg-white p-8 rounded-xl shadow-lg w-full max-w-md">
            <div class=" max-w-md">
                <h2 class=" text-3xl font-extrabold text-center text-gray-800 mb-6">
                    QR Code Scanner
                </h2>
                <div id="reader" style="" class="max-w-lg"></div>
            </div>
        </div>
    </div>





    
    
    

</body>

</html>
<?php /**PATH C:\xampp\htdocs\Presencia\resources\views/controller/rechetudiant.blade.php ENDPATH**/ ?>