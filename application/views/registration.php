<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container mt-3">
        <h2>Stacked form</h2>
        <form action="<?php echo base_url(); ?>registration/insertinfo" method="POST">
            <div class="mb-3 mt-3">
                <label for="userName">User Name:</label>
                <input type="text" class="form-control" id="userName" placeholder="Enter User Name" name="userName">
            </div>
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="mb-3">
                <label for="repassword">Retype Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter repassword"
                    name="repassword">
            </div>
            <div class="mb-3 mt-3">
                <label for="employeeID">User Employee ID:</label>
                <input type="text" class="form-control" id="employeeID" placeholder="Enter employee ID"
                    name="employeeID">
            </div>
            <div class="mb-3">
                <label for="email">email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            </div>
            <div class="mb-3">
                <label for="number">Number:</label>
                <input type="number" class="form-control" id="number" placeholder="Enter number" name="number">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Submit</button>
        </form>
    </div>

</body>

</html>