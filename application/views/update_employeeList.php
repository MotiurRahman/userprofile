<?php include "template/header.php"?>

<div class="container mt-3">
    <h2 class="text-center">Update your information</h2>
    <form action="<?php echo base_url(); ?>employeeList/updateinfo/<?php echo $result[0]->id ?>" method="POST">
        <div class="mb-3 mt-3">
            <label for="userName">User Name:</label>
            <input type="text" class="form-control" id="userName" placeholder="Enter User Name" name="userName"
                value="<?php echo $result[0]->userName ?>" required>
        </div>

        <div class="mb-3 mt-3">
            <label for="employeeID">User Employee ID:</label>
            <input type="text" class="form-control" id="employeeID" placeholder="Enter employee ID"
                value="<?php echo $result[0]->employeeID ?>" name="employeeID" required>
        </div>
        <div class="mb-3">
            <label for="email">email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email"
                value="<?php echo $result[0]->email ?>" name="email" required>
        </div>
        <div class="mb-3">
            <label for="number">Number:</label>
            <input type="number" class="form-control" id="number" placeholder="Enter number"
                value="<?php echo $result[0]->number ?>" name="number" required>
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-block btn-primary">Submit</button>
        </div>
    </form>
</div>

<?php include "template/footer.php"?>