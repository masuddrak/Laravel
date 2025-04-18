

@include('common.header',["name"=>"Main Header"])
<h1>This is Home Page</h1>
<a href="{{URL::to('about')}}">Go About</a>
<h2>{{url()->previous()}}</h2>
@include('common.footer',["name"=>"Main Fotter"])