<div>
<h1>Update Student</h1>
    <form action="{{'/update-student/'.$student->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" value="{{$student->name}}" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{$student->email}}" id="email">
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" value="{{$student->phone}}" id="phone">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>
