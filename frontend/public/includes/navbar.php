<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Study Books</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/navbar.css">
</head>
<body>
<div class="navbar">
    <a id = "titleHome" href="http://localhost/BookBase_PHP/frontend/public/pages/booksPage.php">
    <img src="../images/books.jpg" alt="BookBase.com">
    </a>
    <div>
        <button type="button" class="btn btn-primary">
            <a href="http://localhost/BookBase_PHP/frontend/public/pages/booksPage.php" style="color:white;">Home</a>
        </button>
        <button type="button" class="btn btn-primary">
            <a href="/updateUser" style="color:white;">Update book</a>
        </button>
        <button type="button" class="btn btn-primary">
            <a href="http://localhost/BookBase_PHP/frontend/public/pages/createBook.php" style="color:white;">Create book</a>
        </button>
        <button type="button" class="btn btn-primary">
            <a href="/help" style="color:white;">Help</a>
        </button>
        <button type="button" class="btn btn-primary">
            <a href="/advertisements" style="color:white;">My books</a>
        </button>
        <button type="button" class="btn btn-primary">
            <a href="/advertisements" style="color:white;">Bookinder</a>
        </button>
    </div> <br>
    <div class="float-right">
        <form action="/logout" method="POST" name="logout" >
            <input type="submit" value="Logout" id="logout" class="btn btn-danger" >
        </form>
    </div>
</div>
</html>