<div>
    <h1 style="text-align: center;">Get All User</h1>
    <!-- create user -->
     <form action="create-user" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="mumber" name="phone" id="phone">
        </div>
        <button type="submit">Create User</button>
     </form>
     <form action="delete-users" method="post">
        @csrf
     <button type="submit">Delete Mnay</button>

    <table border="1">
        <thead>
            <tr>
                <th>select</th>
                <th>Name</th>
                <th>Phone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{$user->id}}"></td>
                <td>{{$user->name}}</td>
                <td>{{$user->phone}}</td>
            </tr>
            </form>
            @endforeach
        </tbody>
    </table>
    {{$users->links()}}
</div>

<style>
    .w-5.h-5{
        width: 20px;
    }
</style>