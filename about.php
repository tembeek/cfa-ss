<?php
global $org_name_and_acronym;
$pageTitle = 'About';
include_once __DIR__ . '/includes/header.php';
?>
<section class="mb-10">
    <img src="assets/women-training-baac.jpeg"
         alt="Women training"
         class="w-full h-74 object-cover rounded-lg shadow mb-6"
         onerror="this.onerror=null;this.src='https://placehold.co/1200x600?text=Women+Training'">
    <h2 class="text-2xl font-bold text-blue-900">Who We Are</h2>
    <p class="mt-3"><?= h($org_name_and_acronym) ?> is a women-led, church-based organization registered
        with the Relief and Rehabilitation Commission in 2023. We empower women, youth, and vulnerable communities
        through education, health, livelihoods, and church mobilization grounded in Christian values.</p>
</section>

<section class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-semibold text-blue-900 mb-2">Vision</h3>
        <p>To see lives transformed through Christ's teachings, empowering women and children to realize their God-given
            potential.</p>
    </div>

    <div class="bg-white p-6 rounded-lg shadow">
        <h3 class="text-xl font-semibold text-blue-900 mb-2">Mission & Values</h3>
        <p>We follow Christ into communities that need hope. Our core values are compassion, stewardship,
            accountability, truthfulness, and service. We prioritize equity, diversity, and inclusion in all work.</p>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
