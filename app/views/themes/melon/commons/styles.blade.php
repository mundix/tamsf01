@if(isset($styles) && sizeof($styles) && is_array($styles))
@foreach($styles as $css)
<link rel="stylesheet" href="{{asset($css)}}">
@endforeach
@endif
