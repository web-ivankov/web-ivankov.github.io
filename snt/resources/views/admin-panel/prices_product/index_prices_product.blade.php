@extends('admin-panel.admin')

@section('title', 'Характеристики товаров')

@section('content')
	<a class="href_button" href="/admin-panel/prices_product/create">
  <div class="add_button">
    Добавить характеристику товара
  </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">Товар</th>
      <th class="first">Название цены</th>
      <th class="first">Значение цены</th>
      <th class="first">Ред.</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($prices_product as $price_product)
   <tr>
       <td class="id_item">{{ $price_product->id }}</td>
       <td>{{ $price_product->product->name }}</td>
       <td>{{ $price_product->price_name }}</td>
       <td>{{ $price_product->price }}</td>
       <td class="edit_button"><a href="{{ URL::to('admin-panel/prices_product/' . $price_product->id) . '/edit' }}">Редактировать</a></td>
       <td class="delete_button">
        {{ Form::open(['method' => 'DELETE', 'route' => ['prices_product.destroy', $price_product->id]]) }}
        <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
        {{ Form::close() }}
       </td>
   </tr>
   @endforeach
  </table>
  <div class="paginator">
    {{ $prices_product->links() }}
  </div>
@endsection