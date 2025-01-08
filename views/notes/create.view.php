<?php $title= "add note :"  ?>
<?php view("partials/temp.php") ?>
<?php view("partials/navbar.php") ?>
<?php view("partials/header.php", ["title" => "add note :"]) ?>
    <main>
    <div class="col-span-full p-5">
        <form method="POST" action="/notes">
            <label for="body" class="block text-sm/6 font-medium text-gray-900">add a thought :</label>
            <div class="mt-2">
              <textarea
              name="body"
              id="body"
              rows="3"
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= (isset($_POST["body"]) && !empty($errors)) ? $_POST["body"] : null ?></textarea>
              <p class="text-red-500 text-xs"><?= $body ?? $errors["body"] ?? null ?></p>
            </div>
            <button class="bg-blue-700 rounded p-2 mt-3 text-gray-100" type="submit">add note</button>
        </form>
        </div>
    </main>
<?php view("partials/footer.php") ?>