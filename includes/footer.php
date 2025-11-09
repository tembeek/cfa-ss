<?php
// includes/footer.php
global $org_name_and_acronym;
?>
</main>

<footer class="bg-blue-900 text-white text-center py-6 mt-auto">
    <div class="max-w-6xl mx-auto px-6 space-y-2">
        <p>&copy; <?= date('Y') . " " . h($org_name_and_acronym) ?>. All rights reserved.</p>

        <!-- Webmail Access Link with Icon -->
        <p class="flex justify-center items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke-width="2" stroke="currentColor"
                 class="w-5 h-5 text-blue-200">
                <path stroke-linecap="round" stroke-linejoin="round"
                      d="M3 8l9 6 9-6M21 8v8a2 2 0 01-2 2H5a2 2 0 01-2-2V8m18 0L12 14 3 8" />
            </svg>
            <a href="/webmail" target="_blank" rel="noopener noreferrer"
               class="text-blue-200 hover:text-white hover:underline hover:font-semibold">
                Access Organization Webmail
            </a>
        </p>
    </div>
</footer>

<!--<script src="assets/main.js"></script>-->
</body>
</html>
