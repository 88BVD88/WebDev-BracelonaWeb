// Example of simple parallax effect
window.addEventListener('scroll', function() {
    const parallaxBack = document.querySelector('.parallax__layer--back');
    let offset = window.pageYOffset;
    parallaxBack.style.transform = 'translateY(' + offset * 0.5 + 'px)';
});


