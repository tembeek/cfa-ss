<?php
$pageTitle = 'Get Involved';
include_once __DIR__ . '/includes/header.php';
?>

<header class="relative mb-12 rounded-lg overflow-hidden h-[28rem] flex items-center justify-center text-center">
    <img src="assets/peace-gbv-baak-kou-baac.jpeg"
         alt="Peace and GBV campaign"
         class="absolute inset-0 w-full h-full object-cover opacity-40"
         onerror="this.onerror=null;this.src='https://placehold.co/1200x700?text=Get+Involved';">

    <!-- dark overlay for text clarity -->
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 px-6 text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">
            Get Involved
        </h1>
        <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto leading-relaxed">
            Join hands with us to empower women, children, and youth across South Sudan.
        </p>
    </div>
</header>

<section class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-6">
    <div class="bg-white p-8 rounded-lg shadow">
        <h3 class="font-semibold text-blue-900 text-xl mb-2">Volunteer</h3>
        <p>Share your time and skills in training, community outreach, and program delivery.</p>
    </div>

    <div class="bg-white p-8 rounded-lg shadow">
        <h3 class="font-semibold text-blue-900 text-xl mb-2">Donate</h3>
        <p>Funds or in-kind donations support emergency response, education, and livelihoods.</p>
    </div>

    <div class="bg-white p-8 rounded-lg shadow">
        <h3 class="font-semibold text-blue-900 text-xl mb-2">Partner</h3>
        <p>Collaborate with us as a church, NGO, or donor to scale local solutions.</p>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
