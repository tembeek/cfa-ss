<?php
// includes/header.php
$org_name = "Christian Faith in Action South Sudan";
$org_acronym = "CFA-SS";
$org_name_and_acronym = "$org_name ($org_acronym)";

/**
 * Robust .env loader for both local dev and shared hosting multi-site setups.
 * Looks up the correct .env path automatically.
 */

// Detect base path
$rootDir = dirname(__DIR__); // usually /home/username/public_html/website1/includes → /home/username/public_html/website1
$publicHtml = dirname($rootDir); // /home/username/public_html
$homeDir = dirname($publicHtml); // /home/username

// Default assumption: shared hosting structure /home/username/public_html/site
// Primary location: /home/username/.env  (shared across sites)
// Secondary: /home/username/public_html/website1/.env  (site-specific)
// Fallback: local .env in project root (dev)

$fn = '/.env.cfass';
$possibleEnvPaths = [
        $homeDir . $fn,    // global shared hosting env
        $rootDir . $fn,    // per-site env (website1/.env)
        $publicHtml . $fn  // fallback if mis-placed
];

// Pick the first readable one
$envPath = null;
foreach ($possibleEnvPaths as $path) {
    if (is_readable($path)) {
        $envPath = $path;
        break;
    }
}

// Load environment variables if file found
if ($envPath) {
    foreach (file($envPath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#')) {
            continue; // skip comments
        }

        [$name, $value] = array_map('trim', explode('=', $line, 2));
        if (!isset($_ENV[$name]) && !getenv($name)) {
            putenv("$name=$value");
            $_ENV[$name] = $value;
            $_SERVER[$name] = $value;
        }
    }
}

function h($string): string {
    return htmlspecialchars($string);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <title><?= h($org_name_and_acronym) ?> | <?= h($pageTitle ?? 'Home') ?></title>
    <link rel="icon" type="image/png" href="assets/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
          integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="antialiased text-gray-800 flex flex-col min-h-screen">
<header class="bg-blue-900 text-white">
    <div class="max-w-6xl mx-auto py-6 px-6 flex flex-col md:flex-row items-center justify-center md:justify-between text-center md:text-left gap-4">
        <div class="flex items-center justify-center gap-4">
            <a href="/">
                <img src="assets/logo_original.jpeg"
                     alt="<?= h($org_acronym) ?> Logo"
                     class="w-20 h-20 object-cover rounded-full border-4 border-white shadow-md"
                     onerror="this.onerror=null;this.src='https://placehold.co/120x120?text=Logo&bg=1e3a8a&fc=ffffff&radius=60';">
            </a>
            <div>
                <h1 class="text-2xl md:text-3xl font-bold leading-tight"><?= h($org_name_and_acronym) ?></h1>
                <p class="text-sm mt-1">Transforming lives through Christ-centered empowerment</p>
            </div>
        </div>
    </div>
</header>

<!-- Navigation -->
<nav class="bg-gray-100 shadow">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between items-center py-3">
            <!-- Hamburger button -->
            <button id="menu-btn" class="md:hidden text-blue-900 focus:outline-none" aria-label="Toggle menu">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <!-- Menu links -->
        <div id="menu" class="hidden md:flex flex-wrap justify-center gap-2 pb-3 md:pb-0">
            <?php
            $pages = [
                    'index' => 'Home', // FIXME: ensure there is no '/index' in the URL when clicking on 'Home' on live server
                    'about' => 'About',
                    'programs' => 'Programs',
                    'get-involved' => 'Get Involved',
                    'impact' => 'Impact',
                    'contact' => 'Contact'
            ];
            // Detect if running locally
            $isLocal = preg_match('/^(localhost|127\.0\.0\.1)(:\d+)?$/', $_SERVER['HTTP_HOST']);
            $ext = $isLocal ? '.php' : '';
            $current = basename($_SERVER['PHP_SELF'], '.php');
            foreach ($pages as $file => $label) {
                $active = ($file === $current) ? 'bg-blue-900 text-white' : 'text-blue-900';
                echo "<a href=\"{$file}{$ext}\" class=\"px-4 py-2 font-semibold hover:bg-blue-900 hover:text-white rounded $active\">$label</a>";
            }
            ?>
        </div>
    </div>
</nav>

<script>
    const btn = document.getElementById('menu-btn');
    const menu = document.getElementById('menu');
    btn.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>

<main class="flex-grow min-h-[700px] max-w-6xl mx-auto px-6 py-12">
