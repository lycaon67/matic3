<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Matik : Home Automation System</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            body{
                margin: 0;
                padding: 0;
                font-family: sans-serif;
                background-color: #fff;
            }

            .box{
                width: 300px;
                background: #fff;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
            }
            .box h1 {
                color: black;
                font-weight: 700;
                margin-bottom: -20px;
            }
            .box h4 {
                color: grey;
                font-weight: 500;
            }

            .box input[type="username"],.box input[type="password"]{
                display: block;
                text-align: center;
                margin: 20px auto;
                background: none;
                border: 2px solid #3498db;
                width: 200px;
                border-radius: 24px;
                padding: 12px 10px;
                color: white;
                outline: none;
                transition: .25s;
            }

            .box input[type="username"]:focus,.box input[type="password"]:focus{
                /* width: 250px; */
                border-color: #2ecc71;
            }

            .box input[type="submit"]{
                display: block;
                text-align: center;
                margin: 20px auto;
                background: #3498db;
                border: 2px solid #3498db;
                width: 150px;
                border-radius: 24px;
                padding: 12px 10px;
                color: white;
                outline: none;
                transition: .25s;
            }
            .box input[type="submit"]:hover{
                border-color: #2ecc71;
            }
        </style>
    </head>
    <body>
        <form class="box">
            <h1>Matik</h1>
            <h4>Home Automation System</h4>
			<input type="username" name="username" placeholder="Username">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" name="submit" value="Login">
		</form>
    </body>
</html>
