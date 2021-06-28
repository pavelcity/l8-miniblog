@extends('layouts.site')
@section('title', 'Блог детальная')


@section('content')

<section class="text-blueGray-700 ">
	<div class="container flex flex-col items-center px-5 py-8 mx-auto">
		<div class="flex flex-col w-full mb-12 text-left lg:text-center">
			<h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:w-1/2 sm:text-6xl title-font"> 
				{{ $blog->title ?? 'no-data' }}
			</h1>
			<div class="w-full  mx-auto my-16 text-center lg:w-1/2">
				<img class="object-cover object-center w-full mb-8 lg:h-64 " src="{{ asset($blog->pic ?? 'uploads/not_image.jpg') }}" alt="blog">
			</div>
			<div class="mx-auto text-justify text-base font-medium leading-relaxed text-blueGray-700 lg:w-1/2">
				{!! $blog->descr ?? 'no-data' !!}
			</div>
			


		</div>

		<a href="{{ route('blog.home') }}" class="bg-indigo-500 text-white text-base py-1 px-10	rounded transition hover:bg-indigo-400">назад</a>
	</div>

	
</section>




</section>

@endsection