@extends('welcome')

@section('title', 'Каталог')

@section('content')
	<div class="catalog">
			<div class="catalog-wrapper">
				<div class="catalog-menu">
					<a class="catalog-header" href="/catalog">
						<div class="wrapper-catalog-header">
							<h2>
								Каталог
							</h2>
						</div>
					</a>
					<ul class="catalog-main-menu">
						@foreach($type_products as $type_product)
							<a href="#">
								<li>
									<form action="/catalog">
										<input class="hidden" type="text" name="type_product_id" value="{{$type_product->id}}">
										<button class="btn-non-style" type="submit">
											<h2>
												{{ $type_product->name }}
											</h2>
										</button>
									</form>
								</li>
							</a>
						@endforeach
					</ul>
				</div>
				<div class="product-wraper">
					@foreach($products as $product)
						<div class="p-product-wp">
							<div class="product">
								<div class="product-header">
									<h3>{{ $product->name }}</h3>
								</div>
								<div class="product-img">
									@foreach($picture_products as $picture_product)
										<?php if ($picture_product->product_id == $product->id): ?>
											<img src="{{  $picture_product->picture->src_img  }}" alt="">
											@break
										<?php endif ?>
									@endforeach
								</div>
								<a class="href-button" href="/catalog/{{$product->id}}">
									<div class="product-button">
										<span>
											Подробнее
										</span>
									</div>
								</a>
							</div>
						</div>
					@endforeach
					
				</div>	
			</div>
		</div>
@endsection