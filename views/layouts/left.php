<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <?= \app\components\widgets\SidebarUserPanel::widget(['asset'=>$directoryAsset]); ?>

        <!-- Sidebar app menu -->
        <?= \app\components\widgets\ApplicationMenu::widget(); ?>
    </section>
</aside>
