<ul>
    <?php
        $pageTitle = get_the_title();
        $informationtList = get_posts(['sort_order' => 'asc']);
        foreach ($informationtList as $information):
    ?>     
            <?php if ($information->post_title == $pageTitle): ?>
                <li class="active">
                    <span>
                        <a href="<?= $information->guid; ?>"><?= $information->post_title; ?></a>
                    </span>
                </li>
            <?php else: ?>
                <li>
                    <span>
                        <a href="<?= $information->guid; ?>"><?= $information->post_title; ?></a>
                    </span>
                </li>
            <?php endif; ?>
    <?php endforeach; ?>
</ul>
