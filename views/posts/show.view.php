<?php require base_path('views/partials/head.php') ?> 

<main>
    <div class="mx-auto text-center p-5">
        <h3 class="font-bold text-lg mb-6">Author : <?= ucwords($member['username']) ?></h3>
        <p><?= $post['body']//htmlspecialchars($post['body']) ?></p>

        <form method="POST" id="delete_from">
            <input type="hidden" name="_method" value="DELETE">
            <input type="hidden" name="id" value="<?= $post['id'] ?>">
            <button class="text-sm text-red-500 mt-7">Delete Post</button>
        </form>

    </div>
</main>

<?php require base_path('views/partials/footer.php') ?>

<script>

    let delete_form = document.getElementById('delete_from');

    delete_form.addEventListener('submit', function(e){
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure want to delete this post?',
            // text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
            }).then((result) => {
                if (result.isConfirmed) {
                    delete_form.submit();
                }
            })
    })
    
</script>