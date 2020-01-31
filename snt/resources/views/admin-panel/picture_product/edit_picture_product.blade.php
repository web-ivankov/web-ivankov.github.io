@extends('admin-panel.admin')

@section('title', 'Редактирование товара')

@section('content')
    <div class="wrapper-create">
            {!! Form::model($picture_product, ['route' => ['picture_product.update', $picture_product->id], 'method' => 'PUT']) !!}
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