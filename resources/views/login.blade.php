<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- custom css file link  -->
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >    

    <title>Signup</title>
</head>
<body>

    <form class="signu_form" action="{{ route('checklogin') }}" method="POST">
    @if ($errors->any())
    <div class="alert_danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @csrf
        <h1 class="logotag"> Login To Your Account</h1>
        <div class="sinputs">
            <input class="uinput" name="name" type="name" placeholder="Username" value="{{ old('name') }}"><br><br>
            <input class="uinput" name="password" type="password" placeholder="Password"><br><br>                
        </div>
        <button class="button2 btn2" type="submit" value="submit">Login</button>
    </form>

</body>
</html> 
