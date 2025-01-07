<?php view("partials/temp.php") ?>
<?php view("partials/navbar.php") ?>
<?php view("partials/header.php", ["title" => "list notes:"]) ?>
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
        <a href="/note/create" class="hover:bg-indigo-600 hover:text-gray-200 border rounded mx-2 border-gray-600 px-4 py-2">create note :</a>
    </div>
</main>
<?php view("partials/footer.php") ?>