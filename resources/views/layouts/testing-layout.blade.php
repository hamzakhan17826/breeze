<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="color-scheme" content="light dark"/>
    <meta name="supported-color-schemes" content="light dark"/>
    <style>
        table {
            border-collapse: collapse;
        }
        h1,h2,h3,h4,h5,h6,tr,p {
            margin: 0 !important;
            padding: 0 !important;
        }
    </style>
</head>

<body style="background-color: #F0FCFD; padding: 0 !important; margin: 0 !important; font-family: Arial, sans-serif">
@yield('body')
</body>
