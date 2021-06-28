@extends('layouts.site')
@section('title', 'Категории')


@section('content')

<section class="text-blueGray-700 ">
	<div class="container flex flex-col items-center px-5 py-8 mx-auto">
		<div class="flex flex-col w-full mb-2 text-left lg:text-center">
			<h1 class="mx-auto mb-1 text-2xl font-semibold leading-none tracking-tighter text-black lg:w-1/2 sm:text-6xl title-font"> Категория </h1>
				<div class="text-indigo-500 text-xl">{{ $category->title ?? 'no-data' }}</div>
		</div>
	</div>
</section>






<div class="container items-center px-5 py-8 mx-auto lg:px-4">
	<div class="flex flex-wrap mb-12 text-left">
		

		@if(true)
		@forelse($blogs as $blog)
			<div class="w-full lg:w-1/3">
				<div class="p-6">
					<a href="{{ route('blog.detail', $blog->slug) }}">
						<img class="object-cover object-center w-full mb-8 lg:h-48 md:h-36" src="{{ asset($blog->pic ?? 'uploads/not_image.jpg') }}" alt="blog">
					</a>
					<h2 class="mb-2 text-xs font-semibold tracking-widest text-black uppercase title-font">
						{{ $blog->category->title ?? 'катгория не указана' }}
					</h2>
					
					<a href="{{ route('blog.detail', $blog->slug) }}">
						<h1 class="mx-auto mb-4 text-2xl font-semibold leading-none tracking-tighter text-black hover:text-indigo-500 transition lg:text-3xl title-font"> 
							{{ $blog->title ?? 'no-data' }} 
						</h1>
					</a>

					<p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 ">
						{!! Str::limit($blog->short, 100) ?? 'no-data' !!}
					</p>
					<a href="{{ route('blog.detail', $blog->slug) }}" class="inline-flex items-center mt-auto font-semibold text-blue-600 lg:mb-0 hover:text-black " title="read more"> Читать » </a>
				</div>
			</div>
		@empty
			<p class="mx-auto text center text-xl">ничего нет</p>
		@endforelse
		@endif
		




	</div>
</div>
</section>

@endsection