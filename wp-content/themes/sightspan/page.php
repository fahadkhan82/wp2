<?php get_header(); ?>
<section id="mainContent" class="fullPage">
  <?php if(get_the_id() == 92){
	get_sidebar('topbanner'); ?>
  <div class="container">
    <div class="our-mission home__element">
      <h1 class="home__subtitle">About Us</h1>
      <div class="our-mission__content content-swap" data-spy="contentswap">
        <div class="our-mission__content__left content-swap__area active">
          <h2 class="our-mission__content__subtitle strong">Company Profile</h2>
          <div> <a id="swapper" class="arrow-link js-swapper content-swap__show-more">More</a> </div>
          <p class="content-swap__show-if-active">
            <?php
			$the_query	=	new WP_Query('page_id=92');
			while($the_query->have_posts()) : $the_query->the_post();
				the_excerpt();
			endwhile;
			?>
            <a href="<?php echo get_site_url(); ?>/company-profile/" class="link--btn-next our-mission__content__link strong">Learn more</a> </p>
        </div>
        <div class="our-mission__content__right content-swap__area">
         
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="about-us__element">
      <h1 class="stack-nav-content__title about-us__subtitle">About SightSpan</h1>
      <!--
			 <p class="about-us__dxc-content">Our network of global risk management experts work to provide innovative and cost effective solutions that help embed appropriate risk management disciplines into organizations???
            </p> 
			-->
      <div class="row stackable-row no-margin-bottom no-margin-top">
        <div class="col-md-3 stack-nav">
          <?php 
			$categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 17, 'depth' => 0, 'show_count' => 0, 'parent' => '17'));
			$i=0;
			foreach($categories as $category){
            if($i==0){
            	$active	=	"active";
            }else{
            	$active	=	"";
            }
			$i = $i+1;
            if($i==1){
				$link	=	get_site_url()."/company-profile/";
			}elseif($i==2){
				$link	=	get_site_url()."/brochures/";
			}elseif($i==3){
				$link	=	get_site_url()."/pcareers/";
			}elseif($i==4){
				$link	=	get_site_url()."/pleadership";
			}elseif($i==5){
				$link	=	get_site_url()."/partner-networks/";
			}
            ?>
          <a class="btn0 btn0-link <?php #echo $active; ?>" href="<?php echo $link;?>">
          <button class="btn btn-stack"><?php echo $category->name;?></button>
          </a>
          <?php } ?>
        </div>
        <!-- Industries -->
        
        <?php for($l=18;$l<37;$l++){
			if($l==18){
				$link	=	get_site_url()."/company-profile/";
			}elseif($l==19){
				$link	=	get_site_url()."/brochures/";
			}elseif($l==20){
				$link	=	get_site_url()."/pcareers/";
			}elseif($l==21){
				$link	=	get_site_url()."/pleadership/";
			}elseif($l==22){
				$link	=	get_site_url()."/partner-networks/";
			}
		?>
        <!-- Analytics -->
        
        <div class="col-md-9 stack-nav-content">
          <?php $single_cat	=	get_category($l);?>
          <button class="btn btn-stack stack-nav-inset"> <?php echo $single_cat->name;?> </button>
          <div class="content-container font--base">
            <div class="header-block"> <img class="header-block__hero img2" src="<?php echo z_taxonomy_image_url($single_cat->term_id); ?>"> </div>
            <h1 class="header-block__heading strong"><?php echo $single_cat->category_description;?></h1>
            <a href="<?php echo $link;?>" class="link--btn-next strong stack-nav-content__rounded-link text-uppercase">Learn More</a> </div>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <?php
} elseif(get_the_id() == 141){
	get_sidebar('topbanner');
	custom_breadcrumbs();	
?>
  <div class="wrapper">
    <article class="pageContent" itemprop="mainContentOfPage">
      <div class="contact-us">
        <?php /*?><h1 class="contact-us__header"><?php echo get_the_title();?></h1><?php */?>
        <article class="pageContent" itemprop="mainContentOfPage">
          <div id="tabs"> 
            <!-- Tab Menu -->
            <ul class="tabsMenu">
              <?php
			  $categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 3, 'depth' => 0, 'show_count' => 0, 'parent' => '3'));
			  $i=0;
			  foreach($categories as $category){
			  	$i=	$i+1;
			  ?>
                <li> <a href='#tabs-<?php echo $i;?>'> <span><?php echo $category->name;?></span> </a> </li>
              <?php } ?>
            </ul>
            <!-- End Tab Menu --> 
            
            <!-- Single Markup for both Tabs and Accordion -->
            <ul class="accordion">
              <?php
			  $categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 3, 'depth' => 0, 'show_count' => 0, 'parent' => '3'));
			  $i=0;
			  foreach($categories as $category){
			  	$i=	$i+1;
				  $arg	=	array('category' => $category->cat_ID);
				  $tab_posts	=	 get_posts($arg);
				  foreach($tab_posts as $tpost) : setup_postdata($tpost);
				  ?>
                <li id="tabs-<?php echo $i;?>"> <a class="accordionTrigger"><?php the_title();?></a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> <?php echo $category->name;?> </h3>
                        <p itemprop="description"><?php the_content(); ?></p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <?php endforeach;
			  wp_reset_postdata();
			  ?> 
              <?php } ?>
              <?php /*?><li id="tabs-1"> <a class="accordionTrigger">BANKING</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> BANKING </h3>
                        <p itemprop="description"> SightSpan works with banks around the world, serving both small and larger institutions. We assist banking entities in growing by providing sound <br>
                          minded risk management practices that meet their current needs and challenges. Our team of experts have the agility to meet a financial institutions <br>
                          needs at the problem level of the project, resulting in implemented solutions within budget. </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-2"> <a class="accordionTrigger">PREPAID & PAYMENTS</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> PREPAID & PAYMENTS </h3>
                        <p itemprop="description"> Our Prepaid Card Services bring enhanced experience, expertise, knowledge and skills to the Anti-Money Laundering/Bank Secrecy Act and Risk regime <br>
                          of any firm in the prepaid industry. Our Prepaid Compliance Services offer Anti-Money Laundering and BSA solutions in: <br/>
                          <br/>
                        <h5>Prepaid Transaction Monitoring and Sanctions Systems</h5>
                        <h5>Prepaid Client Due Diligence Systems</h5>
                        <h5>Independent Reviews and Risk Assessments</h5>
                        <h5>Policy Creation and Account Opening Operations</h5>
                        <h5>Online AML Training Programs</h5>
                        <h5>Independent Review of Third Parties and Partners</h5>
                        </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-3"> <a class="accordionTrigger">Money Services Businesses</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> MONEY SERVICES BUSINESSES </h3>
                        <p itemprop="description"> Our MSB Services conduct Anti-Money Laundering/Bank Secrecy Act reviews and provide technical consulting and stress testing services for banks, <br>
                          money service businesses and non-financial organizations, government and law enforcement agencies. Our team has conducted over 500 <br>
                          independent examinations of Anti-Money Laundering and Bank Secrecy Act Compliance programs for a wide range of financial and<br>
                          non-financial businesses. </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-4"> <a class="accordionTrigger">FOREIGN Exchange</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> FOREIGN EXCHANGE </h3>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-5"> <a class="accordionTrigger">BROKERAGE </a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> BROKERAGE </h3>
                        <p itemprop="description"> SightSpan assists brokerage and money management clients on an end to end basis, including client information management and on boarding, <br/>
                          compliance and regulatory risk management and dealing with internal risk issues related to broker surveillance, internal fraud issues, illicit sales <br>
                          practices and other relevant matters. <br>
                          <br>
                          We work with all financial products and manage management matters related to Equities, Fixed Income, Derivatives, and specialize in Commodities <br>
                          and Futures/Options, Energy and Off Exchange Trading. </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-6"> <a class="accordionTrigger">GOVERNMENT</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> GOVERNMENT </h3>
                        <p itemprop="description"> SightSpan’ Government Services primary focuses on assisting public sector organizations worldwide to achieve increased efficiencies and reduce international/domestic risk in the face of complex challenges. Our primary customized service offerings are: <br>
                          <br>
                        <h5>Open Source Intelligence Analysis</h5>
                        <h5>Operations Support</h5>
                        <h5>Security</h5>
                        <h5>Training and Education Support</h5>
                        <h5>Information Technology/Technical Development</h5>
                        <h5>Studies and Analysis: Operations, Personnel and Resource Management</h5>
                        <h5>Translation Services available including English/Arabic and Arabic/English</h5>
                        </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li><?php */?>
            </ul>
            <!-- End Single Markup for both Tabs and Accordion --> 
          </div>
        </article>
      </div>
    </article>
  </div>
  <script>

  $("#tabs").tabs();

  var hoverMethod = function () {
    var uiStateActive = $(".ui-state-active");
    uiStateActive.removeClass("ui-state-active ui-tabs-selected");
    var current = $(this);
    current.parent().addClass("ui-state-active ui-tabs-selected");
    $(".ui-widget-content").addClass("ui-tabs-hide");
    $(current.attr("href")).siblings().css('display', 'none');
    $(current.attr("href")).removeClass("ui-tabs-hide").css('display', 'block');
  };

  var hoverOutMethod = function () { };
  var index = 1;
  var item = $("a[href='#tabs-" + index + "']");
  while (item.length > 0 && index < 20) {
    item.hoverIntent(hoverMethod, hoverOutMethod);
    index++;
    item = $("a[href='#tabs-" + index + "']");
  }
