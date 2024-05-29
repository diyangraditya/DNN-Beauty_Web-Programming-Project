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
		<title>About Us | DNN Beauty</title>
	</head>
	<body class="font-poppins">
		<nav class="py-4 px-10">
			<div class="flex items-center gap-x-3 mb-5">
				<img src="./assets/logo.png" alt="Logo DNN" class="h-24" />
				<h1 class="font-bold text-4xl">DNN Beauty</h1>
			</div>
			<div class="flex gap-x-10">
				<ul class="flex flex-1 gap-x-5 uppercase justify-between">
					<li>
						<a class="hover:underline" href="/">Home</a>
					</li>
					<li>
						<a class="hover:underline" href="collection">Collection</a>
					</li>
					<li>
						<a class="hover:underline" href="products">Our Product</a>
					</li>
					<li>
						<a class="hover:underline" href="arrival">New Arrival</a>
					</li>
					<li>
						<a class="hover:underline" href="bestseller">Best Seller</a>
					</li>
					<li class="font-bold underline">
						<a class="hover:underline" href="about">About Us</a>
					</li>
				</ul>
				<div class="flex gap-x-5 flex-none">
					<svg
						xmlns="http://www.w3.org/2000/svg"
						fill="none"
						viewBox="0 0 24 24"
						stroke-width="1.5"
						stroke="currentColor"
						class="w-6 h-6"
					>
						<path
							stroke-linecap="round"
							stroke-linejoin="round"
							d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z"
						/></svg
					><a href="cart"
						><svg
							xmlns="http://www.w3.org/2000/svg"
							fill="none"
							viewBox="0 0 24 24"
							stroke-width="1.5"
							stroke="currentColor"
							class="w-6 h-6"
						>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								d="M15.75 10.5V6a3.75 3.75 0 1 0-7.5 0v4.5m11.356-1.993 1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 0 1-1.12-1.243l1.264-12A1.125 1.125 0 0 1 5.513 7.5h12.974c.576 0 1.059.435 1.119 1.007ZM8.625 10.5a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Zm7.5 0a.375.375 0 1 1-.75 0 .375.375 0 0 1 .75 0Z"
							/></svg></a
					><a href="profile">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							viewBox="0 0 24 24"
							fill="currentColor"
							class="w-6 h-6"
						>
							<path
								fill-rule="evenodd"
								d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z"
								clip-rule="evenodd"
							/>
						</svg>
					</a>
				</div>
			</div>
		</nav>
		<div class="bg-[#FAE1F5] mt-12 px-8 py-12 text-center h-[300px] relative">
			<h1 class="text-5xl font-bold mb-8">Reach Our Team</h1>
			<p
				class="bg-[#F9BAC9] w-3/4 px-8 py-10 shadow-md absolute -bottom-10 left-1/2 -translate-x-1/2"
			>
				DNN Beauty adalah destinasi terpercaya untuk semua kebutuhan skincare
				dan kecantikan Anda. Sebagai pemimpin dalam industri kecantikan, kami
				menyediakan koleksi produk terbaik dari merek-merek ternama secara
				eksklusif untuk Anda, karena Kami percaya bahwa kecantikan adalah
				tentang lebih dari sekadar penampilan luar. Itu adalah tentang merawat
				diri dengan baik dari dalam dan luar.
			</p>
		</div>
		<div class="my-24 px-16">
			<h2 class="font-bold text-3xl">Let's Meet Our Office</h2>
			<div class="flex mt-7 gap-x-6">
				<img src="./assets/office-1.png" class="w-80" alt="" />
				<img src="./assets/office-2.png" class="w-80" alt="" />
				<div class="flex flex-col justify-center items-center mx-8">
					<p class="text-[#373737] text-3xl font-semibold mb-8">
						Malang, East Java
					</p>
					<div class="flex flex-col gap-y-5">
						<div class="flex items-center gap-x-5">
							<div class="bg-[#FD4E5D] text-white p-2 rounded-full">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="32"
									height="32"
									fill="currentColor"
									class="bi bi-geo-alt"
									viewBox="0 0 16 16"
								>
									<path
										d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"
									/>
									<path
										d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"
									/>
								</svg>
							</div>
							<p class="text-[#9F9F9F]">
								Jalan Terusan Cikampek 10b, Kel. Penanggungan, Kec. Klojen, Kota
								Malang, Jawa Timur
							</p>
						</div>
						<div class="flex items-center gap-x-5">
							<div class="bg-[#FD4E5D] text-white p-2 rounded-full">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="32"
									height="32"
									fill="currentColor"
									class="bi bi-envelope"
									viewBox="0 0 16 16"
								>
									<path
										d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"
									/>
								</svg>
							</div>
							<p class="text-[#9F9F9F]">dnnbeauty@gmail.com</p>
						</div>
						<div class="flex items-center gap-x-5">
							<div class="bg-[#FD4E5D] text-white p-2 rounded-full">
								<svg
									xmlns="http://www.w3.org/2000/svg"
									width="32"
									height="32"
									fill="currentColor"
									class="bi bi-telephone"
									viewBox="0 0 16 16"
								>
									<path
										d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.6 17.6 0 0 0 4.168 6.608 17.6 17.6 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.68.68 0 0 0-.58-.122l-2.19.547a1.75 1.75 0 0 1-1.657-.459L5.482 8.062a1.75 1.75 0 0 1-.46-1.657l.548-2.19a.68.68 0 0 0-.122-.58zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.68.68 0 0 0 .178.643l2.457 2.457a.68.68 0 0 0 .644.178l2.189-.547a1.75 1.75 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.6 18.6 0 0 1-7.01-4.42 18.6 18.6 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877z"
									/>
								</svg>
							</div>
							<p class="text-[#9F9F9F]">0274-983357</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-[#F9BAC9] px-20 py-12 text-center my-12">
			<h1 class="font-bold text-5xl text-[#373737]">Send Us a Message</h1>
			<p class="text-[#807878] text-2xl mt-3">We'll respond within 24 hours</p>
			<form action="" class="w-2/3 mx-auto my-8">
				<div class="flex items-center gap-x-8">
					<div class="flex flex-1 flex-col items-start">
						<label for="name" class="font-bold text-2xl text-[#373737]"
							>Name</label
						>
						<input
							type="text"
							class="w-full p-3 border border-[#000] rounded-md"
							id="name"
							required
						/>
					</div>
					<div class="flex flex-col flex-1 items-start">
						<label for="email" class="font-bold text-2xl text-[#373737]"
							>Email</label
						>
						<input
							type="email"
							id="email"
							class="w-full p-3 border border-[#000] rounded-md"
							required
						/>
					</div>
				</div>
				<div class="flex flex-1 flex-col items-start mt-7">
					<label for="message" class="font-bold text-2xl text-[#373737]"
						>Message</label
					>
					<textarea
						name="message"
						id="message"
						cols="30"
						rows="10"
						class="w-full p-3 border border-[#000] rounded-md"
					></textarea>
				</div>
				<button
					type="submit"
					class="bg-[#FD4E5D] px-16 py-3 uppercase text-white font-bold mt-8"
				>
					Send
				</button>
			</form>
		</div>
		<footer class="bg-[#FDCEDF] px-24 py-8">
			<div class="grid grid-cols-6 gap-x-10">
				<div class="col-span-2 flex flex-col items-start gap-y-5">
					<p class="text-2xl font-bold">Skin Shop</p>
					<p class="text-[#9F9F9F]">
						Kelompok 1 PEMWEB-B Sistem Informasi Universitas Brawijaya
					</p>
				</div>
				<div class="col-span-1 flex flex-col items-start gap-y-5">
					<a
						class="font-medium hover:underline hover:cursor-pointer text-[#9F9F9F]"
						>Links</a
					>
					<a class="font-medium hover:underline hover:cursor-pointer" href="/">Home</a>
					<a class="font-medium hover:underline hover:cursor-pointer" href="/products">Shop</a>
					<a class="font-medium hover:underline hover:cursor-pointer" href="/about">About</a>
					<a class="font-medium hover:underline hover:cursor-pointer" href="/about">Contact</a>
				</div>
				<div class="col-span-1 flex flex-col items-start gap-y-5">
					<a
						class="font-medium hover:underline hover:cursor-pointer text-[#9F9F9F]"
						>Help</a
					>
					<a class="font-medium hover:underline hover:cursor-pointer"
						>Payment Options</a
					>
					<a class="font-medium hover:underline hover:cursor-pointer"
						>Costumer Care</a
					>
					<a class="font-medium hover:underline hover:cursor-pointer"
						>Privacy Policies</a
					>
				</div>
				<div class="col-span-2 flex flex-col items-start gap-y-5">
					<p class="font-medium text-[#9F9F9F]">Social Media</p>
					<div class="flex gap-x-5">
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="32"
							height="32"
							fill="currentColor"
							class="bi bi-instagram"
							viewBox="0 0 16 16"
						>
							<path
								d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"
							/>
						</svg>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="32"
							height="32"
							fill="currentColor"
							class="bi bi-facebook"
							viewBox="0 0 16 16"
						>
							<path
								d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"
							/>
						</svg>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="32"
							height="32"
							fill="currentColor"
							class="bi bi-youtube"
							viewBox="0 0 16 16"
						>
							<path
								d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.01 2.01 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.01 2.01 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31 31 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.01 2.01 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A100 100 0 0 1 7.858 2zM6.4 5.209v4.818l4.157-2.408z"
							/>
						</svg>
						<svg
							xmlns="http://www.w3.org/2000/svg"
							width="32"
							height="32"
							fill="currentColor"
							class="bi bi-twitter"
							viewBox="0 0 16 16"
						>
							<path
								d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"
							/>
						</svg>
					</div>
				</div>
			</div>
			<p>2024 Kelompok 1 All rights reverved</p>
		</footer>
    </body>
</html>
