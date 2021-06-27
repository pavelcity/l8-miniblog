@extends('layouts.site')
@section('title', 'Главная')


@section('content')


 



<section class="text-gray-600 body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
      <img class="object-cover object-center rounded" alt="hero" src="https://images.unsplash.com/photo-1500989145603-8e7ef71d639e?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1510&q=80">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Но́вости — оперативная информация, которая представляет интерес для аудитории
      </h1>
      <p class="mb-8 leading-relaxed">Издавна новости распространялись, зачастую в искажённом виде, как слухи, от человека к человеку. Официальные новости в древности доставляли гонцы, объявляли их для всеобщего сведения глашатаи. </p>
      <div class="flex justify-center">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Блог</button>
        <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">Контакты</button>
      </div>
    </div>
  </div>
</section>




<section class="text-gray-600 body-font">
  <div class="container px-5 py-4 mx-auto">
    <div class="flex flex-col text-center w-full mb-2">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Блог</h1>
    </div>
  </div>
</section>








<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-4 mx-auto">
    <div class="-my-8 divide-y-2 divide-gray-100">


			@forelse($blogs as $blog)
				<div class="py-8 flex flex-wrap md:flex-nowrap">
					<div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
						<span class="font-semibold title-font text-gray-700">
							{{ $blog->category->title ?? 'не указано' }}
						</span>
						<span class="mt-1 text-gray-500 text-sm">
							{{ $blog->created_at ?? 'нет даты' }}
						</span>
					</div>
					<div class="md:flex-grow">
						<h2 class="text-2xl font-medium text-gray-900 title-font mb-2">
							{{ $blog->title ?? 'no-data' }}
						</h2>
						<p class="leading-relaxed">
							{!! $blog->short ?? 'no-data' !!}
						</p>
						<a href="{{ route('blog.detail') }}" class="text-indigo-500 inline-flex items-center mt-4">Читать
							<svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
								<path d="M5 12h14"></path>
								<path d="M12 5l7 7-7 7"></path>
							</svg>
						</a>
					</div>
				</div>
			@empty
				<p class="mx-auto text-center font-xl">нет данных</p>
			@endforelse




    </div>
  </div>
</section>







	

@endsection