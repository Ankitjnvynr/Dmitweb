document.getElementById("subscribeForm").addEventListener("submit", function (event) {
    event.preventDefault();

    $.ajax({
        url: "partials/_subscribers.php",
        type: 'POST',
        data: {
            email: $("#subscribeMail").val()
        },
        success: function (data) {
            console.log(data);
            $("#subscribeMsg").html(data)
            $("#subscribeForm")[0].reset()
        }
    })
});
