@extends('admin-panel.admin')

@section('title', 'Классы типов товаров')

@section('content')
  <h1>
    <td>{{ $product->id }}</td>
       <td>{{ $product->name }}</td>
        <td>{{ $product->type_product->name }}</td>
        <td>{{ $product->description }}</td>
       <td>{{ $product->price }}</td>
  </h1>
@endsection