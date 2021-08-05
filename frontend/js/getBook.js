$("#bookSubmit").click(() => {
    console.log("submit button clicked")
    $.ajax({
        url: "http://localhost/BookBase_PHP/backend_php/getBook.php",
        type: "post",
    }).done(function (data) {
        console.log("getting data", data)
    })
})