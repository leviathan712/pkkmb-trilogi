document.addEventListener('DOMContentLoaded', function () {
    // Dapatkan elemen tombol dan menu yang perlu di-toggle
    const toggleButton = document.querySelector('[data-collapse-toggle="mega-menu-full"]');
    const menu = document.getElementById('mega-menu-full');
    const dropdownButtons = document.querySelectorAll('.dropdown-button');
    let openDropdownMenu = null;

    // Tambahkan event listener pada tombol toggle menu
    toggleButton.addEventListener('click', function () {
        // Toggle kelas hidden untuk membuka/menutup menu
        menu.classList.toggle('hidden');
    });

    // Tambahkan event listener pada tombol dropdown
    dropdownButtons.forEach(button => {
        button.addEventListener('click', function () {
            const targetId = button.getAttribute('data-dropdown-target');
            const targetMenu = document.getElementById(targetId);

            // Cek jika ada menu yang terbuka
            if (openDropdownMenu && openDropdownMenu !== targetMenu) {
                // Tutup menu dropdown yang sudah terbuka
                openDropdownMenu.classList.add('hidden');
            }

            // Toggle kelas hidden untuk membuka/menutup dropdown yang dipilih
            targetMenu.classList.toggle('hidden');

            // Set menu yang baru dibuka sebagai yang terbuka
            openDropdownMenu = targetMenu.classList.contains('hidden') ? null : targetMenu;
        });
    });
});
