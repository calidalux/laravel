<form action="{{URL::current()}}">
	<div>
		
		<label for="">Price range:</label>
		min <input type="text" name="min_price" value="{{Input::get('min_price')}}">
		max <input type="text" name="max_price" value="{{Input::get('max_price')}}">
	</div>
	<div>
		<?php $brands = Input::has('brands') ? Input::get('brands') : [] ; ?>
		<label for="">Brands</label>
		<br>
		<input type="checkbox" name="brands[]" value="1" {{in_array(1, $brands) ? 'checked' : '' }} > Brand one
		<br>
		<input type="checkbox" name="brands[]" value="2" {{in_array(2, $brands) ? 'checked' : '' }}> Brand two
		<input type="checkbox" name="brands[]" value="3" {{in_array(3, $brands) ? 'checked' : '' }} > Brand tree

	</div>

<button>OK</button>

<hr>

<h1>Products</h1>

<ul>
	@foreach($products as $product)
		<li>{{$product->title}} - {{$product->price}} - brand id = {{$product->brand_id}}</li>
	@endforeach()	
</ul>

</form>