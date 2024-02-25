(function($) {
    "use strict";
    $("#registrationForm").validator().on("submit", function(event) {
        if (event.isDefaultPrevented()) {
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm() {
        var name = $("#name").val();
        var email = $("#email").val();
        var phone_number = $("#phone_number").val();
        
        // Create JSON object
        var formData = {
            "name": name,
            "email": email,
            "phone_number": phone_number,
            "submit":"registrationForm",
        };

        $.ajax({
            type: "POST",
            url: SITE_ASSESTS_PATH+"assets/php/form-process.php",
            data: formData,
            success: function(text) {
                if (text == "success") {
                    formSuccess();
                } else {
                    formError();
                    submitMSG(false, text);
                }
            }
        });
    }

    function formSuccess() {
        $("#registrationForm")[0].reset();
        submitMSG(true, "Successfully Submitted!")
    }

    function formError() {
        $("#registrationForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            $(this).removeClass();
        });
    }

    function submitMSG(valid, msg) {
        if (valid) {
            var msgClasses = "h4 text-left tada animated text-success";
        } else {
            var msgClasses = "h4 text-left text-danger";
        }
        $("#msgSubmit").removeClass().addClass(msgClasses).text(msg);
    }
}(jQuery));