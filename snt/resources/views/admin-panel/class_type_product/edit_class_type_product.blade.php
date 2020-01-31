@extends('admin-panel.admin')

@section('title', 'Редактирование класса типов товаров')

@section('content')
<div class="wrapper-create">
            {!! Form::model($class_type_product, ['route' => ['class_type_product.update', $class_type_product->id], 'method' => 'PUT']) !!}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'Название')	}}
            </div>
        </div>
                {{	Form::text('name', $class_type_product->name)	}}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Добавить')    }}
        {{ Form::close() }}
    </div>
@endsection





