function getBooks() {
    $.ajax({
        url: "http://localhost/BookBase_PHP/backend_php/getBooks.php",
        type: "GET",
        data: new FormData(),
        dataType: "json",
        processData: false,
        contentType: false
    }).done(function (response) {
        for (let i = 0; i < response.length; i++) {
            $("#bookNames").append(response[i] + " <br>");
        }
    });
}

getBooks();