<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <style type="text/css" rel="stylesheet" media="all">
        /* Media Queries */
        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
</head>
<body>
    

<!-- Action Button -->
@if (isset($actionText))

<h1><a href="{{ $actionUrl }}">Afin de réinitialiser votre mot de passe, merci de bien vouloir cliquer sur ce lien.</a></h1>
@endif



</body>



