@extends('admin-panel.admin')

@section('title', 'Характеристики товаров')

@section('content')
	<a class="href_button" href="/admin-panel/parameter_product/create">
  <div class="add_button">
    Добавить характеристику товара
  </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">Название товара</th>
      <th class="first">Название характеристики</th>
      <th class="first">Значение</th>
      <th class="first">Ред.</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($parameter_products as $parameter_product)
   <tr>
       <td class="id_item">{{ $parameter_product->id }}</td>
       <td>{{ $parameter_product->product->name }}</td>
       <td>{{ $parameter_product->parameter->name }}</td>
       <td>{{ $parameter_product->text }}</td>
       <td class="edit_button"><a href="{{ URL::to('admin-panel/parameter_product/' . $parameter_product->id) . '/edit' }}">Редактировать</a></td>
       <td class="delete_button">
        {{ Form::open(['method' => 'DELETE', 'route' => ['parameter_product.destroy', $parameter_product->id]]) }}
        <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
        {{ Form::close() }}
       </td>
   </tr>
   @endforeach
  </table>
@endsection