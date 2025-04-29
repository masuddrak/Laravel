<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1>Image Gallery</h1>
    <form action="upload-image" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image">
        <button type="submit">Upload</button>
    </form>
    <div>
        <div style="display: grid; grid-template-columns: repeat(5,1fr);gap: 20px; width: 80%;margin: auto;">

            @foreach($images as $image)

            <div style="width: 200px; height: 150px;">
                <img src="{{ url('storage/images/' . $image->image) }}" alt="Image" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            @endforeach
        </div>
    </div>
</div>