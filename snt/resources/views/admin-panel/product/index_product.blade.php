@extends('admin-panel.admin')

@section('title', 'Товары')

@section('content')
	<a class="href_button" href="/admin-panel/product/create">
    <div class="add_button">
      Создать новый товар
    </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">Название товара</th>
      <th class="first">Тип товара</th>
      <th class="first">Описание</th>
      <th class="first">Ред.</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($products as $product)
   <tr>
       <td class="id_item">{{ $product->id }}</td>
       <td>{{ $product->name }}</td>
       <td>{{ $product->type_product->name }}</td>
       <td>{{ $product->description }}</td>
       <td class="edit_button"><a href="{{ URL::to('admin-panel/product/' . $product->id) . '/edit' }}">Редактировать</a></td>
       <td class="delete_button">
         {{ Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->id]]) }}
           <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
         {{ Form::close() }}
       </td>
   </tr>
   @endforeach
  </table>
  <div class="paginator">
    {{ $products->links() }}
  </div>
@endsection