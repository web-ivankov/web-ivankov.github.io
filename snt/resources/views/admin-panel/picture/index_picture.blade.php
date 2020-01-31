@extends('admin-panel.admin')

@section('title', 'Изображения товаров')

@section('content')
<a class="href_button" href="{{ route('picture.upload') }}">
  <div class="add_button">
    Добавить новое изображение товара
  </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">Изображение</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($pictures as $picture)
   <tr>
       <td class="id_item">{{ $picture->id }}</td>
       <td><img src="{{ $picture->src_img }}" alt=""></td>
       <td class="delete_button">
        {{ Form::open(['method' => 'DELETE', 'route' => ['picture.destroy', $picture->id]]) }}
        <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
        {{ Form::close() }}
       </td>
   </tr>
   @endforeach
  </table>
@endsection