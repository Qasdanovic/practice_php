<?php view("partials/temp.php"); $errors = []; ?>
<?php view("partials/navbar.php") ?>
<?php view("partials/header.php", ["title" => "edit note :"]) ?>
    <main>
    <div class="col-span-full p-5">
        <form method="POST" action="/note">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $user["id"] ?>">
            <label for="body" class="block text-sm/6 font-medium text-gray-900">add a thought :</label>
            <div class="mt-2">
              <textarea
              name="body"
              id="body"
              rows="3"
              class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"><?= $user["name"] ?></textarea>
            </div>
            <?php if(isset($errors["body"]) ) : ?>
                <p class="text-red-600 text-xs"><?= $errors["body"] ?></p>
            <?php endif ?>
            <button class="bg-blue-700 rounded p-2 mt-3 text-gray-100" type="submit">Update</button>
            <a href="/notes" class="bg-red-700 rounded p-2 mt-3 text-gray-100">Cancel</a>
        </form>
        </div>
    </main>
<?php view("partials/footer.php") ?>