@extends('admin-panel.admin')

@section('title', 'Добавление нового товара')

@section('content')
    <div class="wrapper-create">
            {{ Form::open(['route' => 'product.store']) }}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Название')    }}
            </div>
        </div>
                {{  Form::text('name', '')  }}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Описание')    }}
            </div>
        </div>
                {{  Form::text('description', '')   }}
        <div class="create-item">
            <div class="item-title">
                {{  Form::label('Title', 'Тип товара')  }}
            </div>
        </div>
                {!! 
                    Form::select('type_product_id', $type_products, 'id')
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