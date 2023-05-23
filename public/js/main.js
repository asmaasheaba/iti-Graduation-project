addEventListener("load", function () {
    // start of register page show password

    $(".togglePassword").click(function (e) {
        // toggle the type attribute
        let inputPassword = $(e.target)
            .closest(".input-box")
            .find(".id_password");
        const type =
            inputPassword.attr("type") === "password" ? "text" : "password";
        inputPassword.attr("type", type);
        e.target.classList.toggle("fa-eye");
    });
}); //load
