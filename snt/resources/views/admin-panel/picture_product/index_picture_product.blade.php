@extends('admin-panel.admin')

@section('title', 'Картинки товаров')

@section('content')
	<a class="href_button" href="/admin-panel/picture_product/create">
  <div class="add_button">
    Создать новый товар
  </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">УН товара</th>
      <th class="first">Название товара</th>
      <th class="first">УН картинки</th>
      <th class="first">Картинка</th>
      <th class="first">Ред.</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($picture_products as $picture_product)
   <tr>
       <td class="id_item">{{ $picture_product->id }}</td>
       <td>{{ $picture_product->product->id }}</td>
       <td>{{ $picture_product->product->name }}</td>
       <td>{{ $picture_product->picture->id }}</td>
       <td><img src=" {{$picture_product->picture->src_img}} " alt=""></td>
       <td class="edit_button"><a href="{{ URL::to('admin-panel/picture_product/' . $picture_product->id) . '/edit' }}">Редактировать</a></td>
       <td class="delete_button">
         {{ Form::open(['method' => 'DELETE', 'route' => ['picture_product.destroy', $picture_product->id]]) }}
           <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
         {{ Form::close() }}
       </td>
   </tr>
   @endforeach
  </table>
  <div class="paginator">
    {{ $picture_products->links() }}
  </div>
@endsection