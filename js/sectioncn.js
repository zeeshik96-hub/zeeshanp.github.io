document.querySelectorAll('nav .nav-link').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        const targetElement = document.querySelector(targetId);

        if (targetElement) {
            const yOffset = -1; // Adjust this value as per your navbar height
            const y = targetElement.getBoundingClientRect().top + window.pageYOffset + yOffset;
            window.scrollTo({ top: y, behavior: 'smooth' });
        }
    });
});



     document.addEventListener("DOMContentLoaded", function () {
        const topBtn = document.getElementById("scrollToTopBtn");
        const heroSection = document.getElementById("hero");

        window.addEventListener("scroll", function () {
            const heroHeight = heroSection.offsetHeight;
            if (window.scrollY > heroHeight) {
                topBtn.classList.add("show");
            } else {
                topBtn.classList.remove("show");
            }
        });

        topBtn.addEventListener("click", function () {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    });



     document.addEventListener("DOMContentLoaded", function () {
        const header = document.querySelector("section.header");
        const heroSection = document.getElementById("header");

        window.addEventListener("scroll", function () {
            const scrollTop = window.scrollY;
            const heroHeight = heroSection.offsetHeight;

            if (scrollTop > heroHeight) {
                header.classList.add("sticky");
            } else {
                header.classList.remove("sticky");
            }
        });
    });


   document.addEventListener("DOMContentLoaded", function () {
    const sections = document.querySelectorAll("section[id]");
    const navLinks = document.querySelectorAll(".nav-link");

    // 🔁 Highlight nav link on scroll
    function activateLink() {
        let scrollPos = window.scrollY + 100; // Adjust offset if needed

        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            const id = section.getAttribute("id");

            if (scrollPos >= top && scrollPos < top + height) {
                navLinks.forEach(link => {
                    link.classList.remove("active");
                    if (link.getAttribute("href") === `#${id}`) {
                        link.classList.add("active");
                    }
                });
            }
        });
    }

    window.addEventListener("scroll", activateLink);

    // ✅ Scroll to section manually with offset on click
    navLinks.forEach(link => {
        link.addEventListener("click", function (e) {
            e.preventDefault(); // Stop default jump

            const targetId = this.getAttribute("href");
            const target = document.querySelector(targetId);

            if (target) {
                const offset = 0; // Header height
                const top = target.offsetTop - offset;

                window.scrollTo({
                    top: top,
                    behavior: "smooth"
                });
            }
        });
    });
});