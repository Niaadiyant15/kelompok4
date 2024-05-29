document.addEventListener('DOMContentLoaded', function() {
    const cartCountElement = document.getElementById('cart-count');

    // Load cart count from localStorage
    loadCartCount();

    function increaseCartCount() {
        let count = Number(localStorage.getItem('cartCount')) || 0;
        count++;
        localStorage.setItem('cartCount', count);
        cartCountElement.innerText = count;
    }

    function loadCartCount() {
        let count = Number(localStorage.getItem('cartCount')) || 0;
        cartCountElement.innerText = count;
    }

    // Expose the function to the global scope
    window.increaseCartCount = increaseCartCount;
});
