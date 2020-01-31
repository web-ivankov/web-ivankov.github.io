@extends('admin-panel.admin')

@section('title', 'Редактирование цены товара')

@section('content')
    <div class="wrapper-create">
            {!! Form::model($price_product, ['route' => ['prices_product.update', $price_product->id], 'method' => 'PUT']) !!}
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
        {{  Form::text('price_name', $price_product->price_name)  }}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Значение цены')    }}
            </div>
        </div>
        {{  Form::text('price', $price_product->price)  }}
        
        <div class="create-item">
            <div class="item-title">
                <div class="accept_text" for="">Убедитесь что вы заполнили все поля</div>
            </div>
        </div> 
                {{   Form::submit('Сохранить')    }}
        {{ Form::close() }}
    </div>
@endsection