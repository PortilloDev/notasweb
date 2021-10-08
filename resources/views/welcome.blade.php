<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Navigation</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
	</head>
	<body>
		<!-- Navbar goes here -->
		<nav class="w-auto h-40" style="background-color: #303A52">
			<div class="max-w-6xl mx-auto px-4">
				<div class="flex justify-between">
					<div class="flex space-x-7">
						<div>
							<!-- Website Logo -->
							<a href="#" class="flex items-center py-4 px-2">
								<img src="{{ asset('/storage/blog/image-nav.png') }}" alt="Logo" class="h-32 w-32 mr-2">
								<span class="font-semibold text-white text-5xl">Notas web</span>
							</a>
						</div>
					</div>
					<!-- Secondary Navbar items -->
					<div class="hidden md:flex items-center space-x-3 ">
						<a href="" class="py-4 px-2 text-white  font-semibold hover:text-gray-100 transition duration-300 ">Documentación</a>
						<a href="" class="py-4 px-2 text-white font-semibold hover:text-gray-100 transition duration-300">Blog</a>
						<a href="" class="py-4 px-2 text-white font-semibold hover:text-gray-100 transition duration-300">Portfolio</a>
						<a href="" class="py-4 px-2 text-white font-semibold hover:text-gray-100 transition duration-300">Contacto</a>
					</div>
					<!-- Mobile menu button -->
					<div class="md:hidden flex items-center">
						<button  class="outline-none mobile-menu-button">
						<svg class=" w-6 h-6 text-gray-500 "
							x-show="!showMenu"
							fill="none"
							stroke-linecap="round"
							stroke-linejoin="round"
							stroke-width="2"
							viewBox="0 0 24 24"
							stroke="currentColor"
							style="hover:gray"
						>
							<path d="M4 6h16M4 12h16M4 18h16"></path>
						</svg>
					</button>
					</div>
				</div>
			</div>
			<!-- mobile menu -->
			<div class="hidden mobile-menu">
				<ul class="">
					<li class="active"><a href="#" style="background-color:#9E579D " class="block text-sm px-2 py-4 text-black font-semibold"> <span >Home</span> </a></li>
					<li><a href="#services" style="hover:gray" class="block text-sm px-2 py-4  transition duration-300">Documentación</a></li>
					<li><a href="#about" style="hover:gray" class="block text-sm px-2 py-4  transition duration-300">Blog</a></li>
					<li><a href="#contact" style="hover:gray" class="block text-sm px-2 py-4  transition duration-300">Portfolio</a></li>
					<li><a href="#contact" style="hover:gray" class="block text-sm px-2 py-4  transition duration-300">Contacto</a></li>
				</ul>
			</div>
			<script>
				const btn = document.querySelector("button.mobile-menu-button");
				const menu = document.querySelector(".mobile-menu");

				btn.addEventListener("click", () => {
					menu.classList.toggle("hidden");
				});
			</script>
		</nav>
		
	</body>
</html>