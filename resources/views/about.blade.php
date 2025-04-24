<div>
<h1>This is About Page {{ session('message') }}</h1>
<!-- {{ session()->keep(['message']) }} -->
    
    <form action="cretaeAbout" method="post">
        @csrf
        <input type="text" name="message" placeholder="Enter your message">
        <br>
        <br>
        <button type="submit">Submit</button>
    </form>
</div>
