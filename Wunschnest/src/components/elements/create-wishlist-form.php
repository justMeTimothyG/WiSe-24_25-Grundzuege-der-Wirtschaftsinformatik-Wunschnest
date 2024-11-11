<!-- Create Wishlist Form -->
<div>
    <form action="/forms_create_wishlist.php" method="post" class="mx-auto max-w-sm">
        <div class="mb-5">
            <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Name</label>
            <input type="text" id="name" name="name" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required placeholder="Geburtstagswünsche" />
        </div>
        <div class="mb-5">
            <label for="target-date" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Datum</label>
            <input type="date" id="target-date" name="target-date" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="9,99" />
        </div>
        <div class="mb-5 items-start">
            <label for="description" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Beschreibung:</label>
            <textarea id="description" name="description" rows="4" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Mein Super Duper Geschenk kann alles. Und alles ist super." /></textarea>
        </div>
        <div class="mb-5 flex items-start">
            <div class="flex h-5 items-center">
                <input id="favorite" type="checkbox" name="favorite" class="focus:ring-3 h-4 w-4 rounded border border-gray-300 bg-gray-50 focus:ring-blue-300 dark:border-gray-600 dark:bg-gray-700 dark:ring-offset-gray-800 dark:focus:ring-blue-600" />
            </div>
            <label for="favorite" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-200">Als Favorit markieren</label>
        </div>
        <button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto">Submit</button>
    </form>
</div>