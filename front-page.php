
<?php 
get_header();
?>


<section class="banner-container">
	
	<input type="radio" id="i1" name="images" checked />
	<input type="radio" id="i2" name="images" />
	<input type="radio" id="i3" name="images" />
	<input type="radio" id="i4" name="images" />
	<input type="radio" id="i5" name="images" />	
	
	<div class="slide_img" id="one">			
		<h3 class="slide-description hide-for-small-only">
			landscaping,<br/> civil engineering<br/> and groundworks contractors
		</h3>
		<img src="<?php echo get_template_directory_uri(); ?> /assets/images/homepage-banner.png">
		
		<label class="prev show-for-small-only" for="i5"><span>&#x2039;</span></label>
		<label class="next show-for-small-only" for="i2"><span>&#x203a;</span></label>	
		
	</div>
	
	<div class="slide_img" id="two">
		<h3 class="slide-description hide-for-small-only">
			landscaping,<br/> civil engineering<br/> and groundworks contractors
		</h3>
		<img src="<?php echo get_template_directory_uri(); ?> /assets/images/homepage-banner.png" >
		
		<label class="prev show-for-small-only" for="i1"><span>&#x2039;</span></label>
		<label class="next show-for-small-only" for="i3"><span>&#x203a;</span></label>
		
	</div>
	
	<div class="slide_img" id="three">
			<h3 class="slide-description hide-for-small-only">
				landscaping,<br/> civil engineering<br/> and groundworks contractors
			</h3>
			<img src="<?php echo get_template_directory_uri(); ?> /assets/images/homepage-banner.png">	
			
			<label class="prev show-for-small-only" for="i2"><span>&#x2039;</span></label>
			<label class="next show-for-small-only" for="i4"><span>&#x203a;</span></label>
		</div>
		
		<div class="slide_img" id="four">
			<h3 class="slide-description hide-for-small-only">
				landscaping,<br/> civil engineering<br/> and groundworks contractors
			</h3>
			<img src="<?php echo get_template_directory_uri(); ?> /assets/images/homepage-banner.png">	
			
			<label class="prev show-for-small-only" for="i3"><span>&#x2039;</span></label>
			<label class="next show-for-small-only" for="i5"><span>&#x203a;</span></label>
		</div>
		
		<div class="slide_img" id="five">
			<h3 class="slide-description hide-for-small-only">
				landscaping,<br/> civil engineering<br/> and groundworks contractors
			</h3>
			<img src="<?php echo get_template_directory_uri(); ?> /assets/images/homepage-banner.png">	
			
			<label class="prev show-for-small-only " for="i4"><span>&#x2039;</span></label>
			<label class="next show-for-small-only" for="i1"><span>&#x203a;</span></label>
			
		</div>
		
		<div id="nav_slide">
			<label for="i1" class="dots" id="dot1"></label>
			<label for="i2" class="dots" id="dot2"></label>
			<label for="i3" class="dots" id="dot3"></label>
			<label for="i4" class="dots" id="dot4"></label>
			<label for="i5" class="dots" id="dot5"></label>
		</div>
		
	</div>
</section>
<!-- map section -->
<section class="map text-center sub-container">
	<img src="<?php echo get_template_directory_uri(); ?> /assets/images/map.png" alt="Map location">
</section>
	<!-- card section -->
	<section class="grid-container card-container ">
  <div class="grid-x grid-margin-x small-up-2 medium-up-4 large-up-4">
		<div class="cell">
			<div class="card card-1">
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/Layer 15.png" alt="lsg card 1">
				<div class="card-section ">
  				<a href="#" class="card-action">drainage</a> <img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/arrow-icon.png" alt="arrow icon">
        </div>
      </div>
		</div>
		<div class="cell">
			<div class="card card-2">
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/Layer 14.png" alt="lsg card 2">
				<div class="card-section">
					<a href="#" class="card-action">resurfacing</a><img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/arrow-icon.png" alt="arrow icon">
				</div>
			</div>
		</div>
		<div class="cell">
			<div class="card card-3">
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/Layer 16.png" alt="lsg card 3">
				<div class="card-section">
				  <a href="#" class="card-action">vehicle hire</a><img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/arrow-icon.png" alt="arrow icon">
        </div>
			</div>
		</div>
		<div class="cell">
			<div class="card card-4">
				<img src="<?php echo get_template_directory_uri(); ?> /assets/images/Layer 17.png" alt="lsg card 4">
				<div class="card-section">
				  <a href="#" class="card-action">mapping</a><img class="arrow-icon" src="<?php echo get_template_directory_uri(); ?> /assets/images/arrow-icon.png" alt="arrow icon">
        </div>
			</div>
		</div>
</div>
  </section>
	<?php 
    get_footer();
		?>
 <script>
      $(document).foundation();
    </script>