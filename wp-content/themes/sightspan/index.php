<?php get_header();?>

<section id="mainContent" class="fullPage">
  <?php get_sidebar('topbanner');?>
  <div class="container">
    <div class="home__element home__solutions-container">
      <h1 class="stack-nav-content__title home__subtitle">Services</h1>
      <!--
			 <p class="about-us__dxc-content">Our network of global risk management experts work to provide innovative and cost effective solutions that help embed appropriate risk management disciplines into organizations???
            </p> 
			-->
      <div class="row stackable-row">
        <div class="col-sm-3">
          <div class="stack-nav">
            <?php 
			$categories	=	get_categories(array('hide_empty' => 0, 'orderby'=>'id','order'=>'asc', 'child_of' => 2, 'depth' => 0, 'show_count' => 0, 'parent' => '2'));
			$i=0;
			foreach($categories as $category){
            if($i==0){
            	$active	=	"active";
            }else{
            	$active	=	"";
            }
			$i = $i+1;
            if($i==2){
				$link	=	get_site_url()."/aml-ctf/";
			}elseif($i==3){
				$link	=	get_site_url()."/compliance/";
			}elseif($i==4){
				$link	=	get_site_url()."/psanctions/";
			}elseif($i==5){
				$link	=	get_site_url()."/security/";
			}elseif($i==6){
				$link	=	get_site_url()."/ptraining/";
			}elseif($i==7){
				$link	=	get_site_url()."/ptechnology/";
			}elseif($i==8){
				$link	=	get_site_url()."/ssi/";
			}
			?>
            
            <a class="btn0 btn0-link <?php #echo $active; ?>" href="<?php echo $link; ?>">
            <button class="btn btn-stack"><?php echo $category->name;?></button>
            </a>
            <?php } ?> </div>
        </div>
        
        <?php for($l=4;$l<11;$l++){
            if($l==4){
				$link	=	get_site_url()."/aml-ctf/";
			}elseif($l==5){
				$link	=	get_site_url()."/compliance/";
			}elseif($l==6){
				$link	=	get_site_url()."/psanctions/";
			}elseif($l==7){
				$link	=	get_site_url()."/security/";
			}elseif($l==8){
				$link	=	get_site_url()."/ptraining/";
			}elseif($l==9){
				$link	=	get_site_url()."/ptechnology/";
			}elseif($l==10){
				$link	=	get_site_url()."/ssi/";
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
    </div>
    <div class="container">
      <div class="our-mission home__element">
        <h1 class="home__subtitle">About Us</h1>
        <div class="our-mission__content content-swap" data-spy="contentswap">
          <div class="our-mission__content__left content-swap__area active">
            <h2 class="our-mission__content__subtitle strong">Company Profile</h2>
            <div> <a id="swapper" class="arrow-link js-swapper content-swap__show-more">More</a> </div>
            <p class="content-swap__show-if-active"><?php
    $the_query	=	new WP_Query('page_id=92');
	while($the_query->have_posts()) : $the_query->the_post();
		the_excerpt();
	endwhile;
	?><a href="<?php echo get_site_url(); ?>/company-profile/" class="link--btn-next our-mission__content__link strong">Learn more</a> </p>
          </div>
          <div class="our-mission__content__right content-swap__area">
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="logos-component home__element">
        <h1 class="home__subtitle">SightSpan Partner Network</h1>
        <div class="logos-component__logos-container">
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/logo-amazon.png"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/logo-att.png"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/logo-dell.png"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/logo-ibm.png"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/logo-lenovo.png"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/logo-hcl.png"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/logo-hpe.png"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/logo-microfocus.png"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/knightscope_logo.jpg"/> </a> </div>
          <div class="logos-component__img-container"> <a href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> <img class="img-responsive logos-component__image" src="<?php echo get_site_url(null, '/wp-content/themes/sightspan'); ?>/assets/images/smartsense.png"/> </a> </div>
        </div>
        <div class="btn-wrapper clearfix"> <a class="btn btn-primary strong pull-right btn--wider text-uppercase" href="<?php echo get_site_url(); ?>/about-us/partner-networks/"> EXPLORE SIGHTSPAN PARTNER NETWORKS </a> </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();?>
