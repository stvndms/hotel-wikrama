<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>

<body class="bg-cover bg-fixed bg-center bg-no-repeat" style="background-image: url('assets/image/Background.jpg')">
    <!-- Login Form Start -->
    <div class="flex justify-center items-center min-h-screen">
        <div class="container w-[550px] xl:w-[450px] xl:h-[550px] xl:py-10 bg-white/30 rounded-lg shadow-lg py-20 px-10">
            <h2 class="font-bold text-xl block text-center">Welcome Back!</h2>
            <p class="text-sm mt-2 block text-center mb-20 xl:mb-10">Please Enter Your Details</p>
            <form action="">
                <label class="block mb-5 xl:mb-2">Email</label>
                <input type="email" name="email" id="" placeholder="Enter your Email address" class="w-full h-[50px] rounded-lg bg-white/50 mb-5">
                <label class="block mb-5 xl:mb-2">Password</label>
                <input type="password" name="password" placeholder="Enter your Password" class="w-full h-[50px] rounded-lg bg-white/50">
            </form>
            <div class="mt-5 flex justify-between">
                <div>
                    <input type="checkbox" name="" id="">
                    <label>Remember me</label>
                </div>
                <div>
                    <a href="">Forgot password?</a>
                </div>
            </div>
            <div class="mt-5">
                <button class="w-full h-[50px] rounded-lg bg-orange text-white mb-2">Sign in</button>
            </div>
            <h1 class="block text-center">or</h1>
            <div>
                <button class="w-full h-[50px] flex justify-center items-center bg-white/50 rounded-lg"><img class="mr-3" src="assets/image/g-icon.png">Sign in with Google</button>
            </div>
            <h1 class="block text-center mt-5 xl:mt-2 text-grey">Don't have an account?<a class="text-dark" href="">Sign Up</a></h1>
        </div>
    </div>
    <!-- Login Form End -->
</body>

</html>