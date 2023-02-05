@php 
if($type === 'shops') {
  $path = 'storage/shops/';
}
if($type === 'products') {
  $path = 'storage/products/';
}
@endphp

</div>
<!-- 画像(無ければNot_Image) -->
  @if(empty($filename))
      <img src="{{ asset('images/no_image.jpg') }}">
  @else 
      <img src="{{ asset($path . $filename) }}" class="rounded-lg" >
  @endif
<div>