@extends('admin-panel.admin')

@section('title', 'Редактирование товара')

@section('content')
	{!! Form::model($product, ['route' => ['product.update', $product->id], 'method' => 'PUT']) !!}
    	{{	Form::label('Title', 'Название')	}}
    	{{	Form::text('name', $product->name)	}}
    	{{	Form::label('Title', 'Описание')	}}
    	{{	Form::text('description', $product->description)	}}
		{{	Form::label('Title', 'Тип товара')	}}
    	{!!	
    		Form::select('type_product_id', $type_products, 'id')
    	!!}
    	{{	Form::submit('Сохранить')	}}
	{{ Form::close() }}
@endsection