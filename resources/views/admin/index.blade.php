@extends('layouts.admin')
@section('title', 'Админка')


@section('content')

<div class="row">
	



	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.category.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-primary">для блога</p>
						<h4 class="mb-0 text-primary">Категории</h4>
					</div>
				</div>
			</div>
		</a>
	</div>

	


	<div class="col-12 col-lg-4">
		<a href="{{ route('dashboard.blog.home') }}" class="card radius-5">
			<div class="card-body">
				<div class="d-flex mb-2">
					<div>
						<p class="mb-0 font-weight-bold text-secondary">настроить</p>
						<h4 class="mb-0 text-secondary">Блог</h4>
					</div>
				</div>
			</div>
		</a>
	</div>









	




	



</div>









@endsection


