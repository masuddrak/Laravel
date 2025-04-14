<div>
    <h1> This is a message card.
    </h1>
</div>
<x-message-card name="successfully" card="card"/>
<br>
<x-message-card name="warrning" card="card2"/>

<style>
    .card{
        background-color: #000;
        color: white;
        border-radius: 10px;
        padding: 20px;
        margin: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
    .card2{
        background-color: blue;
        color: white;
        border-radius: 10px;
        padding: 20px;
        margin: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }
</style>