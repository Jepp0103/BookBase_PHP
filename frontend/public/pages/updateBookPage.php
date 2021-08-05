<?php include '../includes/navbar.php'; ?>
<link rel="stylesheet" href="../css/updateBook.css">

<h1 style="text-align: center;">Create book</h1>
<form action="http://localhost/BookBase_PHP/backend_php/updateBook.php" method="POST" name="updateBook">
    <div class="row">
        <div class="col-sm">
            <input name="bookId" type="number" id="bookId" placeholder="Write id to find book">
            <input type="submit" value="Get book" id="bookSubmit" class="btn btn-primary"> <br>

            <label for="bookName" id = "bookNameLabel">Name of book:</label><br>
            <input name="bookName" type="text" id="bookName" class="form-control-sm"><br>

            <label for="author" id = "authorLabel">Author:</label><br>
            <input type="text" id="author" name="author" class="form-control-sm"><br>

            <label for="publisher" id = "publisherLabel">Publisher:</label><br>
            <input type="text" id="publisher" name="publisher" class="form-control-sm"><br>
        </div>
        <div class="col-sm">
            <label for="isbn" id = "isbnLabel">ISBN-number:</label><br>
            <input type="text" id="isbn" name="isbn" class="form-control-sm"><br>

            <label for="price" id="priceLabel">Price:</label><br>
            <input type="text" id="price" name="price" class="form-control-sm"><br>
        </div>
    </div>
    <input type="submit" value="Update book" class="btn btn-success">
</form>
<script src = "../../js/getBook.js"></script>
<?php include '../includes/footer.php'; ?>