</script>
  <?php
} elseif(get_the_id() == 165){
	get_sidebar('topbanner');
	custom_breadcrumbs();	
?>
  <div class="wrapper">
    <article class="pageContent" itemprop="mainContentOfPage">
      <div class="contact-us">
        <?php /*?><h1 class="contact-us__header"><?php echo get_the_title();?></h1><?php */?>
        <article class="pageContent" itemprop="mainContentOfPage">
          <div id="tabs"> 
            <!-- Tab Menu -->
            <ul class="tabsMenu3">
              <?php
			  $categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 10, 'depth' => 0, 'show_count' => 0, 'parent' => '10'));
			  $i=0;
			  foreach($categories as $category){
			  	$i=	$i+1;
			  ?>
                <li> <a href='#tabs-<?php echo $i;?>'> <span><?php echo $category->name;?></span> </a> </li>
              <?php } ?>
            </ul>
            <!-- End Tab Menu --> 
            
            <!-- Single Markup for both Tabs and Accordion -->
            <ul class="accordion">
              <?php
			  $categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 10, 'depth' => 0, 'show_count' => 0, 'parent' => '10'));
			  $i=0;
			  foreach($categories as $category){
			  	$i=	$i+1;
				  $arg	=	array('category' => $category->cat_ID);
				  $tab_posts	=	 get_posts($arg);
				  foreach($tab_posts as $tpost) : setup_postdata($tpost);
				  ?>
                <li id="tabs-<?php echo $i;?>"> <a class="accordionTrigger"><?php the_title();?></a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <div ><img style="margin-left:30%;margin-top:2%"src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/security_logo.jpg">  </div>
                      <section class=noImage >
                        <h3 itemprop="headline"> <?php echo $category->name;?> </h3>
                        <p itemprop="description"><?php the_content(); ?></p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <?php endforeach;
			  wp_reset_postdata();
			  ?> 
              <?php } ?>
              <?php /*?><li id="tabs-1"> <a class="accordionTrigger">BANKING</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> BANKING </h3>
                        <p itemprop="description"> SightSpan works with banks around the world, serving both small and larger institutions. We assist banking entities in growing by providing sound <br>
                          minded risk management practices that meet their current needs and challenges. Our team of experts have the agility to meet a financial institutions <br>
                          needs at the problem level of the project, resulting in implemented solutions within budget. </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-2"> <a class="accordionTrigger">PREPAID & PAYMENTS</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> PREPAID & PAYMENTS </h3>
                        <p itemprop="description"> Our Prepaid Card Services bring enhanced experience, expertise, knowledge and skills to the Anti-Money Laundering/Bank Secrecy Act and Risk regime <br>
                          of any firm in the prepaid industry. Our Prepaid Compliance Services offer Anti-Money Laundering and BSA solutions in: <br/>
                          <br/>
                        <h5>Prepaid Transaction Monitoring and Sanctions Systems</h5>
                        <h5>Prepaid Client Due Diligence Systems</h5>
                        <h5>Independent Reviews and Risk Assessments</h5>
                        <h5>Policy Creation and Account Opening Operations</h5>
                        <h5>Online AML Training Programs</h5>
                        <h5>Independent Review of Third Parties and Partners</h5>
                        </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-3"> <a class="accordionTrigger">Money Services Businesses</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> MONEY SERVICES BUSINESSES </h3>
                        <p itemprop="description"> Our MSB Services conduct Anti-Money Laundering/Bank Secrecy Act reviews and provide technical consulting and stress testing services for banks, <br>
                          money service businesses and non-financial organizations, government and law enforcement agencies. Our team has conducted over 500 <br>
                          independent examinations of Anti-Money Laundering and Bank Secrecy Act Compliance programs for a wide range of financial and<br>
                          non-financial businesses. </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-4"> <a class="accordionTrigger">FOREIGN Exchange</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> FOREIGN EXCHANGE </h3>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-5"> <a class="accordionTrigger">BROKERAGE </a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> BROKERAGE </h3>
                        <p itemprop="description"> SightSpan assists brokerage and money management clients on an end to end basis, including client information management and on boarding, <br/>
                          compliance and regulatory risk management and dealing with internal risk issues related to broker surveillance, internal fraud issues, illicit sales <br>
                          practices and other relevant matters. <br>
                          <br>
                          We work with all financial products and manage management matters related to Equities, Fixed Income, Derivatives, and specialize in Commodities <br>
                          and Futures/Options, Energy and Off Exchange Trading. </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li>
              <li id="tabs-6"> <a class="accordionTrigger">GOVERNMENT</a>
                <ul>
                  <li>
                    <section class="tab-content-right">
                      <section class=noImage >
                        <h3 itemprop="headline"> GOVERNMENT </h3>
                        <p itemprop="description"> SightSpan’ Government Services primary focuses on assisting public sector organizations worldwide to achieve increased efficiencies and reduce international/domestic risk in the face of complex challenges. Our primary customized service offerings are: <br>
                          <br>
                        <h5>Open Source Intelligence Analysis</h5>
                        <h5>Operations Support</h5>
                        <h5>Security</h5>
                        <h5>Training and Education Support</h5>
                        <h5>Information Technology/Technical Development</h5>
                        <h5>Studies and Analysis: Operations, Personnel and Resource Management</h5>
                        <h5>Translation Services available including English/Arabic and Arabic/English</h5>
                        </p>
                        <a class="round-link" itemprop="url" href="digital_enterprise.html"></a> </section>
                    </section>
                  </li>
                </ul>
              </li><?php */?>
            </ul>
            <!-- End Single Markup for both Tabs and Accordion --> 
          </div>
        </article>
      </div>
    </article>
  </div>
  <script>

  $("#tabs").tabs();

  var hoverMethod = function () {
    var uiStateActive = $(".ui-state-active");
    uiStateActive.removeClass("ui-state-active ui-tabs-selected");
    var current = $(this);
    current.parent().addClass("ui-state-active ui-tabs-selected");
    $(".ui-widget-content").addClass("ui-tabs-hide");
    $(current.attr("href")).siblings().css('display', 'none');
    $(current.attr("href")).removeClass("ui-tabs-hide").css('display', 'block');
  };

  var hoverOutMethod = function () { };
  var index = 1;
  var item = $("a[href='#tabs-" + index + "']");
  while (item.length > 0 && index < 20) {
    item.hoverIntent(hoverMethod, hoverOutMethod);
    index++;
    item = $("a[href='#tabs-" + index + "']");
  }
