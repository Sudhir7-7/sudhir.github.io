<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sudhir Basnet - Portfolio</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      darkMode: 'class'
    };
  </script>
  <link rel="stylesheet" href="style.css">
</head>
<body class="bg-white text-black dark:bg-zinc-950 dark:text-white transition-colors duration-300">

<!-- Navbar -->
<nav id="navbar" class="fixed top-0 left-0 w-full bg-white dark:bg-zinc-900 z-50 backdrop-blur-md py-4 px-6 flex justify-between items-center shadow-md transition-colors">
  <h1 class="text-xl font-bold"></h1>
  <ul class="hidden md:flex gap-6 text-sm sm:text-base">
    <li><a href="#about" class="nav-link">About</a></li>
    <li><a href="#services" class="nav-link">Services</a></li>
    <li><a href="#portfolio" class="nav-link">Portfolio</a></li>
    <li><a href="#skills" class="nav-link">Skills</a></li>
    <li><a href="#testimonials" class="nav-link">Testimonials</a></li>
  </ul>

  <!-- Dark Mode Toggle -->
  <button id="darkToggle" class="ml-4">
    <svg id="moonIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
      <path d="M21 12.79A9 9 0 0111.21 3 7 7 0 1012 21a9 9 0 009-8.21z" />
    </svg>
    <svg id="sunIcon" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 hidden" fill="currentColor" viewBox="0 0 24 24">
      <path d="M12 18a6 6 0 100-12 6 6 0 000 12zm0 4a1 1 0 011 1v1h-2v-1a1 1 0 011-1zm0-20a1 1 0 011-1v1h-2V1a1 1 0 011-1zm10 11a1 1 0 010 2h-1v-2h1zM3 12a1 1 0 010-2H2v2h1zm15.071-7.071a1 1 0 010 1.414L17.414 7l-1.414-1.414a1 1 0 011.414-1.414zM6.586 16.586a1 1 0 010 1.414L5.172 19l-1.414-1.414a1 1 0 011.414-1.414zm12.728 12.728a1 1 0 01-1.414 0L17 22.586l1.414-1.414a1 1 0 011.414 1.414zM6.586 7.414A1 1 0 015.172 6L3.758 7.414A1 1 0 015.172 8.828z" />
    </svg>
  </button>

  <!-- Hamburger -->
  <button class="md:hidden ml-4" id="hamburger">
    <svg class="w-6 h-6 text-black dark:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
    </svg>
  </button>
</nav>

<!-- Mobile Menu -->
<div id="mobileMenu" class="hidden md:hidden bg-zinc-800 text-white p-6 space-y-4 transition-all duration-300">
  <a href="#about" class="block nav-link">About</a>
  <a href="#services" class="block nav-link">Services</a>
  <a href="#portfolio" class="block nav-link">Portfolio</a>
  <a href="#skills" class="block nav-link">Skills</a>
  <a href="#testimonials" class="block nav-link">Testimonials</a>
</div>

<!-- Main Content -->
<main class="pt-24 px-6 sm:px-12">
  <!-- Header -->
  <section class="text-center mb-20">
    <h1 class="text-4xl sm:text-5xl font-extrabold mb-4">Sudhir Basnet</h1>
    <p class="text-lg text-zinc-600 dark:text-zinc-400">Full Stack PHP Developer| Graphic Designer| Creative Consultant</p>
    <div class="mt-6 flex flex-wrap justify-center gap-4">
      <a href="assets/resume.pdf" download class="bg-indigo-500 hover:bg-indigo-600 text-white px-4 py-2 rounded flex items-center gap-2">
        📄 Download Resume
      </a>
      <a href="mailto:sudhirbasnet19@gmail.com" class="border border-black dark:border-white px-4 py-2 rounded hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">✉️ sudhirbasnet19@gmail.com</a>
      <a href="tel:+9779849009574" class="border border-black dark:border-white px-4 py-2 rounded hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">📞 +977-9849009574</a>
      <a href="https://github.com/Sudhir7-7/sudhir.github.io" class="border border-black dark:border-white px-4 py-2 rounded hover:bg-black hover:text-white dark:hover:bg-white dark:hover:text-black transition">🔗 Git</a>
    </div>
  </section>

  <!-- About -->
  <section id="about" class="text-center mb-20 max-w-4xl mx-auto">
    <h2 class="text-3xl font-bold mb-4">About Me</h2>
    <p class="text-zinc-600 dark:text-zinc-400">I’m a passionate IT personnel with full stack php knowledge, UI/UX design, and creative consulting.</p>
  </section>

  <!-- Services -->
  <section id="services" class="mb-20 max-w-6xl mx-auto">
    <h2 class="text-3xl font-bold text-center mb-10">Services</h2>
    <div class="grid md:grid-cols-3 gap-6 text-center">
      <div class="bg-zinc-100 dark:bg-zinc-900 p-6 rounded">
        🎨<h3 class="text-xl font-semibold my-2">Brand Identity</h3>
        <p class="text-zinc-600 dark:text-zinc-400">Logos, typography, and color systems that define your brand’s personality.</p>
      </div>
      <div class="bg-zinc-100 dark:bg-zinc-900 p-6 rounded">
        💼<h3 class="text-xl font-semibold my-2">Php</h3>
        <p class="text-zinc-600 dark:text-zinc-400">Php as backend to build website and other web based products..</p>
      </div>
      <div class="bg-zinc-100 dark:bg-zinc-900 p-6 rounded">
        ⭐<h3 class="text-xl font-semibold my-2">UI/UX Design</h3>
        <p class="text-zinc-600 dark:text-zinc-400">Modern interfaces focused on usability and style.</p>
      </div>
    </div>
  </section>

 <!-- Portfolio -->
