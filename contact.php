<?php
global $org_acronym;
$pageTitle = 'Contact';
include_once __DIR__ . '/includes/header.php';

/**
 * Generate safe, accessible contact links from an environment variable.
 * Supports multiple comma-separated values (e.g. key=value1,value2)
 *
 * @param string $envName Environment variable name.
 * @param string $type 'email' or 'phone'.
 * @param string $labelText Optional label context for aria.
 * @param string $fallback Fallback text if variable missing.
 * @return string           Comma-separated HTML links or fallback.
 */
function displayContact(string $envName, string $type = 'email', string $labelText = '', string $fallback = '[unavailable]'): string {
    $raw = getenv($envName);
    if (!$raw) {
        return htmlspecialchars($fallback, ENT_QUOTES);
    }

    $values = array_filter(array_map('trim', explode(',', $raw)));
    if (empty($values)) {
        return htmlspecialchars($fallback, ENT_QUOTES);
    }

    $links = [];

    foreach ($values as $value) {
        $safeLabel = htmlspecialchars($value, ENT_QUOTES);

        if ($type === 'phone') {
            $telHref = preg_replace('/\D+/', '', $value);
            $aria = $labelText
                    ? "aria-label=\"Call $labelText at $safeLabel\""
                    : "aria-label=\"Call $safeLabel\"";
            $links[] = "<a href=\"tel:$telHref\" class=\"text-blue-900 hover:underline ml-2\" $aria>$safeLabel</a>";

        } elseif ($type === 'email') {
            $aria = $labelText
                    ? "aria-label=\"Email $labelText at $safeLabel\""
                    : "aria-label=\"Email $safeLabel\"";
            $links[] = "<a href=\"mailto:$safeLabel\" class=\"text-blue-900 hover:underline ml-2\" $aria>$safeLabel</a>";
        }
    }

    // join multiple contacts with comma+space
    return implode(', ', $links);
}

?>

<header class="relative mb-12 rounded-lg overflow-hidden h-[28rem] flex items-center justify-center text-center">
    <img src="assets/contact-us-3-unsplash.jpg"
         alt="Community gathering"
         class="absolute inset-0 w-full h-full object-cover opacity-50"
         onerror="this.onerror=null;this.src='https://placehold.co/1200x700?text=Contact+Us';">
    <div class="relative z-10 px-6 text-white">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Contact Us</h1>
        <p class="text-lg md:text-xl text-white/90 max-w-2xl mx-auto">
            Reach out to us through our main or national offices. We're always open to partnerships, ideas, and
            community engagement.
        </p>
    </div>
</header>

<section class="max-w-5xl mx-auto px-6 py-10 grid md:grid-cols-2 gap-8 text-center md:text-left">
    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-blue-900 mb-4">Main Office</h2>
        <p class="text-gray-700 leading-relaxed">
            <strong>Location:</strong> St. Joseph Women's Center<br> Majak Akoon, Aweil East, South Sudan
        </p>

        <p class="mt-4 text-gray-700">
            <strong>Phone:</strong>
            <?= displayContact('CFASS_AWEIL_PHONE', 'phone', "$org_acronym main office") ?>
        </p>

        <p class="text-gray-700">
            <strong>Email:</strong>
            <?= displayContact('CFASS_OFFICE_EMAIL', 'email', "$org_acronym main office") ?>
        </p>
    </div>

    <div class="bg-white p-8 rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold text-blue-900 mb-4">Juba Office</h2>
        <p class="text-gray-700 leading-relaxed">
            <strong>Location:</strong> 3K South, Thongpiny (<em>near Juba Airport</em>)<br> Juba, Jubek, South Sudan
        </p>

        <p class="mt-4 text-gray-700">
            <strong>Phone:</strong>
            <?= displayContact('CFASS_JUBA_PHONE', 'phone', "$org_acronym main office") ?>
        </p>

        <p class="text-gray-700">
            <strong>Email:</strong>
            <?= displayContact('CFASS_JUBA_EMAIL', 'email', "$org_acronym Juba office") ?>
        </p>
    </div>
</section>

<section class="max-w-5xl mx-auto px-6 pb-12 text-center">
    <h2 class="text-2xl font-semibold text-blue-900 mb-4">Connect With Us</h2>
    <p class="text-gray-700 mb-6 max-w-2xl mx-auto">
        Follow us on social media for updates on peacebuilding, youth empowerment, and women's development projects
        across South Sudan.
    </p>

    <div class="flex justify-center gap-6 text-blue-900 text-2xl">
        <a href="#" aria-label="Facebook (opens in new tab)" class="hover:text-blue-700" target="_blank" rel="noopener">
            <span class="sr-only">Facebook</span>
            <i class="fab fa-facebook" aria-hidden="true"></i>
        </a>

        <a href="#" aria-label="Twitter (opens in new tab)" class="hover:text-blue-700" target="_blank" rel="noopener">
            <span class="sr-only">Twitter</span>
            <i class="fab fa-twitter" aria-hidden="true"></i>
        </a>

        <a href="#" aria-label="Instagram (opens in new tab)" class="hover:text-blue-700" target="_blank"
           rel="noopener">
            <span class="sr-only">Instagram</span>
            <i class="fab fa-instagram" aria-hidden="true"></i>
        </a>
    </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
