<!-- Create Wishlist Form -->
<div>
    <form action="/forms_create_category.php" method="post" class="mx-auto max-w-sm">
        <div class="mb-5">
            <label for="name" class="mb-2 block text-sm font-medium text-gray-900 dark:text-gray-200">Name</label>
            <input type="text" id="name" name="name" class="block w-full rounded-lg border border-gray-300 p-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" required placeholder="Kategorie" />
        </div>
        <button type="submit" class="w-full rounded-lg bg-blue-700 px-5 py-2.5 text-center text-sm font-medium text-white hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 sm:w-auto">Hinzufügen</button>
    </form>
</div>