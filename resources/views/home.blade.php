<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Laravel</title>
    
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
        }
    </style>

</head>

<body>
    @include('navbar')

    <main>
        <h1> {{ $title }} </h1>
    </main>
</body>
</html>