<aside class="main-sidebar">
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <?= \app\components\widgets\menu\SidebarUserPanel::widget(['asset'=>$directoryAsset]); ?>

        <!-- Sidebar app menu -->
        <?= \app\components\widgets\menu\ApplicationMenu::widget(); ?>
    </section>
</aside>
