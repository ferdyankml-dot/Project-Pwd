const statusBtn = document.getElementById('statusBtn');

if (statusBtn) {
    statusBtn.addEventListener('click', function() {
        if (statusBtn.innerText === 'Konfirmasi') {
            statusBtn.innerText = 'Selesai';
            statusBtn.disabled = true;
            statusBtn.classList.remove('btn-outline-dark');
            statusBtn.classList.add('btn-dark');
        }
    });
}