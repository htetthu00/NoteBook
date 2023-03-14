<?php require base_path('views/partials/head.php') ?>

    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <form class="mt-8 space-y-6" method="POST" action="/users" id="register-form" enctype="multipart/form-data">
                <div class="rounded-md shadow-md p-4">   
                    <div class="mb-9">
                        <h2 class="mt-1 mb-3 text-center text-3xl font-bold tracking-tight text-gray-900">Register</h2>
                    </div>

                    <?php include(base_path('views/partials/page-info.php')); ?>

                    <div class="mt-5">
                        <label for="username" class="sr-only">Username</label>
                        <input id="username" name="username" type="text"  class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Username">
                    </div>

                    <div class="mt-4">
                        <label for="email" class="sr-only">Email</label>
                        <input id="email" name="email" type="email"  autocomplete="email"  class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email">
                    </div>

                    <div class="mt-4">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password"  class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                    </div>

                    <div class="mt-4">
                       <label for="phone" class="sr-only">Phone</label>
                        <input id="phone" name="phone" type="text"  class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Phone">
                    </div>
                    <p class="text-md mt-4 font-bold text-gray-900">Gender</p>
                    <div class="flex items-center my-4 ml-4">
                        <input id="gender1" type="radio" value="Male" name="gender"  class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 ">
                        <label for="gender" class="ml-2 text-sm font-medium text-gray-900">Male</label>
                    </div>
                    <div class="flex items-center ml-4">
                        <input id="gender2" type="radio" value="Female" name="gender" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300">
                        <label for="gender" class="ml-2 text-sm font-medium text-gray-900">Female</label>
                    </div>
                    <div class="mt-4">
                       <label for="address" class="sr-only">Address</label>
                        <textarea name="address" id="address" cols="5" rows="4" class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Address"></textarea>
                    </div>

                    <p class="text-md mt-5 font-bold text-gray-900">Profile Pic</p>
                    <div class="mt-4">
                        <label for="profile" class="sr-only">Profile</label>
                        <input id="profile" name="profile" type="file"  class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                    </div>

                    <div>
                        <p class="mt-4 text-center text-md text-gray-600">
                            Already have account?
                            <a href="/login" class="font-medium text-indigo-600 hover:text-indigo-500">Login</a>
                        </p>
                    </div>
                </div>
                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none ">
                    Sign up
                    </button>
                </div>
            </form>
        </div>
    </div>
    

<?php require base_path('views/partials/footer.php') ?>
<script>
    $('#register-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            username: {
                required: true
            },
            phone: {
                required: true,
            }
        }
    })
    
</script>