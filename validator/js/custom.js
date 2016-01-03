$(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    $('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));
    $('#signupform').formValidation({
        err: {
                container: 'tooltip'
            },
        framework: 'bootstrap',
        message: 'This value is not valid',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
                },
                 fields:{
                    username:{
                        validators:{
                            notEmpty :{
                                message:'The username is required'
                            }
                        }
                    },
                    password:{
                        validators: {
                            notEmpty: {
                                message: 'The password is required'
                            },
                             stringLength: {
                                min: 6,
                                message: 'The password must be 6 characters long'
                            }
                        }
                       
                    },
                    password_confirmation:{
                        validators: {
                            identical: {
                                field: 'password',
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    }
                  
                },
    });

});