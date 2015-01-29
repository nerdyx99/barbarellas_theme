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
  <?php if($is_front): ?>
    <div class="flexslider">
      <ul class="slides">
        <li><img src="<?php echo $base_path . $path_to_barbarellas; ?>/images/main-bg-01.jpg"></li>
        <li><img src="<?php echo $base_path . $path_to_barbarellas; ?>/images/main-bg-02.jpg"></li>
      </ul>
    </div>

  <?php endif;?>

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
      <div class="l-header-region animate">
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
          <section class="l-featured row animate">
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
          <?php if (!empty($page['pre_content'])): ?>
            <?php print render($page['pre_content']); ?>
          <?php endif;?>
          
          <?php print render($page['content']); ?>

          <?php if (!empty($page['post_content'])): ?>
            <?php print render($page['post_content']); ?>
          <?php endif;?>
        <?php endif; ?>

        

      </div>
      <!--/.main region -->
      <?php if (!empty($page['sidebar_first'])): ?>
        <aside role="complementary" class="<?php print $sidebar_first_grid; ?> sidebar-first columns sidebar">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside role="complementary" class="<?php print $sidebar_sec_grid; ?> sidebar-second columns sidebar">
          <div class="instagram-block">
            <h2><img class="" src="<?php echo $base_path . $path_to_barbarellas?>/images/icon-instagram.png">&nbsp;&nbsp;#barbarellasvipgirls</h2>
            <div id="instafeed"></div>  
          </div>
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </div>
    <!--/.row -->

    <?php if($is_front):?>
      <div class="sub-section">
        <div class="row">
          <div class="medium-4 columns animate">
            <?php print render($page['sub_section_1']); ?>
          </div>
          <div class="medium-4 columns animate">
            <?php print render($page['sub_section_2']); ?>
          </div>
          <div class="medium-4 columns animate last">
            <h2><img class="" src="<?php echo $base_path . $path_to_barbarellas?>/images/icon-instagram.png">&nbsp;&nbsp;#barbarellasvipgirls</h2>
            <div id="instafeed"></div>
            
          </div>
        </div>  
      </div>
    <?php endif;?>
  </main>
  <!--/.main-->

  <?php if (!empty($page['footer_firstcolumn']) || !empty($page['footer_secondcolumn']) || !empty($page['footer_thirdcolumn']) || !empty($page['footer_fourthcolumn'])): ?>
    <!--.footer-columns -->
    <div class="l-footer-columns">
      <section class="row">
        <?php if (!empty($page['footer_firstcolumn'])): ?>
          <div class="footer-first medium-3 columns">
            <?php print render($page['footer_firstcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_secondcolumn'])): ?>
          <div class="footer-second medium-3 columns">
            <?php print render($page['footer_secondcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_thirdcolumn'])): ?>
          <div class="footer-third medium-3 columns">
            <?php print render($page['footer_thirdcolumn']); ?>
          </div>
        <?php endif; ?>
        <?php if (!empty($page['footer_fourthcolumn'])): ?>
          <div class="footer-fourth medium-3 columns">
            <?php print render($page['footer_fourthcolumn']); ?>
          </div>
        <?php endif; ?>
      </section>  
    </div>
    
    <!--/.footer-columns-->
  <?php endif; ?>

  <!--.l-footer-->
  <footer class="l-footer" role="contentinfo">
    <div class="row">
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
    </div>
  </footer>
  <!--/.footer-->

  <?php if ($messages && $zurb_foundation_messages_modal): print $messages; endif; ?>
</div>
<!--/.page -->



