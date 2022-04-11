<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>

    <style>
        header{
            font-family: Arial, sans-serif;   
            background-color: #DC143C;    
            color: white;
        }

        li{
            list-style: none;
        }

        a{
            text-decoration: none;
            color: inherit;
        }

        .nav-options{
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 2%;
            padding: 20px 0;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="nav-options">
               <li>
                    <a href="{{ route('home') }}">Home</a>
               </li>
               <li>
                   <a href="{{ route('about') }}">About me</a>
               </li>
               <li>
                   <a href="{{ route('projects') }}">My Projects</a>
               </li>
               <li>
                   <a href="{{ route('contacts') }}">Contact me</a>
               </li> 
            </ul>
            
        </nav>
    </header>
</body>
</html>