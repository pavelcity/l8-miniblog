@extends('layouts.site')
@section('title', 'Блог детальная')


@section('content')

<section class="text-blueGray-700 ">
	<div class="container flex flex-col items-center px-5 py-8 mx-auto">
		<div class="flex flex-col w-full mb-12 text-left lg:text-center">
			<h1 class="mx-auto mb-12 text-2xl font-semibold leading-none tracking-tighter text-black lg:w-1/2 sm:text-6xl title-font"> A Long headline to switch your visitors into users. </h1>
			<p class="mx-auto text-base font-medium leading-relaxed text-blueGray-700 lg:w-1/2">You're about to launch soon and must be 100% focused on your product. Don't loose precious days designing, coding the landing page and testing . </p>
			<div class="grid w-full grid-cols-2 gap-8 mx-auto my-16 text-center lg:grid-cols-4 lg:w-1/2">
				<div class="flex items-center justify-center ">
					<img src="https://d33wubrfki0l68.cloudfront.net/e018a9cb3c198579040cd7c76efc4319d9d73065/78dee/logos/notion.svg" alt="Todoist Logo" class="block object-contain h-12">
				</div>
				<div class="flex items-center justify-center ">
					<img src="https://d33wubrfki0l68.cloudfront.net/3c4dca12c4e61997e31aa2810408ec46ea6b300c/35012/logos/jb_rider.svg" alt="Slack Logo" class="block object-contain h-12">
				</div>
				<div class="flex items-center justify-center ">
					<img src="https://d33wubrfki0l68.cloudfront.net/f89a5bbfd36f091aa28386a9a5d00beeac739466/a67a2/logos/marvel.svg" alt="Typeform Logo" class="block object-contain h-12">
				</div>
				<div class="flex items-center justify-center ">
					<img src="https://d33wubrfki0l68.cloudfront.net/00e9e5a3abb0f4a67423ee14f9822db4f0e22172/46c6b/logos/paypal.svg" alt="Algolia Logo" class="block object-contain h-12">
				</div>
			</div>
		</div>
	</div>
</section>




</section>

@endsection