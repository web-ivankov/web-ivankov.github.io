@extends('admin-panel.admin')

@section('title', 'Редактирование администратора')

@section('content')
<div class="wrapper-create">
            {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'PUT']) !!}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'ФИО')	}}
            </div>
        </div>
                {{	Form::text('name', $user->name)	}}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'Эл-почта')	}}
            </div>
        </div>
                {{	Form::text('email', $user->email)	}}
        <div class="create-item">
            <div class="item-title">
                {{	Form::label('Title', 'Пароль')	}}
            </div>
        </div>
                {{	Form::text('password', $user->password)	}}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Добавить')    }}
        {{ Form::close() }}
    </div>
@endsection

