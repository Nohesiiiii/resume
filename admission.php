<?php require_once('../inc/header.php'); ?>
<?php require_once('../inc/navbar.php'); ?>

<style>
    .container {
    backdrop-filter: blur(5px);
    background: rgba(0, 0, 0, 0.3);
    border-radius: 12px;
    padding: 40px;
}

ul, ol {
    line-height: 1.8;
}

.btn-warning {
    border-radius: 10px;
    transition: 0.3s;
}

.btn-warning:hover {
    transform: scale(1.05);
    background-color: #ffcf40;
}

</style>
<div class="container my-5 text-white">

  <div class="text-center mb-5">
   <p class="mt-3 text-warning fw-bold fs-5">
    Enrollment Countdown: <span id="countdown"></span>
</p>

    <h1 class="fw-bold">Admission</h1>
    <hr class="w-25 mx-auto border-light">
    <p>Start your journey with <strong>SMACP</strong> — where education and excellence meet.</p>
  </div>

  <div class="row g-5">

    <!-- Admission Requirements -->
    <div class="col-md-6">
      <div class="p-4 rounded shadow" style="background: rgba(0,0,0,0.4);">
        <h4 class="fw-bold text-warning mb-3">Admission Requirements</h4>
        <ul>
          <li>Completed Application Form</li>
          <li>Form 138 (Report Card)</li>
          <li>Certificate of Good Moral Character</li>
          <li>Birth Certificate (PSA)</li>
          <li>2 pcs. 2x2 ID picture (white background)</li>
          <li>Entrance Exam Result (if applicable)</li>
        </ul>
      </div>

      <div class="p-4 mt-4 rounded shadow" style="background: rgba(0,0,0,0.4);">
        <h4 class="fw-bold text-warning mb-3">Enrollment Schedule</h4>
        <p><i class="bi bi-calendar-event-fill text-warning"></i> <strong>Start:</strong> April 15, 2025</p>
        <p><i class="bi bi-calendar-check-fill text-warning"></i> <strong>Deadline:</strong> June 30, 2025</p>
        <p><i class="bi bi-building-fill text-warning"></i> <strong>Office Hours:</strong> Monday to Friday, 8:00 AM – 5:00 PM</p>
      </div>
    </div>

    <!-- Enrollment Process -->
    <div class="col-md-6">
      <div class="p-4 rounded shadow" style="background: rgba(0,0,0,0.4);">
        <h4 class="fw-bold text-warning mb-3">Enrollment Steps</h4>
        <ol>
          <li>Secure and fill out the Admission Form at the Registrar’s Office or download it below.</li>
          <li>Submit all required documents for evaluation.</li>
          <li>Take the entrance exam (if applicable).</li>
          <li>Proceed to payment and secure your enrollment slip.</li>
          <li>Claim your student ID and schedule before classes start.</li>
        </ol>
        <div class="text-center mt-4">
          <a href="../files/Admission_Form.pdf" class="btn btn-warning fw-bold px-4 rounded-pill" download>
            <i class="bi bi-file-earmark-arrow-down"></i> Download Admission Form
          </a>
        </div>
      </div>
    </div>

  </div>
</div>

<script>
    function startSimpleCountdown(deadline) {
    const countdownEl = document.getElementById('countdown');
    if(!countdownEl) return;

    function updateCountdown() {
        const now = new Date();
        const end = new Date(deadline);

        let diff = end - now; // milliseconds

        if(diff <= 0){
            countdownEl.textContent = "Enrollment period has ended!";
            clearInterval(timer);
            return;
        }

        // Calculate days, hours, minutes, seconds
        const totalSeconds = Math.floor(diff / 1000);
        const days = Math.floor(totalSeconds / (60*60*24));
        const hours = Math.floor((totalSeconds % (60*60*24)) / 3600);
        const minutes = Math.floor((totalSeconds % 3600) / 60);
        const seconds = totalSeconds % 60;

        countdownEl.textContent = `${days}d ${hours}h ${minutes}m ${seconds}s`;
    }

    updateCountdown(); // run immediately
    const timer = setInterval(updateCountdown, 1000);
}

// Example: start now → Jan 1, 2026
startSimpleCountdown('2026-01-01 00:00:00');

    
</script>

<?php require_once('../inc/footer.php'); ?>
