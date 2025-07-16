const form = document.getElementById('contact-form');

  form.addEventListener("submit", async function(event) {
    event.preventDefault(); // stop the default page reload

    const formData = new FormData(form);

    await fetch(form.action, {
      method: form.method,
      body: formData,
      headers: {
        'Accept': 'application/json'
      }
    });

    alert("✅ Your message has been sent!");
    form.reset(); // clears form fields
  });