</script>
<?php } elseif((get_the_id() == 102) or (get_the_id() == 155) or (get_the_id() == 157) or (get_the_id() == 159) or (get_the_id() == 161) or (get_the_id() == 163)){
get_sidebar('topbanner');	
?>
<div class="wrapper">
<article class="pageContent" itemprop="mainContentOfPage">
<div class="wrapper">
  <article class="pageContent" itemprop="mainContentOfPage">
    <div id="tabs"> 
      <!-- Tab Menu -->
      <ul class="tabsMenu2">
        <li> <a href='#tabs-1'> <span><?php echo get_the_title();?></span> </a> </li>
      </ul>
      <!-- End Tab Menu --> 
      <!-- Single Markup for both Tabs and Accordion -->
      <ul class="accordion">
        <li id="tabs-1"> <a class="accordionTrigger">Overview</a>
          <ul>
            <li>
              <section class="tab-content-right">
                <section class=noImage > 
                 <?php
		#TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>
        <!--Because the_content() works only inside a WP Loop -->
        <p class="contact-us__label">
          <?php the_content(); ?>
          <!-- Page Content --> 
        </p>
        <!-- .entry-content-page -->
        
        <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
                </section>
              </section>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </article>
</div>
</article></div>
<script>

  $("#tabs").tabs();

  var hoverMethod = function () {
    var uiStateActive = $(".ui-state-active");
    uiStateActive.removeClass("ui-state-active ui-tabs-selected");
    var current = $(this);
    current.parent().addClass("ui-state-active ui-tabs-selected");
    $(".ui-widget-content").addClass("ui-tabs-hide");
    $(current.attr("href")).siblings().css('display', 'none');
    $(current.attr("href")).removeClass("ui-tabs-hide").css('display', 'block');
  };

  var hoverOutMethod = function () { };
  var index = 1;
  var item = $("a[href='#tabs-" + index + "']");
  while (item.length > 0 && index < 20) {
    item.hoverIntent(hoverMethod, hoverOutMethod);
    index++;
    item = $("a[href='#tabs-" + index + "']");
  }
</script>
<?php } elseif(get_the_id() == 86){?>
  <div class="wrapper">
    <article class="pageContent" itemprop="mainContentOfPage">
      <div class="contact-us">
        <h1 class="big-heading-block big-heading-block--lg-padding strong"><?php echo get_the_title();?></h1>
        <div class="row stackable-row">
          <div class="col-sm-3">
            <div class="stack-nav">
              <?php 
			$categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 2, 'depth' => 0, 'show_count' => 0, 'parent' => '2'));
			$i=0;
			foreach($categories as $category){
            if($i==0){
            	$active	=	"active";
                $i = 1;
            }else{
            	$active	=	"";
            }
            ?>
              <a class="btn0 btn0-link <?php #echo $active; ?>" href="<?php echo get_site_url(); ?>/industries/">
              <button class="btn btn-stack"><?php echo $category->name;?></button>
              </a>
              <?php } ?>
            </div>
          </div>
          <!-- Industries -->
          <div class="col-md-9 stack-nav-content active">
            <button class="btn btn-stack stack-nav-inset"> Industries </button>
            <div class="content-container font--base">
              <div class="list--media-desc list--media-desc--sm-stack clearfix">
                <div class="header-block"> </div>
                <div class="row list--sm-flex-wrap">
                  <?php 
			$categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 2, 'depth' => 0, 'show_count' => 0, 'parent' => '2'));
			foreach($categories as $category){
            ?>
                  <div class="col-sm-4 list--media-desc__col list--media-desc__col--sm-stacked">
                    <div class="list--media-desc__item"> <img class="img-responsive" src="<?php echo z_taxonomy_image_url($category->term_id); ?>" /><a class="link--btn-next strong list--media-desc__link" href="<?php echo get_site_url(); ?>/<?php echo $link;?>/"> <?php echo $category->name;?> </a> </div>
                  </div>
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
		
          <?php for($l=4;$l<11;$l++){
			
           if($l==4){
				$link	=	get_site_url()."/unarmed-armed/";
			}elseif($l==5){
				$link	=	get_site_url()."/industrial-physical-security/";
			}elseif($l==6){
				$link	=	get_site_url()."/autonomous-website/";
			}		
		  
		  ?>
          <!-- Analytics -->
          <div class="col-md-9 stack-nav-content">
            <?php $single_cat	=	get_category($l);?>
            <button class="btn btn-stack stack-nav-inset"> <?php echo $single_cat->name;?> </button>
            <div class="content-container font--base">
              <div class="list--media-desc clearfix">
                <div class="header-block">
                  <div class="header-block__hero" style="background: url(<?php echo z_taxonomy_image_url($single_cat->term_id); ?>) center no-repeat; height: 350px;width: 850px;"> </div>
                  <h2 class="header-block__heading strong"> <?php echo $single_cat->category_description;?> </h2>
                </div>
				
                <a class="link--btn-next header-block__link" href="<?php echo $link;?>"> Learn More </a> </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <?php /*
		#TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>
      <!--Because the_content() works only inside a WP Loop -->
      <p class="contact-us__label">
        <?php the_content(); ?>
        <!-- Page Content --> 
      </p>
      <!-- .entry-content-page -->
      
      <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    */
	?>
      </div>
    </article>
  </div>
  <?php }elseif((get_the_id() == 196) or (get_the_id() == 198) or (get_the_id() == 201) or (get_the_id() == 203) or (get_the_id() == 205) or (get_the_id() == 207) or (get_the_id() == 209) or (get_the_id() == 211) or (theslugfilter() == 'english-brochures') or (theslugfilter() == 'arabic-brochures') or (theslugfilter() == 'portuguese-brochures') or (theslugfilter() == 'spanish-brochures') or (theslugfilter() == 'indonesian-brochures') or (theslugfilter() == 'products-brochures') or (theslugfilter() == 'john') or (theslugfilter() == 'paul') or (theslugfilter() == 'robert') or (theslugfilter() == 'daryl') or (theslugfilter() == 'saskia') or (theslugfilter() == 'andrea')){?>
  <section id="mainContent" class="leftSideBar">
  <div class="wrapper">
    <h1 class='hero-black'><?php echo get_the_title();?></h1>
    <aside class="sideBar">
      <div id="zoneName">About Us</div>
      <nav class="accordianWrapper" id="acdnmenu">
        <ul class="home_accordian">
          <?php 
			$categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 17, 'depth' => 0, 'show_count' => 0, 'parent' => '17'));
			$i=0;
			foreach($categories as $category){
            if($i==0){
            	$active	=	"active";
            }else{
            	$active	=	"";
            }
			$i = $i+1;
            if($i==1){
				$link	=	get_site_url()."/company-profile/";
			}elseif($i==2){
				$link	=	get_site_url()."/brochures/";
			}elseif($i==3){
				$link	=	get_site_url()."/pcareers/";
			}elseif($i==4){
				$link	=	get_site_url()."/pleadership";
			}elseif($i==5){
				$link	=	get_site_url()."/partner-networks/";
			}
            ?>
          <li><a href="<?php echo $link;?>" class="accordianHeading" target="_self"><?php echo $category->name;?><span></span></a></li>
          <?php } ?>
        </ul>
      </nav>
    </aside>
    <section class="solutionspageSection pageContent" itemprop="mainContentOfPage">
    <script type="text/javascript" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/js/user/sharing_links_script-min-824a00659f2aeb0b6c68cc1cec7c37a0.js"></script>
    <link href="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/css/user/sharing_styles-min-e178fb2b69981570a1c7cdd81e2584cf.css" media="all" rel="stylesheet" type="text/css" />
    <div class="share_buttons">
      <div class="Facebook_Share"> <a class="custom_share_f" href="https://www.facebook.com/SightSpan/" target="_blank"></a> </div>
      <div class="Twitter_Share"> <a class="custom_share_t" href=" https://twitter.com/sightspan" target="_blank"></a> </div>
      <div class="LinkedIn_Share"> <a class="custom_share_l" href="https://www.linkedin.com/company/sightspan-inc" target="_blank"></a> </div>
	  </div>
    <br>
    <article>
      <h1><?php echo get_the_title();?></h1>
        <?php
		#TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>
        <!--Because the_content() works only inside a WP Loop -->
        <p class="contact-us__label">
          <?php the_content(); ?>
          <!-- Page Content --> 
        </p>
        <!-- .entry-content-page -->
        <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
    </article>
    <br />
    <!-- static listing -->     
    <br />
  </div>
</section>
  <?php } else {?>
  <div class="wrapper">
    <article class="pageContent" itemprop="mainContentOfPage">
      <div class="contact-us">
        <h1 class="big-heading-block big-heading-block--lg-padding strong"><?php echo get_the_title();?></h1>
        <?php
		#TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?>
        <!--Because the_content() works only inside a WP Loop -->
        <p class="contact-us__label">
          <?php the_content(); ?>
          <!-- Page Content --> 
        </p>
        <!-- .entry-content-page -->
        
        <?php
    endwhile; //resetting the page loop
    wp_reset_query(); //resetting the page query
    ?>
      </div>
    </article>
  </div>
  <?php } ?>
</section>
<?php
function theslugfilter(){
	$slug	=	basename(get_permalink());
	return $slug;
	$link	=	str_replace(home_url('/'),'',$link);
	if(($len = strlen($link)) > 0 && $link[$len-1] == '/'){
		$link	=	substr($link,0,-1);
	}
	$ret	=	explode('/', $link);
	print_r($ret);
	return $ret;
}
?>
<?php get_footer(); ?>
