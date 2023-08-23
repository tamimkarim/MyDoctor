<?php 
include '../controller/ajaxforgotpassword.php';
?>
<html>
<head>
    <title>Forget Password Example</title>
    <script>
        $(document).ready(function() {
    $('#forgotPasswordForm').submit(function(event) {
        event.preventDefault();
        var email = $('input[name=email]').val();

        $.ajax({
            url: '../ajaxforgotpassword.php',
            method: 'POST',
            data: {
                email: email
            },
            dataType: 'json',
            success: function(response) {
                if(response.success) {
                    $('#forgotPasswordResponse').html(response.message);
                    $('#forgotPasswordForm').trigger('reset');
                } else {
                    $('#forgotPasswordResponse').html(response.message);
                }
            },
            error: function() {
                alert('An error occurred while processing your request. Please try again later.');
            }
        });
    });
});
    </script>
</head>
<body>
    <h2>Forget Password</h2>
    <p>Please enter your email address below to reset your password:</p>
    <form id="forgotPasswordForm">
        <label>Email:</label>
        <input type="email" name="email" required>
        <button type="submit">Submit</button>
    </form>
    <div id="forgotPasswordResponse"></div>
</body>
</html>
