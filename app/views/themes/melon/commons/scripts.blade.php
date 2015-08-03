@if(isset($javascripts) && sizeof($javascripts) && is_array($javascripts))
    @foreach($javascripts as $js)
        <script type="text/javascript" src="{{asset($js)}}"></script>
    @endforeach
@endif