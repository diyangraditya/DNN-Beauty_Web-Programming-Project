<?php
if (isset($_POST['submit'])) {
  header("Location: adminPage.php");
  exit();
}

?>
<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          backgroundImage: {
            login: "url('/assets/bg-login.png')",
          },
          fontFamily: {
            poppins: ["Poppins", "sans-serif"],
          },
        },
      },
    };
  </script>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic" rel="stylesheet" />
  <title>Sign In | DNN Beauty</title>
</head>

<body class="h-screen bg-no-repeat bg-cover bg-login flex items-center justify-center font-poppins">
  <div class="flex flex-col bg-[#FAE1F5] w-[30%] px-9 py-12">
    <h1 class="text-[#FF69B4] text-3xl font-bold text-center">Log In as Admin</h1>
    <form method="POST" class="flex flex-col mt-14 mb-8">
      <input type="email" name="email" id="email" class="border border-[#FD4E5D] rounded-md py-2 px-3 mb-5" placeholder="Your Username/Email" required />
      <input type="password" name="password" id="password" class="border border-[#FD4E5D] rounded-md py-2 px-3 mb-1" placeholder="Your Password" required />
      <a class="text-sm" href="#">Lupa kata sandi?</a>
      <button type="submit" name="submit" class="bg-[#FF69B4] w-fit px-7 self-center text-white mt-10 py-2 font-bold">
        Sign In
      </button>
      <p class="text-sm text-black text-center mt-3">
        Belum punya akun?
        <a href="signup.php" class="underline text-gray-600">Daftar sekarang</a>
      </p>
      <a href="login.php" class="mx-auto underline text-gray-600 text-sm mt-3">Kembali ke halaman login sebagai user</a>
    </form>
  </div>
  <script src="script.js"></script>
</body>

</html>