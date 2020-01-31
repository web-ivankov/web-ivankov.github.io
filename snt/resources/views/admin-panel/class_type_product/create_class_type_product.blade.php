@extends('admin-panel.admin')

@section('title', 'Добавление класса типов товаров')

@section('content')
<div class="wrapper-create">
            {{ Form::open(['route' => 'class_type_product.store']) }}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'Название')	}}
            </div>
        </div>
                {{	Form::text('name', '')	}}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{	Form::submit('Добавить')	}}
        {{ Form::close() }}
    </div> 	
@endsection