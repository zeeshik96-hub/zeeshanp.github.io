const itiInstances = [];

  document.querySelectorAll("#phone, #phone2").forEach(input => {
    const iti = window.intlTelInput(input, {
      separateDialCode: true,
      preferredCountries: ["us", "gb", "in"],
      initialCountry: "auto",
      geoIpLookup: function (callback) {
        fetch('https://ipapi.co/json')
          .then(res => res.json())
          .then(data => callback(data.country_code))
          .catch(() => callback('us'));
      },
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/js/utils.js"
    });

    // Save the input + iti instance
    itiInstances.push({ input, iti });

    // Prevent alphabet input
    input.addEventListener("keypress", function (e) {
      const char = String.fromCharCode(e.which);
      if (!/[0-9]/.test(char)) {
        e.preventDefault();
      }
    });

    // Clear error message live when number becomes valid
    input.addEventListener("input", function () {
      if (iti.isValidNumber()) {
        input.setCustomValidity("");
      }
    });
  });

  // Form submission validation
  document.querySelectorAll("form").forEach(form => {
    form.addEventListener("submit", function (e) {
      let valid = true;

      itiInstances.forEach(({ input, iti }) => {
        if (form.contains(input)) {
          if (!iti.isValidNumber()) {
            valid = false;
            input.setCustomValidity("Please enter a valid phone number.");
            input.reportValidity();
          } else {
            input.setCustomValidity("");
          }
        }
      });

      if (!valid) {
        e.preventDefault();
      }
    });
  });