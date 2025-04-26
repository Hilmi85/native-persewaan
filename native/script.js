// Menggunakan JavaScript untuk menambahkan kelas "scrolled" pada navbar ketika discroll
window.onscroll = function() {
    var navbar = document.querySelector('.navbar');
    if (window.scrollY > 100) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
};

//Efek transparant nav dropdown
document.addEventListener('DOMContentLoaded', function () {
var dropdown = document.querySelector('.nav-item.dropdown');
var dropdownMenu = document.querySelector('.nav-item.dropdown .dropdown-menu');

window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
        // Set transparansi ketika discroll
        dropdownMenu.style.backgroundColor = 'rgba(255, 255, 255, 1)';
    } else {
        // Kembalikan ke warna asli saat tidak discroll
        dropdownMenu.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
    }
});
});