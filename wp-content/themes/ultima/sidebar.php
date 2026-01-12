<?php
$ultima_qodef_sidebar = ultima_qodef_get_sidebar();
?>
<div class="qodef-column-inner">
    <aside class="qodef-sidebar">
        <?php
            if (is_active_sidebar($ultima_qodef_sidebar)) {
                dynamic_sidebar($ultima_qodef_sidebar);
            }
        ?>
    </aside>
</div>
