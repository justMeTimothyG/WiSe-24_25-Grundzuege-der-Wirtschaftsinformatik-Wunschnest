<?php
# This File needs follwing variables to functin
# $categories
# $wishlists
?>


<!-- Create Wishlist Form -->
<div>
    <form action="/forms_create_wish.php" method="post" class="mx-auto max-w-lg">
        <div class="mb-5">
            <label for="url" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">URL</label>
            <input type="text" name="url" id="url" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required placeholder="https://beispiel.de" />
        </div>
        <div class="mb-5">
            <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Name</label>
            <input type="text" name="name" id="name" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required placeholder="Mein Superduper Geschenk" />
        </div>
        <div class="mb-5">
            <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Preis</label>
            <input type="number" name="price" id="price" step="0.01" min="0" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="9,99" />
        </div>
        <div class="mb-5">
            <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategorie</label>
            <select id="categories" name="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Wähle eine Kategorie</option>
                <?php
                foreach ($categories as $category) {
                    echo '<option value="' . $category['category_id'] . '">' . $category['name'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mb-5">
            <label for="wishlist" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Wunschliste</label>
            <select id="wishlist" name="wishlist" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Wähle eine Liste</option>
                <?php
                foreach ($wishlists as $wishlist) {
                    echo '<option value="' . $wishlist['wishlist_id'] . '">' . $wishlist['name'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mb-5 items-start">
            <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Beschreibung:</label>
            <textarea id="description" name="description" rows="4" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Mein Super Duper Geschenk kann alles. Und alles ist super." /></textarea>
        </div>
        <button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto">Submit</button>
    </form>
</div>