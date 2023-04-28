<?php
    $blockedPrev = $current_page == 1 ? 'disabled' : '';
?>

<li class="page-item <?= $blockedPrev ?> previous">
    <a class="page-link page-link-first" href="<?= $blockedPrev ? '' : $url . ($current_page - 1) ?>"><img src="/images/arrow-pangination.svg" alt="" aria-label="Previous"> </a>
</li>