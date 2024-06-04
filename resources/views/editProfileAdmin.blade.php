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
  <title>Edit Akun | DNN Beauty</title>
</head>

<body class="h-screen bg-no-repeat bg-cover bg-white flex items-center justify-center font-poppins">
  <div class="flex flex-col bg-[#FAE1F5] w-[40%] px-9 py-12">
    <h1 class="text-[#FF69B4] text-3xl font-bold text-center">Edit Akun</h1>
    <form action="adminPage.php" method="POST" class="flex flex-col mt-14 mb-8">
      <label for="username" class="text-gray-400 text-sm mb-2">Username</label>
      <input type="text" name="username" id="username" class="border border-[#FD4E5D] rounded-md py-2 px-3 mb-5" placeholder="Your Username" value="nurularqh" required />
      <label for="password" class="text-gray-400 text-sm mb-2">Password (kosongkan jika tidak ingin mengganti)</label>
      <input type="password" name="password" id="password" class="border border-[#FD4E5D] rounded-md py-2 px-3 mb-1" placeholder="Your Password" required />
      <div class="flex items-center gap-x-3 justify-center">
        <a href="adminPage.php" class="bg-[#FF69B4] w-fit px-7 self-center text-white mt-10 py-2 font-bold">
          Kembali
        </a>
        <button type="submit" class="bg-green-700 w-fit px-7 self-center text-white mt-10 py-2 font-bold">
          Update
        </button>
      </div>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="script.js"></script>
</body>

</html>