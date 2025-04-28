<div>
    <h1>Add Student</h1>
    <form action="" method="post">
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone">
        </div>
        <button type="submit">Submit</button>
    </form>
    <!-- search by student name -->
    <form action="search-name" method="get">
        <div style="display: flex; gap: 10px;">
            <div>
                <label for="name">Search by Name</label>
                <input type="text" name="name" value="{{@$search}}" id="name" placeholder="Search by name">
            </div>
            <button type="submit">Search</button>
        </div>
    </form>
    <div>
        <table border="1">
            <tr>
                <td>ID</td>
                <td>name</td>
                <td>email</td>
                <td>phone</td>
                <td>action</td>
            </tr>
            @foreach($students as $student)
            <tr>

                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->phone }}</td>
                <td><a href="{{'delete/'.$student->id}}">Delete</a></td>
                <td><a href="{{'update/'.$student->id}}">Upadte</a></td>

            </tr>
            @endforeach
        </table>
        <div>
            {{$students->links()}}
        </div>
    </div>
</div>

<style>
    .w-5.h-5{
        width: 15px;
    }
</style>