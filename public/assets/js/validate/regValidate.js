// Wait for the DOM to be ready
$(function() {
    // Initialize form validation on the registration form.

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
    }, "This field day only letters allowed");
    // It has the name attribute "registration"
    $("form[name='save_day']").validate({
        // Specify validation rules
        rules: {
            u_name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            pass: {
                required: true,
                minlength: 6
            },
            con_pass: {
                required: true,
                minlength: 6,
                equalTo: "#pass"
            },
        },
        // Specify validation error messages
        messages: {
            u_name: {
                required: "Please provide a Username",
            },
            email: {
                required: "Please provide a correct email",
            },
            con_pass: {
                required: "Password donn't match",
            },
            //email: "Please enter a valid email address"
        },
        // Make sure the form is submitted to the destination defined
        // in the "action" attribute of the form when valid
        submitHandler: function(form) {
            form.submit();
        }
    });
});