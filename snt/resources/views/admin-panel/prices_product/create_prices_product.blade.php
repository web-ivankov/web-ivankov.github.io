@extends('admin-panel.admin')

@section('title', 'Добавление новой цены товара')

@section('content')
    <div class="wrapper-create">
            {{ Form::open(['route' => 'prices_product.store']) }}
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
                {{  Form::label('Title', 'Название цены')    }}
            </div>
        </div>
                {{  Form::text('price_name', '')   }}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Значение цены')  }}
            </div>
        </div>
                {{  Form::text('price', '')   }}
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Добавить')    }}
        {{ Form::close() }}
    </div>
@endsection