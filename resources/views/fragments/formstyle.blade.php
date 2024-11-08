<style>
    *{
        box-sizing: border-box;
    }

    form
    {
        width:250px;
        padding-inline: 20px;
        padding-block: 20px;
        border-radius: 12px;
        margin-block: auto;
        margin-inline: auto;
        background-color: #fad27d;
    }

    form label{
        width: 300px;
        height: 20px;
        font-weight: bold;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        display: inline-block;
    }

    form input[type:"text"],
    form input[type:"number"]
    {
        padding-block:3px;
        border: 1px solid #ffffff;
        border-radious: 3px;
        background-color: #000;
        margin-block: 4px;
        display:flex;
    }

    form button[type = "submit"]
    {
        width: 100%;
        padding: 8px 16px;
        margin-block-start: 32px;
        border:1px solid #000;
        border-radious: 5px;
        display: block;
        color: #fff;
        background-color: #000;
    }

    form select
    {
        width: 100%;
    }

    form input
    {
        width: 100%;
    }
</style>
