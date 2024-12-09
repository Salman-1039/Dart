<aside id="sidebar">
    <?php if (is_active_sidebar('main-sidebar')) : ?>
        <?php dynamic_sidebar('main-sidebar'); ?>
    <?php else : ?>
        <div class="widget">
            <h2>Default Sidebar Content</h2>
            <p>Add widgets to the sidebar from the WordPress admin panel.</p>
        </div>
    <?php endif; ?>
</aside>
