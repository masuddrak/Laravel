<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <form action="userpost" method="get">
        <!-- <input type="hidden" name="_method" value="PUT"> -->
        @csrf
        <div>
            <label for="title">TTitle</label>
            <input type="text" name="title" placeholder="Enter title">
            <br>
            <label for="title">Description</label>
            <input type="text" name="description" placeholder="Enter description">
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>