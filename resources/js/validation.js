document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('registrationForm');

    form.addEventListener('submit', function (event) {
        let valid = true;
        const email = document.getElementById('email');
        const nomor_hp = document.getElementById('nomor_hp');

        // Validasi format email
        if (!email.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
            valid = false;
            alert('Format email tidak sesuai');
        }

        // Validasi nomor HP
        if (isNaN(nomor_hp.value)) {
            valid = false;
            alert('Nomor HP harus berupa angka');
        }

        if (!valid) {
            event.preventDefault(); // Mencegah pengiriman form jika ada kesalahan
        }
    });
});
