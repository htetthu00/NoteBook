<?php require base_path('views/partials/head.php') ?> 
<div class="bg-slate-900 h-max p-5">
    <?php include(base_path('views/partials/page-info.php')); ?>
    <br>
    <h3 class="text-center text-slate-300 text-3xl mb-7 font-bold">Posts</h3>

    <a href="/posts/create" class="px-4 py-2 bg-blue-500 rounded mb-4 ml-9 hover:bg-blue-600">
        <i class="ri-add-box-line text-center mx-2"></i>
        Create Post
    </a>

    <div class="w-full">
        <div class=" mt-7 bg-slate-800 text-slate-300 shadow-lg rounded-md p-5 mx-9 ">
            <table id="dataTable" class="text-slate-300">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Posts</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($posts as $key => $post) : ?>
                    <tr>
                        <td><?= $key+1 ?></td>
                        <td>
                            <?= substr(htmlspecialchars($post['body']), 0, 50) ?>...<a href="/post?id=<?= $post['id'] ?>" class="text-green-500 ml-3 hover:text-green-600">Show More</a>
                        </td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="id" value="<?= $post['id'] ?>" >
                                <!-- ajax လွတ်မည်ဆိုပါက data-id ထည့်ရန်။ -->
                                <a href="/post/edit?id=<?= $post['id'] ?>" class="text-sm rounded px-3 py-1 bg-green-600 text-white"><i class="ri-edit-box-line"></i>Edit Post</a>
                                <button type="submit" class="delete_form text-sm rounded px-3 py-1 bg-rose-600 text-white"><i class="ri-delete-bin-6-line"></i>Delete Post</button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div> 
<div class="bg-slate-900 h-max p-5 mx-auto text-slate-300 text-center">
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
    Harum praesentium quisquam maiores nemo autem, vitae odit deleniti 
    libero voluptas ipsa dignissimos minima dolorem corporis veniam reiciendis recusandae eum quaerat sit.
    Harum praesentium quisquam maiores nemo autem, vitae odit deleniti 
    libero voluptas ipsa dignissimos minima dolorem corporis veniam reiciendis recusandae eum quaerat sit.
    Harum praesentium quisquam maiores nemo autem, vitae odit deleniti 
    libero voluptas ipsa dignissimos minima dolorem corporis veniam reiciendis recusandae eum quaerat sit.
    Harum praesentium quisquam maiores nemo autem, vitae odit deleniti 
    libero voluptas ipsa dignissimos minima dolorem corporis veniam reiciendis recusandae eum quaerat sit.
</div>   

<?php require base_path('views/partials/footer.php') ?>

<script>
    $('.delete_form').on('click', function(e) {
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure want to delete this post?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).submit();
                }
            })
    })

    // $(document).on('click', '.delete_form', function(e) {
    //     e.preventDefault();

    //     Swal.fire({
    //         title: 'Are you sure want to delete this post?',
    //         icon: 'warning',
    //         showCancelButton: true,
    //         confirmButtonColor: '#3085d6',
    //         cancelButtonColor: '#d33',
    //         confirmButtonText: 'Yes'
    //         }).then((result) => {
    //             if (result.isConfirmed) {
    //                 $.ajax({
    //                     url: "/post",
    //                     method: "POST",
    //                     data: {
    //                         id: $(this).data('id'),
    //                         _method: 'DELETE'
    //                     }
    //                 }).done((result) => {
    //                     location.reload();
    //                 })
    //             }
    //         })
    // })
</script>



