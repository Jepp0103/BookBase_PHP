function getBooks() {
    $.ajax({
        url: "http://localhost/BookBase_PHP/backend_php/getBooks.php",
        type: "GET",
        data: new FormData(),
        dataType: "json",
        processData: false,
        contentType: false
    }).done(function (response) {
        console.log("Book data:", response);

        $("#bookNames").text(response);
    });
}

getBooks();