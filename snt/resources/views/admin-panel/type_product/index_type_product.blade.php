@extends('admin-panel.admin')

@section('title', 'Типы товаров')

@section('content')
	<a class="href_button" href="/admin-panel/type_product/create">
  <div class="add_button">
    Создать новый тип товара
  </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">Название типа товара</th>
      <th class="first">Название класса типа товара</th>
      <th class="first">Ред.</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($type_products as $type_product)
    <tr>
       <td class="id_item">{{ $type_product->id }}</td>
       <td>{{ $type_product->name }}</td>
       <td>{{ $type_product->class_type_product->name }}</td>
       <td class="edit_button"><a href="{{ URL::to('admin-panel/type_product/' . $type_product->id) . '/edit' }}">Редактировать</a></td>
       <td class="delete_button">
        {{ Form::open(['method' => 'DELETE', 'route' => ['type_product.destroy', $type_product->id]]) }}
        <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
        {{ Form::close() }}
       </td>
   </tr>
   @endforeach
  </table>
  <div class="paginator">
    {{ $type_products->links() }}
  </div>
@endsection