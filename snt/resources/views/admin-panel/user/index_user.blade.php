@extends('admin-panel.admin')

@section('title', 'Администраторы')

@section('content')
	<a class="href_button" href="/admin-panel/user/create">
  <div class="add_button">
    Добавить новый администратора
  </div>
  </a>
  <table class="simple-little-table" cellspacing='0'>
    <tr>
      <th class="first">УН</th>
      <th class="first">Имя</th>
      <th class="first">Эл-почта</th>
      <th class="first">Пароль</th>
      <th class="first">Ред.</th>
      <th class="first">Уд.</th>
    </tr>
    @foreach($users as $user)
   <tr>
       <td class="id_item">{{ $user->id }}</td>
       <td>{{ $user->name }}</td>
       <td>{{ $user->email }}</td>
       <td>{{ $user->password }}</td>
       <td class="edit_button"><a href="{{ URL::to('admin-panel/user/' . $user->id) . '/edit' }}">Редактировать</a></td>
       <td class="delete_button">
         {{ Form::open(['method' => 'DELETE', 'route' => ['user.destroy', $user->id]]) }}
         <input class="img_delete" type="image" src="/dist/img/delete.png" alt="Удалить">
         {{ Form::close() }}
       </td>
   </tr>
   @endforeach
  </table>
  <div class="paginator">
    {{ $users->links() }} 
  </div>
@endsection