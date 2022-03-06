<?php include "template/header.php"?>

<div class="container mt-3">
    <h2>Complete your Registration</h2>
    <form action="<?php echo base_url(); ?>registration/insertinfo" method="POST">
        <div class="mb-3 mt-3">
            <label for="userName">User Name:</label>
            <input type="text" class="form-control" id="userName" placeholder="Enter User Name" name="userName"
                required>
        </div>
        <div class="mb-3">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter password" name="password"
                required>
        </div>
        <div class="mb-3">
            <label for="repassword">Retype Password:</label>
            <input type="password" class="form-control" id="password" placeholder="Enter repassword" name="repassword"
                required>
        </div>
        <div class="mb-3 mt-3">
            <label for="employeeID">User Employee ID:</label>
            <input type="text" class="form-control" id="employeeID" placeholder="Enter employee ID" name="employeeID"
                required>
        </div>
        <div class="mb-3">
            <label for="email">email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="number">Number:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter number" name="number" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-block btn-primary">Submit</button>
            <a class="btn btn-secondary" href="<?php echo base_url() ?>"> Login</a>
        </div>
    </form>
</div>

<?php include "template/footer.php"?>