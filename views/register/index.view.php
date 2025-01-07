<?php view("partials/temp.php") ?>
<?php view("partials/navbar.php") ?>
<?php view("partials/header.php", ["title" => "Login page :"]) ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">

        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <form class="space-y-6" action="/login" method="POST">
                <p class="text-center text-red-600 text-2xl"> 
                    <?= $errors["check"]["email"] ?? null ?>
                </p>
            <div>
                <label for="email" class="block text-sm/6 font-medium text-gray-900">Email :</label>
                <div class="mt-2">
                <input type="email" name="email" id="email" autocomplete="email"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <p class="text-red-600 text-xs"><?= $errors["body"]["email"] ?? null ?></p>
                </div>
            </div>

            <div>
                <div class="flex items-center justify-between">
                <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
                <div class="text-sm">
                    <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-500">Forgot password?</a>
                </div>
                </div>
                <div class="mt-2">
                <input type="password" name="password" id="password" autocomplete="current-password"  class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                <p class="text-red-600 text-xs"><?= $errors["body"]["password"] ?? null ?></p>
                </div>
            </div>


            <div>
                <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
            </div>
            </form>
        </div>

    </div>
</main>
<?php view("partials/footer.php") ?>