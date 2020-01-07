<!DOCTYPE html>
<?php require 'header.php'?>

<head>
    <title>Il mio blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type = "text/css" href="style.css">
    
</head>

<body>

    <section>
            
            <div class="container mt-5">
                    <div class="row">
                        <div class="col"></div>
                        <div class="col-10">
                            <div class="card bg-light">
                                <div class="card-body">
                                    <h5 class="card-title">Aggiungi Post</h5>
                                    <form>
                                        <div class="form-group">
                                            <label for="title">Titolo:</label>
                                            <input type="text" class="form-control" id="title" placeholder
                                                required>
                                        </div>
                                        <div class="form-group">
                                            <label for="content">Contenuto:</label>
                                            <input type="text-area" class="form-control" id="content"
                                                placeholder>
                                        </div>
                                        <div class="form-group">
                                            <label for="tag">Tag:</label>
                                            <input type="text" class="form-control" id="tag" placeholder=
                                                >
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Aggiungi Post</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col"></div>
                    </div>
       
    </section>
</body>