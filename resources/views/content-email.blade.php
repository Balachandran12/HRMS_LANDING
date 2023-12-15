<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <style>

    span{
            display: block;
            
        }

        
    </style>

    <div>
        <span>Name: {{$name}}</span>
        <span>company: {{$company_name}}</span>
        <span>Email: {{$email}}</span>
        <span>PhoneNumber: {{$phone_number}}</span>
          <span>Date: {{$date}}</span>
        <span>Message: {{$send_message}}</span>

    </div>
</body>
</html>