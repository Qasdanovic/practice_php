<?php require "partials/temp.php" ?>
<?php require "partials/navbar.php" ?>
<?php require "partials/header.php" ?>
<main>
    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <?php foreach($users as $user) : ?>
            <li>
                <a href="/note?id=<?= $user["id"] ?>" class="text-blue-600 hover:text-blue-200 hover:underline">
                    <?= $user["name"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </div>

    <div>
        <a href="/note/create" class="hover:underline">create note :</a>
    </div>
</main>
<?php require "partials/footer.php" ?>