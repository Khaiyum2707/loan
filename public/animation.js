// Function to hide the loader after the page has fully loaded
function hideLoader() {
  const loader = document.querySelector('.loader');
  loader.style.display = 'none';  // Hide loader once the page is loaded
}

// Hide loader once the page is fully loaded
window.addEventListener('load', hideLoader);

// Optionally, show loader on link click if it's a page navigation
document.querySelectorAll('a').forEach(link => {
  link.addEventListener('click', function () {
    const loader = document.querySelector('.loader');
    loader.style.display = 'block'; // Show loader on link click
  });
});


// Function to check if an element is in the viewport
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// On scroll, check for visibility and apply fade-in & slide effect
function checkCardsVisibility() {
  const cards = document.querySelectorAll('.card-custom');
  cards.forEach(card => {
    if (isElementInViewport(card)) {
      card.classList.add('card-visible');
    }
  });
}

// Run the check when the user scrolls
window.addEventListener('scroll', checkCardsVisibility);

// Also run the check immediately to handle cases where some cards are in view on page load
checkCardsVisibility();


