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

<body class="font-poppins bg-cover bg-fixed bg-center bg-no-repeat" style="background-image: url('assets/image/bgmin.jpg')">
    <!-- Login Form Start -->
    <div class="flex justify-center items-center min-h-screen">
        <div class="container 2xl:w-[500px] 2xl:h-[650px] lg:w-[450px] lg:h-[520px] md:w-[400px] md:h-[500px] w-[300px] h-[420px] bg-white/30 backdrop-blur-sm rounded-[10px] shadow-md 2xl:py-14 py-8 px-10 border-[1px] border-white">
            <h2 class="font-semibold md:text-lg 2xl:text-xl text-sm block text-center">Welcome Back!</h2>
            <p class="text-[13px] 2xl:text-[14px] font-medium text-grey md:mt-2 mt-1 block text-center 2xl:mb-20 lg:mb-15 mb-10">Please Enter Your Details</p>
            <form action="">
                <label class="block  2xl:mb-5 md:mb-3 mb-2 font-medium md:text-[15px] 2xl:text-[16px] text-xs">Email</label>
                <input type="email" name="email" id="" placeholder="Enter your Email address" class="w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[25px] text-[10px] md:text-sm bg-white/50 mb-5 px-5 backdrop-blur-sm border-[1px] border-white md:rounded-[10px] rounded-[5px]">
                <label class="block 2xl:mb-5 md:mb-3 mb-2 font-medium md:text-[15px] text-xs">Password</label>
                <div class="relative">
                    <input type="password" name="password" placeholder="Enter your Password" class="w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[25px] md:rounded-[10px] rounded-[5px] text-[10px] md:text-sm bg-white/50 px-5 backdrop-blur-sm border-[1px] border-white">
                    <img class="2xl:w-5 2xl:h-5 lg:w-4 lg:h-4 w-3 h-3 absolute top-1/2 -translate-y-1/2 right-3" src="assets/image/eye.svg" alt="">
                </div>
            </form>
            <div class="mt-5 flex justify-between">
                <div class="flex justify-center items-center">
                    <input class="md:h-5 md:w-5 h-3 w-3 md:rounded-[5px] rounded-[2px] border-[1px] border-dark" type="checkbox" name="" id="">
                    <label class="ml-2 font-normal 2xl:text-[14px] md:text-[13px] text-[10px]">Remember me</label>
                </div>
                <div>
                    <a href="" class="font-normal 2xl:text-[14px] md:text-[13px] text-[10px]">Forgot password?</a>
                </div>
            </div>
            <div class="mt-5 2xl:mt-7">
                <button class="w-full lg:h-[40px] 2xl:h-[50px] md:h-[35px] h-[30px] md:rounded-[10px] rounded-[7px] bg-orange text-white 2xl:text-base text-[10px] md:text-sm font-normal">Sign in</button>
            </div>
            <h1 class="block text-center lg:mt-3 md:mt-2 mt-1 2xl:text-base text-[10px] md:text-sm font-normal">or</h1>
            <div>
                <button class="w-full 2xl:h-[50px] lg:h-[40px] md:h-[35px] h-[30px] 2xl:text-base text-[10px] md:text-sm flex justify-center items-center bg-white/50 rounded-[10px] md:mt-2 mt-1 "><img class="mr-3 w-5 md:w-6 2xl:w-7" src="assets/image/g-icon.png">Sign in with Google</button>
            </div>
            <h1 class="block text-center 2xl:mt-5 lg:mt-3 md:mt-2 mt-1 text-grey 2xl:text-[15px] md:text-[13px] text-[10px]">Don't have an account?<a class="text-dark" href=""><span class="underline underline-offset-1">Sign Up </span></a></h1>
        </div>
    </div>
    <!-- Login Form End -->
</body>

</html>