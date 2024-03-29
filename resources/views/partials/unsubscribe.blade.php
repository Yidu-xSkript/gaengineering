<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Unsubscribe - GA Engineering</title>
    <link href="{{ URL::asset('storage/uploads/favicon.png') }}" rel="icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700" rel="stylesheet">
    <style>
        /*------ Base styles ------*/
        body {
            background: #f7f8f9;
            font-family: 'Poppins', sans-serif;
            background-color: #1e8fff42;
            text-rendering : optimizeLegibility;
            -webkit-font-smoothing : antialiased;
        }
        .logo-container {
            max-width: 150px;
            height: auto;
            margin: 50px auto;
        }
        .container {
            max-width: 500px;
            height: auto;
            margin: 50px auto;
            padding: 60px;
            padding-bottom: 20px;
            background-color: #fff;
            box-sizing: border-box;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0px 15px 15px -12px rgba(0,0,0,0.09);
        }
        button, .btn {
            background-color: #1E90FF;
            text-decoration: none;
            padding: 15px 20px;
            font-weight: bold;
            font-size: 16px;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            border-radius: 50px;
            color: #fff;
            border: 0;
        }
        .btn-light {
            background-color: #eee;
            color: #222;
        }
        .btn:hover{
            opacity: 0.8;
        }
        h2 {
            margin: 0;
            padding: 0;
            color: #444;
        }
        p {
            margin-top: 10px;
            line-height: 24px;
            margin-bottom: 40px;
            color: #888;
        }
        .emoji {
            box-sizing: border-box;
            margin: 30px auto 20px;
            width: 120px;
            height: 120px;
        }
        .face {
            width: 100px;
            height: 100px;
            position: relative;
            margin: 0 15px 30px 0;
            border-radius: 50%;
            background: #1E90FF;
            transition: 1s;
        }
        .face:after {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: -8px;
            left: -8px;
            border-radius: 50%;
            box-shadow: 8px 8px 0 0 rgba(0, 0, 0, 0.07);
        }
        .eye {
            position: absolute;
            width: 14px;
            height: 14px;
            top: 30px;
            left: 18px;
            z-index: 1;
            border-radius: 50%;
            background: #0a335c;
        }
        .eye:last-child {
            left: auto;
            right: 18px;
        }
        .emoji .eyed {
            animation-name: blink;
            animation-iteration-count: infinite;
            animation-duration: 3s;
        }
        @keyframes blink {
            10% {
                height: 10px;
                top: 32px;
            }
            20% {
                height: 0.5px;
                top: 37px;
            }
            50% {
                height: 10px;
                top: 32px;
            }
        }
        .mouth {
            position: absolute;
            top: 50px;
            left: 0;
            right: 0;
            z-index: 1;
            width: 70px;
            height: 34px;
            margin: 0 auto;
            border-radius: 0 0 70px 70px;
            overflow: hidden;
            background: #0a335c;
            transition: 0.3s;
        }
        .mouth:before,
        .mouth:after {
            content: '';
            position: absolute;
            display: block;
        }


        /*------ Shocked Emoji Styling ------*/

        .shocked .mouth {
        width: 25px;
        height: 25px;
        border-radius: 50%;
        }


        #cancel:hover ~ .emoji .mouth{
            top: 55px;
            z-index: 1;
            width: 50px;
            height: 25px;
            margin: 0 auto;
            border-radius: 0 0 70px 70px;
            overflow: hidden;
            background: #0a335c;
        }

        #unsubscribe:hover ~ .emoji .mouth{
            width: 50px;
            height: 5px;
            top: 60px;
            border-radius: 50px;
        }
    </style>
</head>

<body>
    <div class="logo-container">
        <img style="width: 100%; height: auto;" src="{{URL::asset('storage/uploads/logo.png')}}" alt="GA Engineering"/>
    </div>
    <form action="/unsubscribe/{{$id}}" method="post">
        @csrf
        @method("DELETE")
        <div class="container">
            <h2>Oh! You want to unsubscribe?</h2>
            <p>We hate goodbyes, But if you change yor mind, we'll always be here.</p>
            <button type="submit" class="btn" id="unsubscribe">Unsubscribe</button>
            <a href="/" class="btn btn-light" id="cancel">Cancel</a>

            <br>
            <br>

            <div class="emoji shocked">
                <figure class="face">
                    <span class="eyes">
                        <span class="eye"></span>
                        <span class="eye"></span>
                    </span>
                    <span class="mouth">
                    </span>
                </figure>
            </div>
        </div>
    </form>
</body>

</html>
