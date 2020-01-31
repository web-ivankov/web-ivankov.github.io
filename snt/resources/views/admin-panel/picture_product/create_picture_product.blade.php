@extends('admin-panel.admin')

@section('title', 'Добавление новой картинки товара товара')

@section('content')
    <div class="wrapper-create">
            {{ Form::open(['route' => 'picture_product.store']) }}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Товар')    }}
            </div>
        </div>
        {!! 
            Form::select('product_id', $products, 'id')
        !!}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Картинка')    }}
            </div>
        </div>
        {!! 
            Form::select('picture_id', $pictures, 'id')
        !!}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Добавить')    }}
        {{ Form::close() }}
    </div>
@endsection