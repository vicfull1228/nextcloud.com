<div class="page-header">
  <h1>Get Started!</h1>
</div>
<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-download"></i>
		</div>
		<h2>1. Get Nextcloud Server</h2>
		<p>Set up a server for yourself<!--, deploy to the cloud--> or find a provider:
		<div class="btn-group">
			<a class="btn btn-default btn-large" href="<?php echo $DOWNLOAD_SERVER_STABLE_ZIP; ?>">Download</a>
			<a class="btn btn-default btn-large" href="/providers">Providers</a>
			<a class="btn btn-default btn-large" href="<?php echo $DOCUMENTATION_ADMIN; ?>">Documentation</a>
		</div>
		<br />
		<a class="label label-blue" role="button" href="#instructions-server" rel="tooltip" title="Install instructions" id="server" data-toggle="popover">More details</a></p>
<!--       <a class="btn btn-default btn-lg" role="button" href="/hardware-TBD">Servers</a> - disabled for now, until we have a page like that... -->
      <!--<a class="btn btn-default btn-lg" role="button" href="/providers" rel="tooltip" title="Third Party Nextcloud Providers">Providers</a>-->
	</div>
	<div class="col-md-4">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-refresh"></i>
		</div>
		<h2>2. Sync your data</h2>
		<p>Connect to your Nextcloud with our clients:</p>
		<a style="opacity: 0.9" target="_blank" href="<?php echo $DOWNLOAD_CLIENT_MOBILE_ANDROID; ?>">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/clients/buttons/googleplay.png">
		</a> 
<!--     <div class="btn-group"> -->
<!--       <a class="btn btn-default btn-lg" role="button" href="#install-clients" rel="tooltip" id="desktop" data-toggle="popover" title="Desktop Clients">Desktop Clients</a> -->
		<br /><a class="btn btn-default btn-lg" role="button" href="#install-clients" rel="tooltip" id="mobile" data-toggle="popover" title="Mobile Clients">More Clients</a>
<!--     </div> -->
	</div>
  <!--<div class="col-md-4">
    <hr class="narrow"></hr>
    <div class="numbadge centre">3</div>
    <h3><i class="icon-globe"></i> Extend your cloud</h3>
    <p>Browse hundreds of free apps and connect services you use to Nextcloud:</p>
     <div class="btn-group">
        <a class="btn btn-default btn-lg" role="button" href="https://apps.nextcloud.com" target="_blank" rel="tooltip" title="The Nextcloud Appstore">Nextcloud Apps</a>
        <a class="btn btn-default btn-lg" role="button" href="https://github.com/nextcloud/core/wiki/Apps" target="_blank" rel="tooltip" title="3rd Party App List on the Nextcloud Wiki">3rd Party Apps</a>
      </div>
  </div>-->
	<div class="col-md-4">
		<div class="numbadge centre">
			<i class="icon-book"></i>
		</div>
		<h2>3. Read the documentation</h2>
		<p>Here you can find our manuals:</p>
		<ul>
			<li><a href="<?php echo $DOCUMENTATION_USER; ?>" target="_blank" rel="tooltip" title="End User Documentation">Users</a></li>
			<li><a href="<?php echo $DOCUMENTATION_ADMIN; ?>" target="_blank" rel="tooltip" title="Nextcloud administrator Documentation">Admins</a></li>
			<li><a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="Nextcloud Developer Documentation">Developers</a></li>
			<li> <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>bugtracker/" target="_blank" rel="tooltip" title="Information for Testers">Testers</a></li>
		</ul>
<!--     <p>If you have other questions about Nextcloud, read our <a href="/faq" target="_blank" rel="tooltip" title="Most Frequently Asked Questions and Answers">Nextcloud FAQ</a>.</p> -->
	</div>
</div>
<br />
<br />

<!--   <h1>Get more out of Nextcloud!</h1> -->
  
<hr class="wide"></hr>
<div class="row">
	<div class="col-md-4 col-md-offset-1">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-comment"></i>
		</div>
		<h2>Need help?</h2>
		<p>Discuss using, installing or maintaining Nextcloud in our support channels.
		<ul>
			<li><a href="http://help.nextcloud.com" target="_blank" rel="tooltip" title="The Nextcloud User Forums">Forum</a></li>
			<li><a href="irc://#nextcloud@freenode.net" target="_blank" rel="tooltip" title="The Nextcloud IRC Channel">IRC Channel</a> (<a href="http://webchat.freenode.net/?channels=nextcloud" target="_blank"  rel="tooltip" title="Web interface to the Nextcloud IRC Channel">Webchat</a>)</li>
		</ul>
		These consist of users helping each other. Consider helping out others, too! <a href="/enterprise">Need enterprise support?</a></p>
		<!--     <p>Find <a href="/support" target="_blank" rel="tooltip" title="An overview of where to find help">more support resources here</a>.</p> -->
	</div>
	<div class="col-md-4 col-md-offset-2">
		<hr class="narrow"></hr>
		<div class="numbadge centre">
			<i class="icon-rocket"></i>
		</div>
		<h2>Get Involved</h2>
		<p>If you want to help out with <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>" target="_blank" rel="tooltip" title="Developer Documentation">developing</a> and <a href="<?php echo $DOCUMENTATION_DEVELOPER; ?>testing/index.html" target="_blank"  rel="tooltip" title="Testing Documentation">testing</a>, grab a daily build. Our <a href="https://github.com/nextcloud" target="_blank">code is here</a>.</p>
		<p>See more <a href="/contribute" target="_blank" rel="tooltip" title="The Nextcloud Contribute Page">ways to get involved</a>!</p>
		<a href="<?php echo $DOWNLOAD_SERVER_DAILY_TAR; ?>" class="btn btn-lg btn-default"><i class="icon-archive"></i>  Daily build</a>
	</div>
</div>
<script>
    $('#mobile').click(function () {
        $("#tab-desktop").removeClass("active");
        $("#tab-mobile").addClass("active");
        $("#li-tab-desktop").removeClass("active");
        $("#li-tab-mobile").addClass("active");    });
    $('#desktop').click(function () {
        $("#tab-mobile").removeClass("active");
        $("#tab-desktop").addClass("active");
        $("#li-tab-mobile").removeClass("active");
        $("#li-tab-desktop").addClass("active");
    });
</script>
