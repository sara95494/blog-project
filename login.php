<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<?php require 'header.php'?>

<head>

    <title>Il mio blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" type = "text/css" href="style.css">
</head>

<body>

    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col"></div>
                <div class="col-4">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h5 class="card-title">Login</h5>
                            <form>
                                <div class="form-group">
                                    <label for="Email">Email:</label>
                                    <input type="text" class="form-control" id="title" placeholder="name@example.com"
                                        required>
                                </div>
                                <div class="form-group">
                                    <label for="Password">Password:</label>
                                    <input type="text-area" class="form-control" id="content" placeholder>
                                </div>





                                <button type="submit" class="btn btn-primary btn-block">Aggiungi Post</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col"></div>
            </div>



</body>

</html>