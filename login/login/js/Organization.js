document.addEventListener('DOMContentLoaded', () => {
  const nextBtns = document.querySelectorAll('button[id^="next-btn"]');
  const prevBtns = document.querySelectorAll('button[id^="prev-btn"]');
  const submitBtn = document.getElementById('submit-btn');

  nextBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const step = btn.closest('.step');
      step.classList.remove('step-active');
      step.nextElementSibling.classList.add('step-active');
    });
  });

  prevBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      const step = btn.closest('.step');
      step.classList.remove('step-active');
      step.previousElementSibling.classList.add('step-active');
    });
  });

  submitBtn.addEventListener('click', () => {
    // Submit the form here
    console.log('Form submitted!');
  });
});