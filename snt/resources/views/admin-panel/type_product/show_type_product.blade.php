@extends('admin-panel.admin')

@section('title', 'Классы типов товаров')

@section('content')
  <h1>
    {{  $type_product->name  }}
    {{  $type_product->class_type_product->name  }}
  </h1>
@endsection