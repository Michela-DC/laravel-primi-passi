<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact me</title>

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

        .container h3{
            margin-bottom: 10px;
        }

        .contacts, .adress{
            margin-bottom: 30px;
        }

        .contacts li{
            margin-bottom: 5px;
        }
    </style>

</head>

<body>

    @include('navbar')
    <main>
        <div class="container">
            <div class="contacts-container">
                <h3>{{ $title1_contacts }}</h3>
                <ul class="contacts">
                    <li>Phone: 0123456789</li>
                    <li>Email: itsMeMichela@gmail.com</li>
                </ul>
            </div>

            <div class="address-containers">
                <h3>{{ $title2_contacts }}</h3>
                <div class="address">Address: somewhere over the rainbow n.1</div>
            </div>
        
        </div>
    </main>

</body>
</html>