<?php view("partials/temp.php") ?>
<?php view("partials/navbar.php") ?>
<?php view("partials/header.php", ["title" => $user["name"]]) ?>
<main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <a href="/notes" class="bg-red-600 hover:bg-red-800 p-3 text-white-300 rounded mb-5">return</a><br>
                <p class="mt-5">
                  <?php echo htmlspecialchars($user["name"] )?>
                </p>

                <form action="" class="mt-6 flex gap-x-3 " method="post">
                  <input type="hidden" name="_method" value="DELETE">
                  <input type="hidden" value="<?= $user["id"] ?>">
                  <button class="text-red-600 border border-red-600 px-4 py-2 rounded hover:bg-red-600 hover:text-gray-100 transition">delete</button>
                  <a href="note/edit?id=<?= $user["id"] ?>" class="text-gray-600 border border-gray-600 px-4 py-2 rounded hover:bg-gray-600 hover:text-gray-100 transition">edit</a>
                </form>
      </div>
    </main>
<?php view("partials/footer.php") ?>
