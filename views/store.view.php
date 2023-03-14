<?php require base_path('views/partials/head.php') ?>

<div class="text-center mx-auto text-w-7xl px-2 sm:px-6 lg:px-8">
    <!-- <button id="get_member" class="mt-5 px-4 py-2 bg-indigo-500 text-white rounded shadow-md">
        Get Member Data
    </button> -->

    <div class="px-5 py-5">
        <table id="user_table" class="">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
    
</div>
    

<?php require base_path('views/partials/footer.php') ?>

<script>

    $(function(){
        $('#user_table').DataTable({
            ajax: '/users',

            columns: [
                {data: "username"},

                {data: "email"},

                {data: "phone"},

                {data: "gender"},
                
                {data: "address"}
            ]
        });
    })

</script>
