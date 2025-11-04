<?php
global $org_name_and_acronym;
$pageTitle = 'Home';
include_once __DIR__ . '/includes/header.php';
?>
<header class="relative bg-blue-900 text-white mb-6 h-[32rem] flex items-center justify-center text-center rounded-lg overflow-hidden">
    <div class="absolute inset-0">
        <img src="assets/peace-advocacy-akuem.jpeg"
             alt="Peace and advocacy sessions"
             class="w-full h-full object-cover opacity-50"
             onerror="this.onerror=null;this.src='https://placehold.co/1200x500?text=Empowering+Communities'">
    </div>
    <div class="relative px-6">
        <h1 class="text-3xl md:text-4xl font-bold">Empowering Women and Children Across South Sudan</h1>
        <p class="mt-3 text-lg md:text-xl">Guided by faith. Driven by compassion. Building sustainable change.</p>
    </div>
</header>

<section class="text-center mb-12">
    <h2 class="text-2xl md:text-3xl font-bold text-blue-900">Welcome to <?= h($org_name_and_acronym) ?></h2>
    <p class="max-w-3xl mx-auto mt-4">We are a women-led, church-based organization empowering South Sudanese
        communities through education, health, livelihood, and faith-based initiatives. We bring peace, restore dignity,
        and strengthen families.</p>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6">
    <article class="bg-white p-6 rounded-lg shadow">
        <img src="assets/women-training-baac.jpeg"
             alt="Women training in Baac"
             class="w-full h-44 object-cover rounded mb-4"
             onerror="this.onerror=null;this.src='https://placehold.co/600x350?text=Women+Training'">
        <h3 class="font-semibold text-lg text-blue-900">Women & Youth Empowerment</h3>
        <p class="mt-2">Leadership, vocational training, and peacebuilding programs for women and youth.</p>
    </article>

    <article class="bg-white p-6 rounded-lg shadow">
        <img src="assets/child-training-gordhim.jpeg"
             alt="Child training in Gordhim parish"
             class="w-full h-44 object-cover rounded mb-4"
             onerror="this.onerror=null;this.src='https://placehold.co/600x350?text=Child+Training'">
        <h3 class="font-semibold text-lg text-blue-900">Child Development</h3>
        <p class="mt-2">Talent workshops and safe learning spaces in parish schools and community centers.</p>
    </article>

    <article class="bg-white p-6 rounded-lg shadow">
        <img src="assets/peace-gbv-baak-kou-baac.jpeg"
             alt="Peace and GBV campaign"
             class="w-full h-44 object-cover rounded mb-4"
             onerror="this.onerror=null;this.src='https://placehold.co/600x350?text=Peace+Campaign'">
        <h3 class="font-semibold text-lg text-blue-900">Protection & Advocacy</h3>
        <p class="mt-2">Community campaigns addressing gender-based violence and promoting peaceful coexistence.</p>
    </article>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
