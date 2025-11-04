<?php
$pageTitle = 'Contact';
include_once __DIR__ . '/includes/header.php';
?>
<header class="relative mb-6">
    <img src="assets/contact-us-3-unsplash.jpg"
         alt="Community gathering"
         class="w-full h-44 object-cover opacity-45 rounded-lg mb-6"
         onerror="this.onerror=null;this.src='https://placehold.co/1200x500?text=Contact+Us'">
    <div class="relative text-center -mt-32">
        <h1 class="text-2xl md:text-3xl font-bold text-white">Contact Us</h1>
        <p class="text-white/95">Main office and national office details below. Send us a message.</p>
    </div>
</header>

<section class="max-w-4xl mx-auto px-6 py-6">
    <div class="text-center mb-8">
        <p><strong>Main Office:</strong> Majak Akoon, St. Joseph Women's Center, Aweil East, South Sudan</p>
        <p><strong>National Office:</strong> Thong Piny, 3K South, Near Juba Airport, Jubek, South Sudan</p>
    </div>

    <form id="contactForm" class="bg-gray-50 p-6 rounded-lg shadow max-w-md mx-auto" method="post" action="#">
        <input type="text" id="name" name="name" placeholder="Your name" required
               class="w-full p-3 mb-3 border rounded">
        <input type="email" id="email" name="email" placeholder="Your email" required
               class="w-full p-3 mb-3 border rounded">
        <textarea id="message" name="message" rows="5" placeholder="Message" required
                  class="w-full p-3 mb-3 border rounded"></textarea>
        <button type="submit" class="bg-blue-900 text-white px-6 py-2 rounded hover:bg-blue-700">Send Message</button>
        <p id="response" class="text-green-600 font-semibold mt-3"></p>
    </form>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
