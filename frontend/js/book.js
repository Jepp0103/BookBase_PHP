getBook(); //Calling function

function getBook() {
    $("#getBookBtn").click(() => {
        let form = new FormData();
        form.append("bookId", $("#bookId").val());
        $.ajax({
            url: "http://localhost/BookBase_PHP/backend_php/getBook.php",
            type: "POST",
            data: form,
            dataType: "json",
            processData: false,
            contentType: false
        }).done(function (data) {
            //Displaying all input fields
            $("#bookNameLabel, #bookName," +
                "#authorLabel, #author," +
                "#publisherLabel, #publisher," +
                "#isbnLabel, #isbn," +
                "#priceLabel, #price," +
                "#updateBookButton")
                .show();

            //Getting data from database to display in input fields
            $("#bookName").val(data.book_name);
            $("#author").val(data.author);
            $("#publisher").val(data.publisher);
            $("#isbn").val(data.isbn);
            $("#price").val(data.price);

            //Update book function call whn clicking the button
            $("#updateBookButton").click(() => {
                updateBook();
            })
        })
    })
}

function updateBook() {
    let form = new FormData();
    console.log($("#bookId").val(), $("#bookName").val(), $("#author").val(), $("#publisher").val(), $("#isbn").val(), $("#price").val())
    console.log("parse", typeof parseInt($("#bookId").val()), typeof parseInt($("#isbn").val()), typeof parseInt($("#price").val()))
    form.append("bookId", parseInt($("#bookId").val()));
    form.append("bookName", $("#bookName").val());
    form.append("author", $("#author").val());
    form.append("publisher", $("#publisher").val());
    form.append("isbn", parseInt($("#isbn").val()));
    form.append("price", parseInt($("#price").val()));
    console.log("working here?????")
    $.ajax({
        url: "http://localhost/BookBase_PHP/backend_php/updateBook.php",
        type: "POST",
        data: form,
        dataType: "json",
        processData: false,
        contentType: false
    }).done(function (data) {
        console.log("Book succesfully updated")
    });
}

