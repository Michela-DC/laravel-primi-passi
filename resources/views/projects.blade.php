<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>

    <style>
        *{
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body{
            height: 100vh;
            display: flex;
            flex-direction: column;
            border: 1px solid red;
        }

        main {
            font-family: Arial, sans-serif; 
            flex-grow: 1;
            border: 1px solid white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .container{
            width: 65%;
            text-align: center
        }

        .container h2{
            margin-bottom: 20px;
        }

        .container a{
            font-size: 1.3rem;
            text-decoration: underline;
        }
    </style>

</head>

<body>

    @include('navbar')

    <main>
        <div class="container">
            <h2>Check my projects here:</h2>
            <a href="https://github.com/Michela-DC?tab=repositories">My GitHub</a>
        </div>
    </main>
</body>
</html>