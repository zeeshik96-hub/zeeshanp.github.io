// Just smooth scroll + close offcanvas
document.addEventListener("DOMContentLoaded", function () {
    const offcanvasElement = document.getElementById('offcanvasNavbar');
    const bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvasElement);

    document.querySelectorAll('#offcanvasNavbar .nav-link').forEach(function (link) {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetEl = document.querySelector(targetId);

            if (targetEl) {
                bsOffcanvas.hide();
                setTimeout(() => {
                    targetEl.scrollIntoView({ behavior: 'smooth' });
                }, 300);
            }
        });
    });
});
