@extends('layouts.admin')
@section('title', 'Блог создать')


@section('content')



	<!--breadcrumb-->
	<div class="page-breadcrumb d-none d-md-flex align-items-center mb-3">
		<div class="breadcrumb-title pr-3">Блог</div>
		<div class="pl-3">
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb mb-0 p-0">
					<li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}"><i class='bx bx-home-alt'></i></a>
					</li>
					<li class="breadcrumb-item active" aria-current="page"><a href="{{ route('dashboard.blog.home') }}">Блог</a></li>
					<li class="breadcrumb-item active" aria-current="page">Создать</li>
				</ol>
			</nav>
		</div>
	</div>
	<!--end breadcrumb-->












	<div class="card radius-5">
		<div class="card-body">



			@if(true)
			<form action="{{ route('dashboard.blog.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
				@csrf
		
				<div class="card-title">
					<button type="submit" class="btn btn-primary m-1 px-5 py-2">Создать</button>
					<a href="{{ route('dashboard.blog.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>
				</div>
				<hr/>



			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Блог</a>
				</li>
				</li>
			</ul>








			<div class="tab-content p-3" id="myTabContent">

				{{-- #статья --}}
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					
					
								{{-- ### --}}

								<div class="form-group">
									<label for="category_id">Выберите категорию</label>
									<select class="form-control form-control" name="category_id" required>
										<option selected disabled>Выберите ...</option>
										@foreach ($cats as $cat)
												<option value="{{ $cat->id }}">{{ $cat->title }}</option>
										@endforeach
									</select>
									@error('category_id')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>





					
								<br>
								<div class="form-group">
									<label for="title">Название</label>
									<input class="form-control form-control-lg" id="title" name="title" type="text" placeholder="Название" value="{{ old('title') }}">
									@error('title')
										<p style="color:red;">{{ $message }}</p>
									@enderror
								</div>

	
	
					
					
					
					
	
								<br>
								<label for="short">картинка </label>
								<div class="mt-0">
									<img src="{{ asset('uploads/not_image.jpg') }}" width="400" alt="" id="showPic">
								</div>
					
								<br>
								@error('pic')
									<p style="color:red; font-size:12px;">{{ $message }}</p>
								@enderror
								<div class="input-group mb-1 mt-0">
									<div class="input-group-prepend">	<span class="input-group-text" id="pic">Картинка</span>
									</div>
									<div class="custom-file">
										<input type="file" name="pic" class="custom-file-input " id="avatar" aria-describedby="avatar">
										<label class="custom-file-label" for="avatar">Выберите файл</label>
									</div>
									
								</div>
								<br>
								<br>
					
					


					
					
								<div class="form-group">
									@error('short')
										<p style="color:red;">{{ $message }}</p>
									@enderror
									<label for="short">Короткое описание (текст превью)</label>
									<textarea id="short" name="short" class="form-control" rows="10" cols="3">{{ old('short') }}</textarea>
								</div>
					
					
								<div class="form-group">
									@error('descr')
										<p style="color:red;">{{ $message }}</p>
									@enderror
									<label for="descr">Описание коллекции</label>
									<textarea id="descr" name="descr" class="form-control" rows="10" cols="3">{{ old('descr') }}</textarea>
								</div>
					
		
				</div>
				{{-- #статья END --}}


			</div>





 
			<hr>
			<button type="submit" class="btn btn-primary m-1 px-5 py-2">Создать</button>
			<a href="{{ route('dashboard.blog.home') }}" class="btn btn-outline-primary m-1 px-5 py-2">Назад</a>

		</form>
		@endif



		</div>
	</div>





	







@push('scripts')
	<script>
		$(document).ready(function(){
			$('#avatar').change(function(e){
				let reader = new FileReader();
				reader.onload = function(e) {
					$('#showPic').attr('src', e.target.result);
				}
				reader.readAsDataURL(e.target.files['0']);
			});
		});
	</script>	


<script>
	$(document).ready(function(){
		$('#avatar2').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic2').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	





<script>
	$(document).ready(function(){
		$('#avatar400_2').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_2').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
	$(document).ready(function(){
		$('#avatar375_2').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375_2').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	



<script>
	$(document).ready(function(){
		$('#avatar400_3').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_3').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
	$(document).ready(function(){
		$('#avatar375_3').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375_3').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	



<script>
	$(document).ready(function(){
		$('#avatar400_4').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_4').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
	$(document).ready(function(){
		$('#avatar375_4').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375_4').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	


<script>
	$(document).ready(function(){
		$('#avatar400_5').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic400_5').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
	$(document).ready(function(){
		$('#avatar375_5').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPic375_5').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	



<script>
	$(document).ready(function(){
		$('#avatarogimg').change(function(e){
			let reader = new FileReader();
			reader.onload = function(e) {
				$('#showPicogimg').attr('src', e.target.result);
			}
			reader.readAsDataURL(e.target.files['0']);
		});
	});
</script>	






@endpush







@push('scripts')
	<script src="https://cdn.ckeditor.com/ckeditor5/27.1.0/classic/ckeditor.js"></script>


	<script>
		ClassicEditor
				.create( document.querySelector('#short') )
				.catch( error => {
						console.error( error );
				} );
	</script>

	<script>
		ClassicEditor
				.create( document.querySelector('#descr') )
				.catch( error => {
						console.error( error );
				} );
	</script>

@endpush







@endsection


