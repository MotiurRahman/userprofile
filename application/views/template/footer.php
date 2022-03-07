<script>
$(document).ready(function() {

    $(".fa-trash").on("click", function(e) {

        if (confirm('Are you sure to delete this record ?')) {
            //$("#primaryPendingForm").submit();
            var id = $(this).data("userid");
            console.log($(this).data("userid"));
            $.ajax({
                url: "<?php echo base_url(); ?>employeeList/deleteinfo",
                method: "POST",
                data: {
                    id: id
                },
                success: function(data) {
                    location.reload();
                }
            });
        }
    });

    // $("#reg_button").on("click", function(e) {
    //     e.preventDefault(); // prevent submitting form here

    // });

    $('#regForm').submit(function(e) {
        e.preventDefault();
        var regex = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;

        if ($('#password').val() != $('#repassword').val()) {
            alert("Password did not match");
            $('#password').focus()
        } else if ($('#password').val().length < 6) {
            alert("Password length must be more than 6 and one special char");
            $('#password').focus()
        } else {

            if (!regex.test($('#password').val())) {
                alert("password should contain atleast one number and one special character");
                $('#password').focus()
            } else {

                $.ajax({
                    url: "<?php echo base_url(); ?>registration/check_user",
                    method: "POST",
                    data: {
                        employeeID: $('#employeeID').val(),
                        email: $('#email').val()
                    },
                    success: function(e) {

                        if (e) {
                            alert(
                                "User already exist with the same employeeID or email");
                        } else {
                            $("#regForm").unbind();
                            $("#regForm").submit();
                        }

                    }
                });




            }
        }


    });



});
</script>
</body>

</html>