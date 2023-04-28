<?= $this->render('_partials/_previous', compact('current_page','url')); ?>

<?php
$outOfRange = false;
for ($i = 1; $i <= $total_pages; $i++) {

    if ($i <= 2 || $i >= $total_pages || abs($i - $current_page) <= 1) {
        $outOfRange = false;
        if ($i == $current_page) {
            echo "<li class='disabled page-item active'><a class='page-link' href='#'>{$i}</a></li>";
        } else {
            echo "<li class='page-item'><a class='page-link' href='" . $url . $i . "'>{$i}</a></li>";
        }
    } else {

        if (!$outOfRange) {
            echo "<li class='disabled page-item'><a class='page-link'>...</a></li>";
        }

        $outOfRange = true;

    }
}
?>

<?= $this->render('_partials/_next', compact('current_page','url', 'total_pages')); ?>