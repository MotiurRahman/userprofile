<?php include "template/header.php"?>

<div class="container mt-3">
    <h2 class="text-center">Login Your Account</h2>
    <div class="row">
        <form action="<?php echo base_url(); ?>login/userLogin" method="post">
            <div class="mb-3 mt-3">
                <label for="employeeID">Employee ID:</label>
                <input type="employeeID" class="form-control" id="employeeID" placeholder="Enter email"
                    name="employeeID">
            </div>
            <div class="mb-3">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password" name="password">
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Login</button>
                <a class="btn btn-secondary" href="<?php echo base_url() ?>registration"> Registration</a>
            </div>
        </form>
    </div>
</div>

<?php include "template/footer.php"?>