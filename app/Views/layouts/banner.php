<?php
// Inner-page banner partial. Variables: $banner array.
$banner = $banner ?? [];
// rawHtml: full verbatim banner block (hero slides etc.), rendered as-is.
if (!empty($banner['rawHtml'])) {
    echo $banner['rawHtml'];
    return;
}
$bannerClass = $banner['class'] ?? '';
$bannerTitle = $banner['title'] ?? '';
$crumbs = $banner['crumbs'] ?? [];
?>
<!--================= Banner Section Start Here =================-->
<div class="banner banner1 <?= $bannerClass ?>">
    <div class="inner-page-banner banner-bg">
        <div class="container">
            <div class="banner-content">
                <div class="page-path">
                    <ul>
                        <?php foreach ($crumbs as $crumb): ?>
                        <li<?= !empty($crumb['liClass']) ? ' class="' . htmlspecialchars($crumb['liClass']) . '"' : '' ?>><a class="<?= htmlspecialchars($crumb['class'] ?? '') ?>" href="<?= htmlspecialchars($crumb['href'] ?? '#') ?>"><?= htmlspecialchars($crumb['text'] ?? '') ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <h1 class="banner-heading"><?= htmlspecialchars($bannerTitle) ?></h1>
            </div>
        </div>
    </div>
</div>
<!--================= Banner Section End Here =================-->
