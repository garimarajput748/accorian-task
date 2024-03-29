(function($) {
    "use strict";
    $("#contactForm").validator().on("submit", function(event) {
        if (event.isDefaultPrevented()) {
            formError();
            submitMSG(false, "Did you fill in the form properly?");
        } else {
            event.preventDefault();
            submitForm();
        }
    });

    function submitForm() {
        // Create JSON object
        var formData = {
            "name": $("#name").val(),
            "email": $("#email").val(),
            "phone_number": $("#phone_number").val(),
            "subject":$("#msg_subject").val(),
            "message":$("#message").val(),
            "submit":"contactForm",
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
        $("#contactForm")[0].reset();
        submitMSG(true, "Successfully Submitted!")
    }

    function formError() {
        $("#contactForm").removeClass().addClass('shake animated').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
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
