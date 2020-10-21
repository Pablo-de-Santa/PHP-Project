<!DOCTYPE html>
<html>

<head>
    <title>Paul's Library</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>

        html{
            font-size: 1.5em;
        }

        body{
            background: #23074d; /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #23074d, #cc5333); /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #23074d, #cc5333);
            font-family: "Gabriola", serif;
            font-size: 1.5em;
        }

        .navbar a{
            font-size: 1.2em;
            transition: 0.2s;
        }

        .navbar a:hover{
            font-size: 1.2em;
            color: grey;
        }

        .navbar{
            background: black;
        }

        .jumbotron{
            background: transparent;
            margin-top: 3%;
        }

        .btn-primary{
            background-color: black;
            border-color: #fff;
            padding: 0.2em 0.5em;
            font-size: 1.5em;
            transition: 0.2s;
        }

        .btn-primary:hover{
            background-color: white;
            border-color: #000;
            color: black;
            padding: 0.3em 0.7em;
            font-size: 1.7em;
        }

        .container{
            color: white;
        }

        a{
            color: white;
            transition: 0.2s;
        }

        a:hover{
            color: grey;
        }

        .mt-3{
            position: relative;
            top: 0.5em;
            font-size: 1.3em;
        }

        .container ul{
            color: white;
            margin-left: 25%;
        }

        .container li{
            color: white;
        }

        form{
            color: white;
        }

        h6{
            margin-bottom: 5em;
        }

        #s{
            background: white;
            color: black;
            margin-top: 6em !important;
            text-align: center;
            margin-left: 27.5%;
            padding: 0 !important;
            width: 50%;
        }

    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                Paul's Library
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="list.php">Inventory</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-4">