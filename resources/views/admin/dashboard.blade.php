<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
     <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    @vite('resources/js/app.js')
</head>
<body class="bg-gray-100">

    <div class="flex h-screen">

        <!-- Sidebar -->
        <div id="sidebar" class="grid grid-cols-1 justify-items-center place-content-start gap-y-8 w-64 bg-orange-500 text-white py-7 px-2 transition-all duration-500 ease-in-out transform -translate-x-full md:translate-x-0">
            <div class="w-20 h-fit ">
                <img src="../images/Fire logo.png" alt="Zimamoto Logo" class="w-full" />
            </div>

            <div>
                <ul class="flex flex-col gap-y-5 w-full">
                    <li><a href="#" class="block py-2 px-16 text-lg text-black bg-white rounded-4xl text-start">Dashboard</a></li>
                    <li>
                        <div class="relative">
                            <select class="block w-full py-2 px-4 pr-10 text-lg text-black bg-white border rounded-4xl appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="user1" class="flex items-center">
                                    <i class="fas fa-user mr-2"></i> User 1
                                </option>
                                <option value="user2" class="flex items-center">
                                    <i class="fas fa-user-alt mr-2"></i> User 2
                                </option>
                                <option value="user3" class="flex items-center">
                                    <i class="fas fa-users mr-2"></i> User 3
                                </option>
                            </select>
                            <div class="absolute top-0 right-0 flex items-center justify-center h-full pr-4 pointer-events-none">
                                <i class="fas fa-chevron-down text-gray-500"></i>
                            </div>
                        </div>
                    </li>
                    <li>
                        <select class="py-2 px-16 text-lg text-black bg-white rounded-4xl w-full">
                            <option value="setting1">Setting 1</option>
                            <option value="setting2">Setting 2</option>
                            <option value="setting3">Setting 3</option>
                        </select>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1">
            <!-- Header -->
            <header class="bg-white shadow-md p-4 flex items-center justify-between">
                <div class="text-2xl font-semibold text-black">Dashboard</div>
                <div class="flex items-center space-x-4">
                    <button class="text-gray-600">Logout</button>
                </div>
            </header>

            <!-- Content -->
            <div class="p-6 text-black">
                <h1 class="text-3xl">Welcome to the Admin Dashboard</h1>
                <p class="mt-4">Here you can manage your site.</p>
            </div>
        </div>

    </div>

    <!-- Toggle Sidebar Script -->
    <script>
        const toggleButton = document.getElementById('toggleSidebar');
        const sidebar = document.getElementById('sidebar');

        toggleButton.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>
</html>
