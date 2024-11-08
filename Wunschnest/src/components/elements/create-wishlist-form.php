<!-- Create Wishlist Form -->
<div>
    <form class="mx-auto max-w-sm">
        <div class="mb-5">
            <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Name</label>
            <input type="text" id="name" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required placeholder="Mein Superduper Geschenk" />
        </div>
        <div class="mb-5">
            <label for="price" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Preis</label>
            <input type="number" id="price" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="9,99" />
        </div>
        <div class="mb-5">
            <label for="target-date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Datum</label>
            <input type="date" id="target-date" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="9,99" />
        </div>
        <div class="mb-5">
            <label for="categories" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kategorie</label>
            <select id="categories" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Wähle eine Kategorie</option>
                <?php
                foreach ($categories as $category) {
                    echo '<option value="' . $category['category_id'] . '">' . $category['name'] . '</option>';
                }
                ?>
            </select>
        </div>
        <div class="mb-5 items-start">
            <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Beschreibung:</label>
            <textarea id="description" rows="4" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Mein Super Duper Geschenk kann alles. Und alles ist super." /></textarea>
        </div>
        <div class="mb-5 flex items-start">
            <div class="flex h-5 items-center">
                <input id="favorit" type="checkbox" value="" class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600" required />
            </div>
            <label for="favorit" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-200">Als Favorit markieren</label>
        </div>
        <button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto">Submit</button>
    </form>
</div>