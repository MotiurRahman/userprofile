<?php include "template/header.php"?>
<div class="container mt-5">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Employee ID</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $result) {?>
                <tr>
                    <td><?php echo $result->userName ?></td>
                    <td><?php echo $result->employeeID ?></td>
                    <td><?php echo $result->email ?></td>
                    <td><a href="<?php base_url()?>employeeList/editinfo/<?php echo $result->id ?>"><i
                                class="fa fa-edit"></i></a>
                        <a href=""><i data-userid="<?php echo $result->id ?>" class="fa fa-trash"></i></a>

                    </td>
                </tr>
                <?php }?>

            </tbody>
        </table>
    </div>
</div>

<?php include "template/footer.php"?>