<?php require_once('../inc/header.php'); ?>
<?php require_once('../inc/navbar.php'); ?>

<style>
    .container {
    backdrop-filter: blur(5px);
    background: rgba(0, 0, 0, 0.3);
    border-radius: 12px;
    padding: 40px;
}

label {
    font-weight: bold;
    color: #ffd700;
}

.form-control {
    background-color: rgba(255, 255, 255, 0.85);
    border: none;
    border-radius: 10px;
    padding: 10px;
}

.btn-warning {
    border-radius: 10px;
}

</style>

<div class="container my-5 text-white">

  <div class="text-center mb-5">
    <h1 class="fw-bold">Contact Us</h1>
    <hr class="w-25 mx-auto border-light">
    <p>We’d love to hear from you! Feel free to reach out using the details below.</p>
  </div>

  <div class="row g-5">

    <!-- Left Side: Contact Info -->
    <div class="col-md-6">
      <div class="p-4 rounded shadow" style="background: rgba(0,0,0,0.4);">
        <h4 class="fw-bold text-warning mb-3">School Information</h4>
        <p><i class="bi bi-geo-alt-fill text-warning"></i> <strong>Address:</strong> Barangay San Pedro, Santa Ana, Pampanga</p>
        <p><i class="bi bi-telephone-fill text-warning"></i> <strong>Phone:</strong> 0917 708 3425</p>
        <p><i class="bi bi-envelope-fill text-warning"></i> <strong>Email:</strong> smacp.official@gmail.com</p>
        <p><i class="bi bi-clock-fill text-warning"></i> <strong>Office Hours:</strong> Mon–Fri, 8:00 AM – 5:00 PM</p>
      </div>

      <div class="mt-4 rounded overflow-hidden shadow">
       <iframe
  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10621.123456789!2d120.7680!3d15.0777!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b7ad14c13d13%3A0x9ef4e6407ef257ff!2sBarangay%20San%20Pedro%2C%20Santa%20Ana%2C%20Pampanga!5e0!3m2!1sen!2sph!4v1633024800000"
  width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy">
</iframe>

      </div>
    </div>

    <!-- Right Side: Contact Form -->
    <div class="col-md-6">
      <div class="p-4 rounded shadow" style="background: rgba(0,0,0,0.4);">
        <h4 class="fw-bold text-warning mb-3">Send Us a Message</h4>
        <form action="#" method="post">
          <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" id="name" class="form-control" placeholder="Enter your name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea id="message" class="form-control" rows="4" placeholder="Type your message..." required></textarea>
          </div>
          <button type="submit" class="btn btn-warning fw-bold w-100">Send Message</button>
        </form>
      </div>
    </div>

  </div>
</div>

<?php require_once('../inc/footer.php'); ?>
