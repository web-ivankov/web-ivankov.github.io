@extends('admin-panel.admin')

@section('title', 'Редактирование характеристики')

@section('content')
<div class="wrapper-create">
            {!! Form::model($parameter, ['route' => ['parameter.update', $parameter->id], 'method' => 'PUT']) !!}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'Название')	}}
            </div>
        </div>
    	{{	Form::text('name', $parameter->name)	}}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Добавить')    }}
        {{ Form::close() }}
    </div>
@endsection

