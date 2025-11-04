<?php
// includes/footer.php
global $org_name_and_acronym;
?>
</main>

<footer class="bg-blue-900 text-white text-center py-6 mt-auto">
    <div class="max-w-6xl mx-auto px-6">
        <p>&copy; <?= date('Y') . " " . h($org_name_and_acronym) ?>. All rights reserved.</p>
    </div>
</footer>

<!--<script src="assets/main.js"></script>-->
</body>
</html>
