<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Wikrama</title>
    @vite('resources/css/app.css')

</head>

<body>
    <!-- Navbar Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex items-center justify-between relative">
                <div class="px-4">
                    <a href="#home" class="font-bold text-lg block py-6">Hotel</a>
                </div>
                <div class="flex items-center px-4 ">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4">
                        <span class="hamburger_line"></span>
                        <span class="hamburger_line"></span>
                        <span class="hamburger_line"></span>
                    </button>
                </div>
            </div>
        </div>
    </header>
    <!-- Navbar End -->

    <script src="assets/js/script.js"></script>
</body>

</html>