@extends('admin-panel.admin')

@section('title', 'Классы типов товаров')

@section('content')
	<a class="href_button" href="/admin-panel/class_type_product/create">
  <div class="add_button">
    Создать новый класс
  </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">Название класса типа товара</th>
      <th class="first">Ред.</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($class_type_products as $class_type_product)
   <tr>
      <td class="id_item">{{ $class_type_product->id }}</td>
      <td>{{ $class_type_product->name }}</td>
      <td class="edit_button"><a href="{{ URL::to('admin-panel/class_type_product/' . $class_type_product->id) . '/edit' }}">
        Редактировать</a></td>
      <td class="delete_button">
        {{ Form::open(['method' => 'DELETE', 'route' => ['class_type_product.destroy', $class_type_product->id]]) }}
        <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
        {{ Form::close() }}
      </td>
   </tr>
   @endforeach
  </table>
  <div class="paginator">
    {{ $class_type_products->links() }}
  </div>
@endsection