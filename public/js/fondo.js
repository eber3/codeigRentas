window.addEventListener('scroll', function() {
    let offset = window.pageYOffset;
    document.querySelector('.header').style.backgroundPosition = `center ${offset * 0.5}px`;
});
