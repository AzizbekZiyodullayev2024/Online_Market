@props(['src','type'])
<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>

@if($type === 'js')
    <script src="{{ $src }}"></script>
@elseif($type === 'css')
    <link rel="stylesheet" href="{{ $src }}">
@endif