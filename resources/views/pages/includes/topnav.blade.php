 <!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-white">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">
    <div class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
      <div class="flex justify-start lg:w-0 lg:flex-1">
        <a href="{{ route('home.page') }}">
          <span class="sr-only">miniblog</span>
					<svg class="h-8 w-auto sm:h-10" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1"  width="24" height="24" viewBox="0 0 24 24">
						<path fill="#4F46E5" d="M4,6H20V16H4M20,18A2,2 0 0,0 22,16V6C22,4.89 21.1,4 20,4H4C2.89,4 2,4.89 2,6V16A2,2 0 0,0 4,18H0V20H24V18H20Z" />
				 </svg>
        </a>
      </div>




      <nav class="hidden md:flex space-x-10">

				<a href="{{ route('home.page') }}" class="{{ Request::is('/') ? 'text-indigo-500 ' : 'text-gray-500' }}text-base font-medium  hover:text-gray-900">
          Главная
        </a>


        <a href="{{ route('blog.home') }}" class="{{ Request::is('blog*') ? 'text-indigo-500 ' : 'text-gray-500' }}text-base font-medium  hover:text-gray-900">
          Блог
        </a>

        <a href="{{ route('contact.home') }}" class="{{ Request::is('contact') ? 'text-indigo-500 ' : 'text-gray-500' }}text-base font-medium  hover:text-gray-900">
          Контакты
        </a>

 
      </nav>
      <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
        {{-- <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
          Войти
        </a> --}}
        <a href="{{ route('dashboard.home') }}" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-indigo-600 hover:bg-indigo-700">
          Войти
        </a>
      </div>
    </div>
  </div>
</div>
