const header = document.getElementById('header');
const menuToggle = document.getElementById('menuToggle');
const nav = document.getElementById('mainNav');

window.addEventListener('scroll', () => {
  header.classList.toggle('scrolled', window.scrollY > 12);
});

menuToggle.addEventListener('click', () => {
  const open = nav.classList.toggle('open');
  menuToggle.setAttribute('aria-expanded', String(open));
});

document.querySelectorAll('#mainNav a').forEach(link => {
  link.addEventListener('click', () => {
    nav.classList.remove('open');
    menuToggle.setAttribute('aria-expanded', 'false');
  });
});

const counters = document.querySelectorAll('[data-count]');
const counterObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (!entry.isIntersecting || entry.target.dataset.done) return;
    entry.target.dataset.done = '1';
    const target = Number(entry.target.dataset.count);
    const duration = 1300;
    const start = performance.now();

    function tick(now) {
      const progress = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      entry.target.textContent = Math.floor(target * eased).toLocaleString() + '+';
      if (progress < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  });
}, { threshold: 0.5 });

counters.forEach(counter => counterObserver.observe(counter));

const contactForm = document.getElementById('contactForm');
if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    const formNote = document.getElementById('formNote');
    if (formNote) formNote.textContent = 'Thank you! This demo form is ready to connect with your backend/email service.';
    e.target.reset();
  });
}

// ScrollReveal Animations
if (typeof ScrollReveal !== 'undefined') {
  const sr = ScrollReveal({
    distance: '40px',
    duration: 1000,
    delay: 100,
    reset: false,
    easing: 'cubic-bezier(0.25, 0.1, 0.25, 1)'
  });

  // Animate hero sections dynamically across all pages
  sr.reveal('main > section:first-of-type h1', { origin: 'bottom', delay: 100 });
  sr.reveal('main > section:first-of-type h2', { origin: 'bottom', delay: 100 });
  sr.reveal('main > section:first-of-type h3', { origin: 'bottom', delay: 150 });
  sr.reveal('main > section:first-of-type h4', { origin: 'bottom', delay: 100 });
  sr.reveal('main > section:first-of-type p', { origin: 'bottom', delay: 200 });
  sr.reveal('main > section:first-of-type a', { origin: 'bottom', delay: 300 });
  sr.reveal('main > section:first-of-type img', { origin: 'right', delay: 200 });
  
  // General scrolling animations for other sections
  sr.reveal('section h2:not(main > section:first-of-type h2)', { origin: 'bottom', distance: '30px', delay: 100 });
  sr.reveal('section h3:not(main > section:first-of-type h3)', { origin: 'bottom', distance: '30px', delay: 150 });
  sr.reveal('section p:not(main > section:first-of-type p)', { origin: 'bottom', distance: '30px', delay: 200 });
  sr.reveal('article', { origin: 'bottom', distance: '40px', interval: 100 });
}

// Card Cursor Animation
document.querySelectorAll('.cursor-card').forEach(card => {
  card.addEventListener('mousemove', e => {
    const rect = card.getBoundingClientRect();
    const x = e.clientX - rect.left;
    const y = e.clientY - rect.top;
    card.style.setProperty('--mouse-x', x + 'px');
    card.style.setProperty('--mouse-y', y + 'px');
  });
});
