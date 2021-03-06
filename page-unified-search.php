<head>
<link href="<?php echo get_template_directory_uri(); ?>/assets/css/pages/unified-search.css?v=2" rel="stylesheet">
<meta itemprop="image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/search_moodle_course_module.png">
<meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/search_moodle_course_module.png">
<meta name="twitter:image:src" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/search_moodle_course_module.png">
<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/img/features/search_moodle_course_module.png">
<meta name=”Description” content="Integrated email communication in Nextcloud.">
</head>
<div class="background unified-search-background">
	<div class="container">
		<div class="row">
			<div class="col-md-6 topheader">
				<h1><?php echo $l->t('Unified search');?></h1>
				<h2><?php echo $l->t('Find what you are looking for');?></p>
			</div>
		</div>
	</div>
</div>
<section class="section--intro">
<div class="container">
	<div class="row">
                <h2 class="text-center"><?php echo $l->t('Find everything in one place');?></h2>
        <div class="col-md-10 col-md-offset-1 video">
			<div style="padding:75% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/555766609?badge=0&amp;autopause=0&amp;dnt=1&amp;player_id=0&amp;app_id=58479" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen style="position:absolute;top:0;left:0;width:100%;height:100%;" title="Universal search video"></iframe></div>
		</div>
    </div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
                <p class="section--paragraph"><?php echo $l->t('On the top-right of your Nextcloud window, a search glass shows search results from all over Nextcloud. Additional search providers can be installed and over a dozen different search providers are available to show you Github issues, Moodle courses, Jira tickets and more');?></p>
		</div>
	</div>
</div>
</section>

<section class="section--features">
	<div class="container">
        <div class="row ">
            <div class="col-md-6 image--feature new-img">
                    <a href="<?php bloginfo('template_directory'); ?>/assets/img/features/search_moodle_course_module.png"><img class="img-responsive featureimg" src="<?php echo get_template_directory_uri(); ?>/assets/img/features/search_moodle_course_module.png" alt="Searching Moodle courses and modules" /></a>
            </div>
            <div class="col-md-6 featureblock">
                <h3 class="section--paragraph__tittle"><?php echo $l->t('Integrated and third party options');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Core Nextcloud apps like Files, Calendar, Contacts, Talk, Mail and Deck provide results in unified search. A wide range of integration apps provide results from third parties like source code management platforms Github and Gitlab, ticketing systems like Jira and Zammad, e-learning platforms like Moodle, social media and forum platforms like Twitter, Redditm Discourse and many more. Developers can build their own additions easily and many apps are available in our app store.');?></p>
                <a href="https://apps.nextcloud.com/apps/fulltextsearch" class="button button--blue button--arrow button--large"><?php echo $l->t('Integrations in app store');?></a>
            </div>
        </div>
	</div>
</section>

<section class="section--fulltextsearch">
	<div class="container">
        <div class="row">
            <div class="col-md-6 image--floated image--feature">
                <a><img class="img-responsive featureimg" src="<?php bloginfo('template_directory'); ?>/assets/img/features/fulltextsearch.png"/></a>
            </div>
            <div class="col-md-6 feature--block">
                <h3 class="section--paragraph__title"><?php echo $l->t('Powerful search');?></h3>
                <p class="section--paragraph"><?php echo $l->t('Nextcloud includes a powerful full-text search engine capable of using ElasticSearch as back-end. Its flexible plugin-based interface enables search capabilities beyond files and accommodates other back-end solutions like Apache Solr.');?></p>
                <a href="https://apps.nextcloud.com/apps/fulltextsearch" class="button button--blue button--arrow button--large"><?php echo $l->t('Full-text search');?></a>
            </div>
        </div>
	</div>
</section>
