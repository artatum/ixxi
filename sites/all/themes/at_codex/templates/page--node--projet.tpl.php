<?php // AT Codex ?>	  
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

    