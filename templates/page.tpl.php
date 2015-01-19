<!--.page -->
<div role="document" class="page">

  <!--.l-header region -->
  <header role="banner" class="l-header">

    <?php if ($top_bar): ?>
      <!--.top-bar -->
      <?php if ($top_bar_classes): ?>
      <div class="<?php print $top_bar_classes; ?>">
      <?php endif; ?>

      <div class="row">
        <div class="medium-12 columns">
          <h1><?php if ($linked_logo): print $linked_logo; endif; ?></h1>
          <nav class="top-bar" data-topbar <?php print $top_bar_options; ?>>
            <ul class="title-area">
              <li class="toggle-topbar menu-icon"><a href="#"><span><?php print $top_bar_menu_text; ?></span></a></li>
            </ul>
            <section class="top-bar-section">
              <?php if ($top_bar_main_menu) :?>
                <?php print $top_bar_main_menu; ?>
              <?php endif; ?>
              <?php //if ($top_bar_secondary_menu) :?>
                <?php //print $top_bar_secondary_menu; ?>
              <?php //endif; ?>
            </section>
          </nav>
        </div>
      </div>
        

      <?php if ($top_bar_classes): ?>
      </div>
      <?php endif; ?>
      <!--/.top-bar -->
    <?php endif; ?>
  </header>
  <!--/.l-header -->

  <main role="main" class="l-main">

    

    <?php if ($messages && !$zurb_foundation_messages_modal): ?>
      <!--/.l-messages -->
      <section class="l-messages row">
        <div class="large-12 columns">
          <?php if ($messages): print $messages; endif; ?>
        </div>
      </section>
      <!--/.l-messages -->
    <?php endif; ?>

    <?php if (!empty($page['help'])): ?>
      <!--/.l-help -->
      <section class="l-help row">
        <div class="large-12 columns">
          <?php print render($page['help']); ?>
        </div>
      </section>
      <!--/.l-help -->
    <?php endif; ?>

    <?php if (!empty($page['header'])): ?>
      <!--.l-header-region -->
      <div class="l-header-region">
        <section class="row">
          <div class="large-12 columns">
            <?php print render($page['header']); ?>
          </div>
        </section>
      </div>
      
      <!--/.l-header-region -->
    <?php endif; ?>
    <div class="row">
      <div class="<?php print $main_grid; ?> main columns">
        <?php if (!empty($page['highlighted'])): ?>
          <div class="highlight">
            <?php print render($page['highlighted']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['featured'])): ?>
          <!--/.featured -->
          <section class="l-featured row">
            <div class="large-12 columns">
              <?php print render($page['featured']); ?>
            </div>
          </section>
          <!--/.l-featured -->
        <?php endif; ?>

        <a id="main-content"></a>

        <?php //if ($breadcrumb): print $breadcrumb; endif; ?>

        <?php if ($title && !$is_front): ?>
          <?php print render($title_prefix); ?>
          <h1 id="page-title" class="title"><?php print $title; ?></h1>
          <?php print render($title_suffix); ?>
        <?php endif; ?>

        <?php if (!empty($tabs)): ?>
          <?php print render($tabs); ?>
          <?php if (!empty($tabs2)): print render($tabs2); endif; ?>
        <?php endif; ?>

        <?php if ($action_links): ?>
          <ul class="action-links">
            <?php print render($action_links); ?>
          </ul>
        <?php endif; ?>
        <?php if(!$is_front):?>
          <?php print render($page['content']); ?>
        <?php endif; ?>
      </div>
      <!--/.main region -->
    </div>
    

    <?php if (!empty($page['sidebar_first'])): ?>
      <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
        <?php print render($page['sidebar_first']); ?>
      </aside>
    <?php endif; ?>

    <?php if (!empty($page['sidebar_second'])): ?>
      <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
        <?php print render($page['sidebar_second']); ?>
      </aside>
    <?php endif; ?>
  </main>
  <!--/.main-->

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <section class="row l-footer-columns">
      <?php if (!empty($page['footer_firstcolumn'])): ?>
        <div class="footer-first large-3 columns">
          <?php print render($page['footer_firstcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_secondcolumn'])): ?>
        <div class="footer-second large-3 columns">
          <?php print render($page['footer_secondcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_thirdcolumn'])): ?>
        <div class="footer-third large-3 columns">
          <?php print render($page['footer_thirdcolumn']); ?>
        </div>
      <?php endif; ?>
      <?php if (!empty($page['footer_fourthcolumn'])): ?>
        <div class="footer-fourth large-3 columns">
          <?php print render($page['footer_fourthcolumn']); ?>
        </div>
      <?php endif; ?>
    </section>
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer-->
  <footer class="l-footer panel row" role="contentinfo">
    <?php if (!empty($page['footer'])): ?>
      <div class="footer large-12 columns">
        <?php print render($page['footer']); ?>
      </div>
    <?php endif; ?>

    <?php if ($site_name) :?>
      <div class="copyright large-12 columns">
        &copy; <?php print date('Y') . ' ' . check_plain($site_name) . ' ' . t('All rights reserved.'); ?>
      </div>
    <?php endif; ?>
  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->
