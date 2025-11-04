<?php
// includes/header.php
$org_name = "Christian Faith in Action South Sudan";
$org_acronym = "CFA-SS";
$org_name_and_acronym = "$org_name ($org_acronym)";

// Simple .env loader (only for local or non-framework PHP apps)
$envPath = __DIR__ . '/../.env.cfass';
if (file_exists($envPath)) {
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

<nav class="bg-gray-100 shadow">
    <div class="max-w-6xl mx-auto flex flex-wrap justify-center py-3 gap-2 px-4">
        <?php
        $pages = [
                'index' => 'Home',
                'about' => 'About',
                'programs' => 'Programs',
                'get-involved' => 'Get Involved',
                'impact' => 'Impact',
                'contact' => 'Contact'
        ];
        $current = basename($_SERVER['PHP_SELF'], '.php');
        foreach ($pages as $file => $label) {
            $active = ($file === $current) ? 'bg-blue-900 text-white' : 'text-blue-900';
            echo "<a href=\"{$file}.php\" class=\"px-4 py-2 font-semibold hover:bg-blue-900 hover:text-white rounded $active\">$label</a>";
        }
        ?>
    </div>
</nav>

<main class="flex-grow min-h-[700px] max-w-6xl mx-auto px-6 py-12">
