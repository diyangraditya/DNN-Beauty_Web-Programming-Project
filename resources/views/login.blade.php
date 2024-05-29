<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
    <title>Sign In | DNN Beauty</title>
</head>

<body class="h-screen bg-no-repeat bg-cover bg-login flex items-center justify-center font-poppins">
        <div class="flex flex-col bg-[#FAE1F5] w-[30%] px-9 py-12">
            <h1 class="text-[#FF69B4] text-3xl font-bold text-center">Log In</h1>
            @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Oops!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                </div>
            @elseif (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span> 
                </div>   
            @endif
            <form action="{{ route('login.post') }}" method="POST" class="flex flex-col mt-14 mb-8">
                @csrf
                <input type="email" name="email" id="email" class="border border-[#FD4E5D] rounded-md py-2 px-3 mb-5" placeholder="Your Email" required />

                <input type="password" name="password" id="password" class="border border-[#FD4E5D] rounded-md py-2 px-3 mb-1" placeholder="Your Password" required />
                <a class="text-sm" href="#">Lupa kata sandi?</a>
                
                <button type="submit" name="login" class="bg-[#FF69B4] w-fit px-7 self-center text-white mt-10 py-2 font-bold">
                    Log in
                </button>
                <p class="text-sm text-black text-center mt-3">
                    Belum punya akun?
                    <a href="{{ route('signup') }}" class="underline text-gray-600">Daftar sekarang</a>
                </p>
            </form>
        </div>
        <script src="script.js"></script>
</body>
</html>