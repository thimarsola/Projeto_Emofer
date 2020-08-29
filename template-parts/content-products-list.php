<ul>
    <?php
        $pageTitle = get_the_title();
        $productList = get_pages(['child_of'=> 9, 'sort_order' => 'asc']);
        foreach ($productList as $product):
    ?>     
            <?php if ($product->post_title == $pageTitle): ?>
                <li class="active">
                    <span>
                        <a href="<?= $product->guid; ?>"><?= $product->post_title; ?></a>
                    </span>
                </li>
            <?php else: ?>
                <li>
                    <span>
                        <a href="<?= $product->guid; ?>"><?= $product->post_title; ?></a>
                    </span>
                </li>
            <?php endif; ?>
                
    <?php endforeach; ?>
</ul>
