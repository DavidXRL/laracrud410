
<style>
    header
    {
        background: rgb(31, 30, 30);
        padding-block: 4px;
        margin-block: -8px;
        margin-inline: -8px;
    }

    nav p
    {
        text-align: center;
    }

    a
    {
        text-decoration: none;
        color: white;
        font-weight: bold;
        padding-block: 10px;
        padding-inline: 20px;
    }

    nav p a:hover
    {
        background: red;
        padding-block: 10-px;
        padding-inline: 10px;
        border-radius: 5%;
    }

    *
    {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
    }
</style>


<header>
    <nav>
        <p>
            <a href="{{route('index')}}">Inicio</a>
            <a href="{{route('products')}}">Productos</a>
            <a href="{{route('clients')}}">Clientes</a>
            <a href="{{route('sales')}}">Ventas</a>
        </p>
    </nav>
</header>
<br>
