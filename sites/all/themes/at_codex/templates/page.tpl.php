<?php // AT Codex ?>	  
<div id="page-wrapper">
  <div id="page" class="<?php print $classes; ?>">

    <div id="header-wrapper" class="<?php print $page['header'] ? 'with-header-region' : 'no-header-region'; ?>">
      <div class="container clearfix">

        <div id="region-header-wrapper" class="clearfix">
          <?php print render($page['header']); ?>
        </div>

        <header<?php print $header_attributes; ?>>

          <?php if ($site_logo || $site_name || $site_slogan): ?>
            <div<?php print $branding_attributes; ?>>

              <!-- Logo -->
              <?php if ($site_logo): ?>
                <div id="logo"><?php print $site_logo; ?></div>
              <?php endif; ?>

              <?php if ($site_name || $site_slogan): ?>
                <hgroup<?php print $hgroup_attributes; ?>>
     
                 <?php if ($site_name): ?>
                   <h1<?php print $site_name_attributes; ?>><?php print $site_name; ?></h1>
                 <?php endif; ?>
     
                 <?php if ($site_slogan): ?>
                   <h2<?php print $site_slogan_attributes; ?>><?php print $site_slogan; ?></h2>
                 <?php endif; ?>
     
               </hgroup><!-- /end #name-and-slogan -->
              <?php endif; ?>

            </div><!-- /end #branding -->
          <?php endif; ?>

          <?php if ($page['menu_bar']): ?>
            <div id="menu-wrapper">
              <?php print render($page['menu_bar']); ?>
            </div>
          <?php endif; ?>

        </header>
      </div>
    </div>

    <?php if ($page['secondary_content']): ?>
      <div id="secondary-content-wrapper">
        <div class="image-overlay clearfix">
          <div class="container clearfix">
            <?php print render($page['secondary_content']); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if (
      $page['three_33_top'] ||
      $page['three_33_first'] ||
      $page['three_33_second'] ||
      $page['three_33_third'] ||
      $page['three_33_bottom']
      ): ?>
      <div id="sub-panels-wrapper"><div class="container clearfix">
        <!-- Three column 3x33 Gpanel -->
        <div class="at-panel gpanel panel-display three-3x33 clearfix">
          <?php print render($page['three_33_top']); ?>
          <?php print render($page['three_33_first']); ?>
          <?php print render($page['three_33_second']); ?>
          <?php print render($page['three_33_third']); ?>
          <?php print render($page['three_33_bottom']); ?>
        </div>
      </div></div>
    <?php endif; ?>

    <div id="content-wrapper">
      <div class="container">
        <div id="columns">
          <div class="columns-inner clearfix">
            <div id="content-column">
              <div class="content-inner">

                <?php if ($breadcrumb): ?>
                  <div id="breadcrumb-wrapper">
                    <section id="breadcrumb" class="clearfix">
                      <?php print $breadcrumb; ?>
                    </section>
                  </div>
                <?php endif; ?>

                <?php if ($messages || $page['help']): ?>
                  <div id="messages-help-wrapper">
                    <?php print $messages; ?>
                    <?php print render($page['help']); ?>
                  </div>
                <?php endif; ?>

                <?php print render($page['highlighted']); ?>

                <<?php print $tag; ?> id="main-content">
                  <?php print render($title_prefix); ?>
                  <?php if ($title): ?>
                    <header class="clearfix">
                      <h1 id="page-title"><?php print $title; ?></h1>
                    </header>
                  <?php endif; ?>
                  <?php print render($title_suffix); ?>

                  <?php if ($primary_local_tasks || $secondary_local_tasks || $action_links): ?>
                    <div id="tasks">
                      <?php if ($primary_local_tasks): ?>
                        <ul class="tabs primary clearfix"><?php print render($primary_local_tasks); ?></ul>
                      <?php endif; ?>
                      <?php if ($secondary_local_tasks): ?>
                        <ul class="tabs secondary clearfix"><?php print render($secondary_local_tasks); ?></ul>
                      <?php endif; ?>
                      <?php if ($action_links): ?>
                        <ul class="action-links clearfix"><?php print render($action_links); ?></ul>
                      <?php endif; ?>
                    </div>
                  <?php endif; ?>

                  <!-- region: Main Content -->
                  <?php if ($content = render($page['content'])): ?>
                    <div id="content">
                      <?php print $content; ?>
                    </div>
                  <?php endif; ?>

                  <?php // print $feed_icons; ?>

                </<?php print $tag; ?>>

                <!-- Two column 2x50 -->
                <?php if (
                  $page['two_50_top'] ||
                  $page['two_50_first'] ||
                  $page['two_50_second'] ||
                  $page['two_50_bottom']
                  ): ?>
                  <div class="at-panel gpanel panel-display two-50 clearfix">
                    <?php print render($page['two_50_top']); ?>
                    <?php print render($page['two_50_first']); ?>
                    <?php print render($page['two_50_second']); ?>
                    <?php print render($page['two_50_bottom']); ?>
                  </div>
                <?php endif; ?>

                <?php print render($page['content_aside']); ?>

              </div>
            </div>

            <?php print render($page['sidebar_first']); ?>
            <?php print render($page['sidebar_second']); ?>

            </div>
        </div>
      </div>
    </div>

    <?php if ($page['tertiary_content']): ?>
      <div id="tertiary-content-wrapper">
        <div class="image-overlay clearfix">
          <div class="container clearfix">
            <?php print render($page['tertiary_content']); ?>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if (
      $page['four_first'] ||
      $page['four_second'] ||
      $page['four_third'] ||
      $page['four_fourth']
      ): ?>
      <div id="footer-panels-wrapper">
        <div class="container clearfix">
          <!-- Four column Gpanel -->
          <div class="at-panel gpanel panel-display four-4x25 clearfix">
            <div class="panel-row row-1 clearfix">
              <?php print render($page['four_first']); ?>
              <?php print render($page['four_second']); ?>
            </div>
            <div class="panel-row row-2 clearfix">
              <?php print render($page['four_third']); ?>
              <?php print render($page['four_fourth']); ?>
            </div>
          </div>
        </div>
      </div>
    <?php endif; ?>

    <?php if ($page['footer']): ?>
      <div id="footer-wrapper">
        <div class="container clearfix">
          <footer<?php print $footer_attributes; ?>>
            <?php print render($page['footer']); ?>
          </footer>
       </div>
    </div>
    <?php endif; ?>

  </div>
</div>
