@extends('admin-panel.admin')

@section('title', 'Добавление изображение товара')

@section('content')
<div class="wrapper-create">
        {{ Form::open(['route' => 'picture.store']) }}
        @isset($path)
        <img src="{{    asset('/storage/' .$path)   }}" alt="">
        @endisset
        {{  Form::text('src_img', asset('/storage/' .$path))}}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Добавить')    }}
        {{ Form::close() }}
    </div>
@endsection

