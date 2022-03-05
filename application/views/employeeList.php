<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap 5 Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/admin/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" />
</head>

<body>

    <div class="container-fluid p-5 bg-primary text-white text-center">
        <h1>My First Bootstrap Page</h1>
        <p>Resize this responsive page to see the effect!</p>
    </div>

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
                        <td><a><i class="fa fa-edit"></i></a></td>
                    </tr>
                    <?php }?>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>