

 // Select all nav links
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    link.addEventListener("click", function () {
        navLinks.forEach(l => l.classList.remove("active"));
        this.classList.add("active");
    });
});

function showHelloModal() {
  var helloModal = new bootstrap.Modal(document.getElementById('helloModal'));
  helloModal.show();

  // Auto close after 2 seconds
  setTimeout(() => {
    helloModal.hide();
  }, 2000);
}
 

