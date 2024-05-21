<!DOCTYPE html>
<html lang="id">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite('resources/css/app.css')
		<script src="https://cdn.tailwindcss.com"></script>
		
		<link
			href="https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"
			rel="stylesheet"
		/>
		<title>Signup | DNN Beauty</title>
	</head>
	<body
		class="h-screen bg-no-repeat bg-cover bg-login flex items-center justify-center font-poppins"
	>
		<div class="flex-col bg-[#FAE1F5] w-[30%] px-9 py-12">
			<h1 class="text-[#FF69B4] text-3xl font-bold text-center">Sign Up</h1>
			<form action="" method="POST" class="flex flex-col mt-14 mb-8">
				<div class="flex flex-col space-y-5">
					<input
						type="text"
						name="name"
						id="name"
						class="border border-[#FD4E5D] rounded-md py-2 px-3"
						placeholder="Your Name"
						required
					/>
					<input
						type="email"
						name="email"
						id="email"
						class="border border-[#FD4E5D] rounded-md py-2 px-3"
						placeholder="Your Username/Email"
						required
					/>
					<input
						type="password"
						name="password"
						id="password"
						class="border border-[#FD4E5D] rounded-md py-2 px-3"
						placeholder="Your Password"
						required
					/>
					<input
						type="password"
						name="confirm-password"
						id="confirm-password"
						class="border border-[#FD4E5D] rounded-md py-2 px-3"
						placeholder="Confirm Password"
						required
					/>
				</div>
				<button
					type="submit"
					class="bg-[#FF69B4] w-fit px-7 self-center text-white mt-10 py-2 font-bold"
				>
					Daftar
				</button>
				<p class="text-sm text-black text-center mt-3">
					Sudah menjadi anggota?
					<a href="index.php" class="underline text-gray-600">Masuk</a>
				</p>
			</form>
		</div>
</div>

</body>
</html>
