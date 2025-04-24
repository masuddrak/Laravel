<h1 class="heding">Welcome to The Laravel world</h1>

<form action="uploadImage" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="image" id="">
    <br>
    <button type="submit">upload</button>
</form>
<style>
    .heding{
        text-align: center;
        margin: 0 20px;
    }
</style>