<?php include '../includes/navbar.php'; ?>
<link rel="stylesheet" href="../css/updateBook.css">

<h1 style="text-align: center;">Update book</h1>
    <div id = "mainDiv" class="row">
        <div id ="leftDiv" class="col-sm">
            <input name="bookId" type="number" id="bookId" placeholder="Write id to find book">
            <button id="getBookBtn" class="btn btn-primary">Get book</button><br> 
            <label for="bookName" id = "bookNameLabel">Name of book:</label>
            <br>
            <input name="bookName" type="text" id="bookName" class="form-control-sm"><br>

            <label for="author" id = "authorLabel">Author:</label><br>
            <input type="text" id= "author" name="author" class="form-control-sm"><br>

            <label for="publisher" id = "publisherLabel">Publisher:</label><br>
            <input type="text" id="publisher" name="publisher" class="form-control-sm"><br>
        </div>
        <div id = "rightDiv" class="col-sm">
            <label for="isbn" id = "isbnLabel">ISBN-number:</label><br>
            <input type="text" id="isbn" name="isbn" class="form-control-sm"><br>

            <label for="price" id="priceLabel">Price:</label><br>
            <input type="text" id="price" name="price" class="form-control-sm"><br><br>

            <button id ="updateBookButton" class="btn btn-success">Update book</button>
        </div>
    </div>
<script src = "../../js/book.js"></script>
<?php include '../includes/footer.php'; ?>
