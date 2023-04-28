<?php
$blockedNext = $current_page == $total_pages ? 'disabled' : '';
?>

<li class="page-item <?= $blockedNext ?> next">
    <a class="page-link page-link-last" href="<?= $blockedNext ? '' : $url . ($current_page + 1) ?>" aria-label="Next"><img src="/images/arrow-pangination.svg" alt=""> </a>
</li>
