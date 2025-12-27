// document.getElementById('contactForm').addEventListener('submit', function(e) {
//   e.preventDefault(); // Stop normal submit

//   const form = e.target;

//   // ✅ Run Bootstrap validation
//   if (!form.checkValidity()) {
//     form.classList.add('was-validated'); // Show red borders if invalid
//     return; // Stop here if form is invalid
//   }

//   const data = new FormData(form);

//   fetch('https://formspree.io/f/mblkbbjn', {
//     method: 'POST',
//     body: data,
//     headers: { 'Accept': 'application/json' }
//   })
//   .then(response => {
//     if (response.ok) {
//       // 1. Close the form modal
//       var formModal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
//       formModal.hide();

//       // 2. Wait a bit, then show Thank You modal
//       setTimeout(() => {
//         var thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
//         thankYouModal.show();
//       }, 500);

//       // 3. Reset form and remove validation borders
//       form.reset();
//       form.classList.remove('was-validated');
//     } else {
//       alert('Oops! There was a problem submitting your form');
//     }
//   })
//   .catch(() => {
//     alert('Oops! Something went wrong');
//   });
// });



document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault(); // Stop actual submit

  const form = e.target;

  // ✅ Local validation
  if (!form.checkValidity()) {
    form.classList.add('was-validated');
    return;
  }

  // Close form modal
  var formModal = bootstrap.Modal.getInstance(document.getElementById('exampleModal'));
  formModal.hide();

  // Show Thank You modal after delay
  setTimeout(() => {
    var thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
    thankYouModal.show();
  }, 500);

  // Reset form
  form.reset();
  form.classList.remove('was-validated');
});


document.getElementById('contactForm2').addEventListener('submit', function(e) {
  e.preventDefault(); // Stop actual submit

  const form = e.target;

  // ✅ Local validation
  if (!form.checkValidity()) {
    form.classList.add('was-validated');
    return;
  }


  // Show Thank You modal after delay
  setTimeout(() => {
    var thankYouModal = new bootstrap.Modal(document.getElementById('thankYouModal'));
    thankYouModal.show();
  }, 500);

  // Reset form
  form.reset();
  form.classList.remove('was-validated');
});