<section id="portfolio" class="mb-20 max-w-6xl mx-auto">
  <h2 class="text-3xl font-bold text-center mb-10">Portfolio</h2>
  <div class="grid md:grid-cols-2 gap-6">
    <div class="bg-zinc-100 dark:bg-zinc-900 p-4 rounded">
      <img src="assets/project1.jpg" alt="Project 1" class="rounded mb-4 w-full h-52 object-cover">
      <h3 class="text-xl font-semibold dark:text-white">Hotel Room Booking System</h3>
      <p class="text-zinc-600 dark:text-zinc-400">Logo, website UI and full system in php for a hotel startup.</p>
    </div>
    <div class="bg-zinc-100 dark:bg-zinc-900 p-4 rounded">
      <img src="assets/project2.jpg" alt="Project 2" class="rounded mb-4 w-full h-52 object-cover">
      <h3 class="text-xl font-semibold dark:text-white">Online Police Complaint System</h3>
      <p class="text-zinc-600 dark:text-zinc-400">Created a full system for online complaints in php.</p>
    </div>
  </div>
</section>

<!-- Skills -->
<section id="skills" class="text-center mb-20 max-w-4xl mx-auto">
  <h2 class="text-3xl font-bold mb-6">Skills</h2>
  <div class="flex flex-wrap justify-center gap-3 text-sm">
    <span class="bg-zinc-100 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-xl">Photoshop</span>
    <span class="bg-zinc-100 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-xl">Website</span>
    <span class="bg-zinc-100 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-xl">Php</span>
    <span class="bg-zinc-100 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-xl">Web system</span>
    <span class="bg-zinc-100 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-xl">HTML/CSS</span>
    <span class="bg-zinc-100 dark:bg-zinc-800 text-zinc-800 dark:text-zinc-200 px-4 py-2 rounded-xl"></span>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="text-center mb-20 max-w-4xl mx-auto">
  <h2 class="text-3xl font-bold mb-6">Testimonials</h2>
  <div class="bg-zinc-100 dark:bg-zinc-900 p-6 rounded">
    <p class="italic text-zinc-700 dark:text-zinc-300 mb-2">“Sudhir transformed our visual brand from basic to brilliant.”</p>
    <p class="text-zinc-600 dark:text-zinc-400">— Karki S., Creative Director at ... Agency</p>
  </div>
</section>

  <footer class="text-center text-zinc-500 text-sm mt-20 pb-10">
    &copy; <?= date("Y") ?> Sudhir Basnet. All rights reserved.
  </footer>
</main>

<!-- Dark Mode & Hamburger Script -->
<script>
  const darkToggle = document.getElementById('darkToggle');
  const root = document.documentElement;
  const moonIcon = document.getElementById('moonIcon');
  const sunIcon = document.getElementById('sunIcon');

  function updateIcons() {
    const isDark = root.classList.contains('dark');
    moonIcon.classList.toggle('hidden', isDark);
    sunIcon.classList.toggle('hidden', !isDark);
  }

  // Set initial mode and icon
  if (localStorage.getItem('theme') === 'dark') {
    root.classList.add('dark');
  } else {
    root.classList.remove('dark');
  }
  updateIcons();

  // Toggle theme and icon on click
  darkToggle.addEventListener('click', () => {
    root.classList.toggle('dark');
    localStorage.setItem('theme', root.classList.contains('dark') ? 'dark' : 'light');
    updateIcons();
  });

  // Hamburger toggle
  const hamburger = document.getElementById('hamburger');
  const mobileMenu = document.getElementById('mobileMenu');
  hamburger.addEventListener('click', () => {
    mobileMenu.classList.toggle('hidden');
  });
</script>

</body>
</html>
