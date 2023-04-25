
<footer class="text-center">
  <div class="container p-4">
    <section>
      <form id="subscribe-form" action="">
        <div class="row justify-content-center">
          <div class="col-auto">
            <p class="pt-2"><strong>Sign up for our newsletter</strong></p>
          </div>
          <div class="col-md-5 col-12">
            <div class="form-outline mb-4">
              <input type="email" id="email-input" class="form-control" />
              <label class="form-label" for="email-input">Email address</label>
            </div>
          </div>
          <div class="col-auto">
            <button type="submit" class="btn btn-outline-primary mb-4">Subscribe</button>
          </div>
        </div>
      </form>
    </section>
    <section class="mb-4">
      <p>Lemons are a popular citrus fruit that are widely used for their tangy flavor and numerous health benefits. They are a rich source of vitamin C, fiber, and antioxidants, and can help improve digestion, boost immunity, and promote healthy skin. Additionally, lemons are a versatile ingredient in many cuisines, and can be used in sweet and savory dishes alike.</p>
    </section>
  </div>
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2023 All rights reserved.
  </div>

<script>
  const form = document.querySelector('#subscribe-form');
  const emailInput = document.querySelector('#email-input');
  form.addEventListener('submit', (e) => {
    e.preventDefault();
    const email = emailInput.value;
    // Here you can add code to submit the email to a server/database
    alert(`Thank you for subscribing, ${email}!`);
    emailInput.value = '';
  });
</script>

</footer>
