$(document).ready(function () {
    $(function () {

        $.validator.addMethod('testvalided',function (value,element,args) {

            return /^[a-z ,.'-]+$/i.test(value);

        },'OOKKK');


        $('#quickForm').validate({
            rules: {
                tests:{
                    required:true,
                    testvalided:true

                },

                name: {
                    required: true,
                    minlength: 3
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 5
                },
                terms: {
                    required: true
                },
            },
            messages: {

                tests:{
                    required:"Is Required",
                    testvalided:"Input A Valid Name."

                },

                name: {
                    required: "Please enter a Name",
                    minlength: "Please Input Minimum 3 Characters."
                },
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a valid email address"
                },
                password: {
                    required: "Please provide a password",
                    minlength: "Your password must be at least 5 characters long"
                },
                terms: "Please accept our terms"
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });

        $('#quickForm').validate({
            submitHandler: function (form) {

                form.submit();
            }
        });
    });

});
