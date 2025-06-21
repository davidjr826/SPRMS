<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    <section class="flex flex-col justify-center items-center gap-y-3 h-screen bg-gradient-to-r from-orange-500 via-yellow-500 to-orange-500">
        <!-- logo -->
        <div class="w-52">
            <img src="../images/Fire logo.png" alt="Zimamoto Logo" class="w-full" />
        </div>

        <!-- heading -->
        <h1 class="text-5xl text-white font-semibold">SPRS MANAGEMENT SYSTEM</h1>
        <h3 class="text-3xl mt-1 font-semibold">STATE PARADE REPORT</h3>

        <!-- form -->
        <form class="mt-2 flex flex-col justify-start items-center w-full gap-y-2" action="" method="GET">
            <div class="flex flex-col justify-center items-start w-1/3">
                <span class="font-semibold">Username</span>
                <input type="text" name="username" placeholder="Enter Username" class="h-10 px-3 w-full outline-none bg-white rounded-lg" />
            </div>
            <div  class="flex flex-col justify-center items-start w-1/3">
                <span class="font-semibold">Password</span>
                <input type="password" name="password" placeholder="Enter Password" class="h-10 px-3 w-full outline-none bg-white rounded-lg" />
            </div>
            <div class="flex w-1/3 mt-2">
                <a href="{{ route('dashboard') }}" class="flex justify-center items-center btn h-10 text-center outline-none w-full rounded-lg bg-white hover:bg-orange-400 hover:border-2 hover:border-white cursor-pointer font-semibold">
                    Login
                </a>
            </div>

            <p class="py-2 text-sm">Forget Password? <a href="#" class="text-blue-600">Click here</a></p>

            <div class="fixed bottom-0">
                <span>&copy; 2025 Jesh la zimamoto na uokoaji Tanzania Bara, Haki zote zimehifadhiwa</span>
            <div>
        </form>
    </section>
  </body>
</html>