<div class="container mx-auto items-center border-t border-gray-500 mt-20">
	<footer class="text-blueGray-700 bg-white">
		<div class="flex flex-col flex-wrap p-5 mx-auto md:items-center md:flex-row">
		
			<a href="{{ route('home.page') }}" class="pr-2 lg:pr-8 lg:px-6 focus:outline-none">
				<div class="inline-flex items-center">
					{{-- <div class="w-2 h-2 p-2 mr-2 rounded-full bg-gradient-to-tr from-blue-500 to-blue-600">
					</div> --}}
					<svg class="h-5 w-auto sm:h-6 mt-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
						<path fill="#4F46E5" d="M4,6H20V16H4M20,18A2,2 0 0,0 22,16V6C22,4.89 21.1,4 20,4H4C2.89,4 2,4.89 2,6V16A2,2 0 0,0 4,18H0V20H24V18H20Z" />
				 </svg>
					<h2 class="block p-2 text-xl font-medium tracking-tighter text-black transition duration-500 ease-in-out transform cursor-pointer hover:text-blueGray-500 lg:text-x lg:mr-8"> miniblog </h2>
				</div>
			</a>

			<nav class="flex flex-wrap items-center justify-center mx-auto text-base md:ml-auto md:mr-auto">
				<a href="{{ route('home.page') }}" class="{{ Request::is('/') ? 'text-indigo-500 ' : 'text-gray-500' }} px-4 py-1 text-base transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Главная</a>
				<a href="#" class="px-4 py-1 mr-1 text-base text-blueGray-500 transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Блог</a>
				<a href="{{ route('contact.home') }}" class="{{ Request::is('contact') ? 'text-indigo-500 ' : 'text-gray-500' }} px-4 py-1 mr-1 text-base transition duration-500 ease-in-out transform rounded-md focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2 hover:text-black ">Контакты</a>
				
			</nav>
			<span class="inline-flex justify-center mt-2 mr-2 sm:ml-auto sm:mt-0 sm:justify-start">
				<a class="text-blue-500 hover:text-black">
					<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
						<path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
					</svg>
				</a>
				<a class="ml-3 text-blue-500 hover:text-black">
					<svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
						<path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
						</path>
					</svg>
				</a>
				<a class="ml-3 text-blue-500 hover:text-black">
					<svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
						<rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
						<path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
					</svg>
				</a>
				<a class="ml-3 text-blue-500 hover:text-black">
					<svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
						<path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z">
						</path>
						<circle cx="4" cy="4" r="2" stroke="none"></circle>
					</svg>
				</a>
			</span>
		</div>
	</footer>
</div>
