/*Wait for the HTML file to load (be ready) and then execute the function below*/
$(document).ready(function () {
    /*execute next function on nav toggle button (hamburger button) click*/
    $("#nav_toggle_button").click(function (e) {
        /*set header_nav class to 'active'*/
        $(".header_nav").toggleClass("active");
    })
})