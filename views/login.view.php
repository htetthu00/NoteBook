<?php require base_path('views/partials/head.php') ?>

<div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="w-full max-w-sm space-y-8 mt-6">
        <form class="mt-8 space-y-6" method="POST" action="/auth" id="login-form">
            <div class="rounded-md shadow-md p-6">
                <div class="mb-9">
                    <h2 class="mt-1 text-center text-2xl font-bold tracking-tight text-gray-900">Sign in to your account</h2>
                </div>
                <?php include(base_path('views/partials/page-info.php')); ?>
                <div class="mt-4">
                    <label for="email" class="sr-only">Email</label>
                    <input id="email" name="email" type="email" autocomplete="email" required class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Email">
                </div>
                <div class="mt-4">
                    <label for="password" class="sr-only">Password</label>
                    <input id="password" name="password" type="password" required class="relative block w-full appearance-none  rounded-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                </div>
                <div class="flex items-center justify-between mt-8">
                  <div class="flex items-center">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                    <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                  </div>

                  <div class="text-sm">
                      <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                  </div>
                </div>
              </div>
            <div>
                <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none ">
                Sign in
                </button>
            </div>
            <div>
              <p class=" text-center text-md text-gray-600">
                  Don't have account?
                  <a href="/register" class="font-medium text-indigo-600 hover:text-indigo-500">Register</a>
              </p>
            </div>
        </form>
    </div>
</div>

<?php require base_path('views/partials/footer.php') ?>

<script>
    $('#login-form').validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            password: {
                required: true
            },
        }
    })
    
</script>