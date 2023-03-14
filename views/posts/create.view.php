<?php require base_path('views/partials/head.php') ?> 
<div class="bg-gray-100 h-screen">
<main>
    <h3 class="text-center text-slate-600 text-3xl py-4 mb-7 font-bold">Create Post</h3>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <div class="md:grid md:grid-cols-2 md:gap-6">
            <div class="mt-5 md:col-span-2 md:mt-0"> 
                <form action="" method="POST" id="postForm">
                    <div class="shadow sm:rounded-md sm:overflow-hidden">
                        <div class="space-y-7 bg-white px-4 py-5 sm:p-6">
                            <div id="ed">
                            <?php include(base_path('views/partials/page-info.php')); ?>
                                <label for="body" class="block text-sm font-medium text-gray-700 mb-2">Post</label>
                                <textarea 
                                    name="body" 
                                    id="body" 
                                    rows="3" 
                                    placeholder="What's on your mind..."
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm p-3"
                                ><?= $_POST['body'] ?? '' ?></textarea>
                                <!-- <  isset($_POST['body']) ? $_POST['body'] : '' ရေးနည်း /> -->
                            </div>
                        </div>
                        <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button type="submit" class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700">Save</button>
                        </div>
                    </div>
                    <input type="hidden" name="_method" value="POST">
                </form>
            </div>

        </div>
    </div>
</main></div>
<?php require base_path('views/partials/footer.php') ?>
