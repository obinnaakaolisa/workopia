//toggle the mobile menu when in mobile view
document.querySelector('#hamburger').addEventListener('click', function () {
    const mobile_menu = document.querySelector('#mobile-menu');
    mobile_menu.classList.toggle('hidden');
});