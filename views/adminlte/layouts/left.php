<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <?= \app\widgets\menu\SidebarUserPanel::widget(['asset'=>$directoryAsset]); ?>

        <!-- Sidebar app menu -->
        <?= \app\widgets\menu\ApplicationMenu::widget(); ?>
    </section>
</aside>
