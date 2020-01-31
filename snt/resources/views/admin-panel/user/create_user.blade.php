@extends('admin-panel.admin')

@section('title', 'Добавление администратора')

@section('content')
<div class="wrapper-create">
            {{ Form::open(['route' => 'user.store']) }}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'ФИО')	}}
            </div>
        </div>
                {{	Form::text('name', '')	}}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'Эл-почта')	}}
            </div>
        </div>
                {{	Form::text('email', '')	}}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'Пароль')	}}
            </div>
        </div>
                {{	Form::text('password', '')	}}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Добавить')    }}
        {{ Form::close() }}
    </div>
@endsection

