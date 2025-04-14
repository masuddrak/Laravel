@include('common.header',["name"=>"User Header"])
<h1>view user {{$name}}</h1>
@includeIf('common.header')