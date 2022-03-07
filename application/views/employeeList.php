<?php include "template/header.php"?>
<div class="container mt-5">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>User Name</th>
                    <th>Employee ID</th>
                    <th>Email</th>
                    <?php if ($this->session->userdata('admin')) {?>
                    <th>Action</th>
                    <?php }?>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $result) {?>
                <tr>
                    <td><?php echo $result->userName ?></td>
                    <td><?php echo $result->employeeID ?></td>
                    <td><?php echo $result->email ?></td>
                    <?php if ($this->session->userdata('admin')) {?>
                    <td><a href="<?php base_url()?>employeeList/editinfo/<?php echo $result->id ?>"><i
                                class="fa fa-edit"></i></a>
                        <a href=""><i data-userid="<?php echo $result->id ?>" class="fa fa-trash"></i></a>

                    </td>
                    <?php }?>
                </tr>
                <?php }?>

            </tbody>
        </table>
    </div>
</div>

<?php include "template/footer.php"?>