<header id="banner" class="navbar navbar-fixed-top" role="banner">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
        <!--search form here -->
	    <form role="search" method="get" id="searchform" class="form-search" action="http://www.whiskeyandboots.dev/">
		    <label class="hide" for="s">Search for:</label>
		            <div class="input-prepend">
			<span class="add-on">            	
		    <i class="icon-search"></i>
			</span>
		    <input type="text" value="" name="s" id="s" class="search-query" placeholder="Search Whiskey and Boots">
		            </div>
		    <!--<input type="submit" id="searchsubmit" value="Search" class="btn">-->
		</form>
      </nav>
    </div>
  </div>
</header>