<div>
    <h1>this is login page {{$name}}</h1>
    <!-- if else statement -->
    @if($name==="siam")
    <h1>Name is Siam</h1>
    @else
    <h1>Name notfout</h1>
    @endif
    <!-- forech loopin system -->
    @foreach($users as $user)
    <h1>{{$user}}</h1>
    @endforeach


    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
</div>