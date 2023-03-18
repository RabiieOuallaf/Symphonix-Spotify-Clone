<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register</title>
    @vite(['resources/css/app.css'])
</head>
<body class="flex justify-center mt-5 bg-violet-900">
    
    <section class="register flex w-[75%] h-[75%] overflow-hidden justify-center items-center bg-neutral-900 rounded-lg">
        <!-- register section image -->

        
        <div class="register-image w-[42%]">
            <!-- Register button -->
            <input class="btn absolute text-white z-10 top-10 mx-5 border px-4 py-2 rounded-md hover:bg-violet-900 duration-200" type="submit" value="Login" >
            <img src="{{asset('images/backgrounds/loginBackground.jpg')}}" alt="phone playing spotify" class="register-img relative rounded-md">
        </div>
        
        <form method="POST" action="/register/authentication" class="register-form w-[58%] flex flex-col gap-10 justify-center items-center m-auto">
                @csrf
                <!-- greeting -->
                <div class="greeting text-center">
                    <h2 class="text-4xl font-bold text-white">Welcome home 👋</h2>
                    <h3 class="text-xl font-semibold text-white">We all need a safe place</h3>
                </div>

                <!-- username input -->
                <div class="username flex flex-col">
                    <label for="username" class="text-white text-xl font-semibold my-3">username :</label>
                    <input type="text" name="username" placeholder="Rabie ouallaf" class="w-[100%] h-8 p-5 text-white radius-full mx-5 rounded-md border-white border-2 border-white bg-inherit ">
                </div>

                <!-- email input -->
                <div class="email flex flex-col">
                    <label for="email" class="text-white text-xl font-semibold my-3">Email :</label>
                    <input type="text" name="email" placeholder="Rabie@gmail.com" class="w-[100%] h-8 p-5 text-white radius-full mx-5 rounded-md border-white border-2 border-white bg-inherit ">
                </div>
    
                <!-- password -->
                <div class="password flex flex-col">
                    <label for="name" class="text-white text-xl  font-semibold my-3">Password :</label>
                    <input type="password" name="password" placeholder="****************************" class="w-[100%] h-8 p-5 text-white radius-full mx-5 rounded-md border-white border-2 border-white bg-inherit">
                </div>
    
                <!-- Submit -->
    
                <div class="submit">
                    <input type="submit" value="register" class="text-white w-[100%] px-20 py-1 rounded-md bg-violet-900 hover:bg-inherit ease-in duration-200 border border-white mx-5 ">
                </div>            

        </form>
        

    </section>
</body>
</html>