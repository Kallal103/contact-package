<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Package</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div>
        <div>
            <h1>Contact us any time</h1>
            <form action="{{route('contact')}}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Your name please">
                <input type="email" name="email" id="" placeholder="Your valid email">
                <textarea name="message" id="" cols="30" rows="10" placeholder="Your query"></textarea>
                <input type="submit" value="submit">
            </form>
        </div>
    </div>


</body>
</html>
