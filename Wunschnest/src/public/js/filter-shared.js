// Select Category Tags
const categoryTags = document.querySelectorAll('.category-tag');

// Select Reset Filter Button
const resetFilter = document.querySelector('.category-reset');

// Loop through each Tagg and add a Click litener
categoryTags.forEach((tag) => {
  tag.addEventListener('click', function () {
    // Select child span element and get inner text for category name
    const category_name = tag.querySelector('span').innerText;
    // Select all Wishlist Card Items with this category name in the data-category attribute
    const wishlistItems = document.querySelectorAll(`[data-category='${category_name}']`);
    // Loop through each Wishlist Card Item and show it
    wishlistItems.forEach((item) => {
      item.classList.remove('hidden');
    });
    // Select all Wishlist Card Items without this category name in the data-category attribute
    const otherWishlistItems = document.querySelectorAll(
      `[data-category]:not([data-category='${category_name}'])`,
    );
    // Loop through each Wishlist Card Item and hide it
    otherWishlistItems.forEach((item) => {
      item.classList.add('hidden');
    });
    // Show Reset Button
    resetFilter.classList.remove('hidden');

    // Toggle BG Color of Selected Tag
    categoryTags.forEach((button) => {
      console.log(button);
      button.classList.remove('bg-orange-500');
    });
    tag.classList.add('bg-orange-500');
  });
});

// Reset Filter
resetFilter.addEventListener('click', function () {
  // Select all Wishlist Card Items
  const wishlistItems = document.querySelectorAll('[data-category]');
  // Loop through each Wishlist Card Item and show it
  wishlistItems.forEach((item) => {
    item.classList.remove('hidden');
  });
  // Hide Reset Button
  resetFilter.classList.add('hidden');
});
