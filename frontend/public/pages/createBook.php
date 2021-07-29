<?php include '../includes/navbar.php'; ?>
<link rel="stylesheet" href="../css/createBook.css">

<h1 style="text-align: center;">Create book</h1>
<form action="http://localhost/BookBase_PHP/backend_php/addBook.php" method="POST" name="addbook">
    <div class="row">
        <div class="col-sm">
            <label for="bookName">Name of book:</label><br>
            <input name="bookName" type="text" id="bookName" class="form-control-sm"><br>

            <label for="author">Author:</label><br>
            <input type="text" id="author" name="author" class="form-control-sm"><br>

            <label for="publisher">Publisher:</label><br>
            <input type="text" id="publisher" name="publisher" class="form-control-sm"><br>
        </div>
        <div class="col-sm">
            <label for="isbn">ISBN-number:</label><br>
            <input type="text" id="isbn" name="isbn" class="form-control-sm"><br>

            <label for="price">Price:</label><br>
            <input type="text" id="price" name="price" class="form-control-sm"><br>
        </div>
    </div>

    <input type="submit" value="Create book" class="btn btn-primary">
</form>
<?php include '../includes/footer.php'; ?>
