@extends('admin-panel.admin')

@section('title', 'Добавление изображение товара')

@section('content')
	<h1>Загрузка изображения на сервер</h1>
	<div class="container">
		<form action="{{	route('picture.upload')	}}" method="post" enctype="multipart/form-data">
			{{	csrf_field()  }}
			
			<div class="form-group">
				<input type="file" name="image">
			</div>

			<button type="submit">Загрузка</button>
		</form>
		@isset($path)
    	<img src="{{	asset('/storage/' .$path)	}}" alt="">
    	@endisset
	</div>
@endsection