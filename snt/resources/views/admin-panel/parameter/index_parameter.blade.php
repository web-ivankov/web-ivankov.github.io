@extends('admin-panel.admin')

@section('title', 'Все характеристики')

@section('content')
	<a class="href_button" href="/admin-panel/parameter/create">
  <div class="add_button">
    Создать новую характеристику
  </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">Название характеристики</th>
      <th class="first">Ред.</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($parameters as $parameter)
   <tr>
       <td class="id_item">{{ $parameter->id }}</td>
       <td>{{ $parameter->name }}</td>
       <td class="edit_button"><a href="{{ URL::to('admin-panel/parameter/' . $parameter->id) . '/edit' }}">Редактировать</a></td>
       <td class="delete_button">
          {{ Form::open(['method' => 'DELETE', 'route' => ['parameter.destroy', $parameter->id]]) }}
          <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
          {{ Form::close() }}
       </td> 
   </tr>
   @endforeach
  </table>
      <div class="paginator">
    {{ $parameters->links() }}
  </div>
@endsection