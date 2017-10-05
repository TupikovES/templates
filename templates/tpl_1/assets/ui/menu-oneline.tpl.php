<ul class="nav justify-content-center">

    <?php $last_level = 0; ?>

    <?php foreach($menu as $id=>$item){ ?>

        <li class="nav-item">
            <a <?php if (!empty($item['title'])) {?>title="<?php echo html($item['title']); ?>"<?php } ?> class="nav-link" <?php echo $data_attr; ?> href="<?php echo !empty($item['url']) ? htmlspecialchars($item['url']) : 'javascript:void(0)'; ?>" <?php if ($onclick) { ?>onclick="<?php echo $onclick; ?>"<?php } ?> <?php if ($target) { ?>target="<?php echo $target; ?>"<?php } ?>>
                <?php if (!empty($item['title'])) { html($item['title']); } ?>
                <?php if (isset($item['counter']) && $item['counter']){ ?>
                    <span class="counter"><?php html($item['counter']); ?></span>
                <?php } ?>
            </a>
        </li>

    <?php } ?>

</ul>
