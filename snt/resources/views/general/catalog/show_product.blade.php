@extends('welcome')

@section('title', "$products->name")

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
				<div class="product-description">
					<div class="description-wrapper">
						<h1 style="text-transform: uppercase;">
							{{$products->name}}
						</h1>
						<div class="description-top">
							<div class="description-img">
								@foreach($picture_products as $picture_product)
									<?php if ($picture_product->product_id == $products->id): ?>
										<img src="{{  $picture_product->picture->src_img  }}" alt="">
									<?php endif ?>
								@endforeach
							</div>
							<div class="right-description">
								<div style="font-size: 19px" class="description-buy">
									<h1>Цена:</h1>
									@foreach($prices_product as $price_product)
										<?php if ($price_product->product_id == $products->id): ?>

										<div class="prices"><p style="margin-top: 10px; text-align: left;"> {{$price_product->price_name}} </p><b style="text-align: center; margin-top: 10px;">{{$price_product->price}}</b></div>

										<?php endif ?>
									@endforeach
									<a class="href-button-buy" href="">
										<div class="buy-button">
											<span style="font-weight: 700;">
												Купить
											</span>
										</div>
									</a>
								</div>
								<div class="description-parameter">
									<h2>
										Характеристики
									</h2>
									<div class="parameter">
										@foreach($parameters_product as $parameter_product)
											<?php if ($parameter_product->product_id == $products->id): ?>
												<h3>
													{{$parameter_product->parameter->name}}: {{$parameter_product->text}}
												</h3>
											<?php endif ?>
										@endforeach
									</div>
								</div>
							</div>
						</div>
						<div class="description-buttom">
							<div class="description">
								<h2>
									Описание
								</h2>
								<span class="description-info">
									<div class="description-b">
										{{$products->description}}
									</div>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
@endsection