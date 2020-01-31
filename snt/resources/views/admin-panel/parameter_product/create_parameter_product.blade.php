@extends('admin-panel.admin')

@section('title', 'Добавление характеристики товара')

@section('content')
    <div class="wrapper-create">
            {{ Form::open(['route' => 'parameter_product.store']) }}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Название товара') }}
            </div>
        </div>
        {!! 
            Form::select('product_id', $products, 'id')
        !!}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Название характеристики')  }}
            </div>
        </div>
        {!! 
            Form::select('parameter_id', $parameters, 'id')
        !!}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Текст')   }}
            </div>
        </div>
                {{  Form::text('text', '')  }}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Добавить')    }}
        {{ Form::close() }}
    </div>
@endsection

