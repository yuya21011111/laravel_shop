@php 
if($type === 'shops') {
  $path = 'storage/shops/';
}
if($type === 'products') {
  $path = 'storage/products/';
}
@endphp

<div>
  @if(empty($filename))
      <img src="{{ asset('images/no_image.jpg') }}">
  @else 
      <img class="mx-auto w-40 h-40 object-cover rounded-lg" src="{{ asset($path . $filename) }}" >
  @endif
</div>