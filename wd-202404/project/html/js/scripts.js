document.addEventListener('DOMContentLoaded', function() {
    let cartButton = document.getElementById('cart-button');
    let cartPopup = document.getElementById('cart-popup');

    cartButton.addEventListener('mouseover', function() {
        cartPopup.style.display = 'block';
    });

    cartButton.addEventListener('mouseout', function() {
        cartPopup.style.display = 'none';
    });

    cartPopup.addEventListener('mouseover', function() {
        cartPopup.style.display = 'block';
    });

    cartPopup.addEventListener('mouseout', function() {
        cartPopup.style.display = 'none';
    });

    let slides = document.querySelectorAll('.slide');
    let currentSlide = 0;

    function showSlide(index) {
        slides[currentSlide].style.display = 'none';
        currentSlide = (index + slides.length) % slides.length;
        slides[currentSlide].style.display = 'block';
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    showSlide(currentSlide);
    setInterval(nextSlide, 3000);

    document.querySelectorAll('.add-to-cart').forEach(button => {
        button.addEventListener('click', function() {
            let productId = this.getAttribute('data-product');
            window.location.href = 'product.html?id=' + productId;
        });
    });
});
