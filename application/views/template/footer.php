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

});
</script>
</body>

</html>