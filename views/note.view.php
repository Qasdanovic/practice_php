<?php require "partials/temp.php" ?>
<?php require "partials/navbar.php" ?>
<?php require "partials/header.php" ?>
<main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <a href="/notes" class="bg-red-600 hover:bg-red-800 p-3 text-white-300 rounded mb-5">return</a><br>
                <p class="mt-5">
                  <?php echo htmlspecialchars($user["name"] )?>
                </p>
      </div>
    </main>
<?php require "partials/footer.php" ?>
