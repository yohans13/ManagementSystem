<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <!-- TailWind -->
                <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
        <!--/ TailWind -->

    </head>
    <body>
        <div class="relative flex items-top justify-center min-h-screen bg-gray-800  dark:bg-gray-900 sm:items-center py-4 sm:pt-0">

           
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                  
                    <a href="{{ url('/') }}" class="text-sm text-white ">Home</a>
                   
                     
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-white ">Register</a>
                     

                        <a href="{{ route('login') }}" class="ml-4 text-sm text-white ">Log in</a>



                
                </div>
         

            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="mt-8   dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                              <h1 class="text-white">Management System</h1>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            </div>
    
    </body>
</html>
