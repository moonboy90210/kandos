// Menu Filtering Logic
const buttons = document.querySelectorAll("#menuTabs .nav-link");
const items = document.querySelectorAll(".menu-item");

buttons.forEach((btn) => {
  btn.addEventListener("click", () => {
    // Make clicked tab active
    buttons.forEach((b) => b.classList.remove("active"));
    btn.classList.add("active");

    const filter = btn.getAttribute("data-filter");

    // Filter items
    items.forEach((item) => {
      if (filter === "all" || item.classList.contains(filter)) {
        item.style.display = "block";
        item.style.opacity = "1";
      } else {
        item.style.display = "none";
      }
    });
  });
});

//  --- Reservation Form Logic
(function () {
  const modal = document.getElementById("reserveModal2");
  const confirmBody = document.getElementById("confirmBody");
  const toast = document.getElementById("toast");
  const status = document.getElementById("status");

  // Validate fields with "required" attribute
  function validateForm() {
    let valid = true;

    document.querySelectorAll("#reserveForm [required]").forEach((field) => {
      const err = field.parentElement.querySelector(".error");
      if (!field.value) {
        if (err) err.textContent = "Required";
        valid = false;
      } else {
        if (err) err.textContent = "";
      }
    });

    return valid;
  }

  // Check availability (mock)
  const checkBtn = document.getElementById("checkBtn");
  if (checkBtn) {
    checkBtn.addEventListener("click", () => {
      if (!validateForm()) return;

      status.textContent = "Checking availability...";

      setTimeout(() => {
        status.textContent = "Table available ✔ You can proceed.";
      }, 600);
    });
  }

  // FORM SUBMISSION → SHOW CONFIRMATION MODAL
  const form = document.getElementById("reserveForm");
  if (form) {
    form.addEventListener("submit", (e) => {
      e.preventDefault();
      if (!validateForm()) return;

      const f = new FormData(e.target);
      const d = Object.fromEntries(f.entries());

      confirmBody.innerHTML = `
        <p><strong>Name:</strong> ${d.fName}</p>
        <p><strong>Email:</strong> ${d.email}</p>
        <p><strong>Phone:</strong> ${d.phone}</p>
        <p><strong>Guests:</strong> ${d.guests}</p>
        <p><strong>Date:</strong> ${d.date}</p>
        <p><strong>Time:</strong> ${d.time}</p>
        <p><strong>Notes:</strong> ${d.notes || "—"}</p>
      `;

      modal.setAttribute("aria-hidden", "false");
    });
  }

  // CLOSE MODAL BUTTON
  const cancelModal = document.getElementById("cancelModal");
  if (cancelModal) {
    cancelModal.addEventListener("click", () => {
      modal.setAttribute("aria-hidden", "true");
    });
  }

  // CONFIRM & SHOW TOAST
  const sendConfirm = document.getElementById("sendConfirm");
  if (sendConfirm) {
    sendConfirm.addEventListener("click", () => {
      modal.setAttribute("aria-hidden", "true");
      showToast("Reservation confirmed! A confirmation email will be sent.");
    });
  }

  // Toast function
  function showToast(msg) {
    toast.textContent = msg;
    toast.hidden = false;

    setTimeout(() => (toast.hidden = true), 4500);
  }
})();

// // Signature slider
let slideIndex = 0;
const slides = document.querySelectorAll(".signature-slide");

function showSlide(n) {
  slides.forEach((slide) => slide.classList.remove("active"));
  slides[n].classList.add("active");
}

document.querySelector(".next").addEventListener("click", () => {
  slideIndex = (slideIndex + 1) % slides.length;
  showSlide(slideIndex);
});

document.querySelector(".prev").addEventListener("click", () => {
  slideIndex = (slideIndex - 1 + slides.length) % slides.length;
  showSlide(slideIndex);
});

// Auto-slide (optional)
setInterval(() => {
  slideIndex = (slideIndex + 1) % slides.length;
  showSlide(slideIndex);
}, 4000);
