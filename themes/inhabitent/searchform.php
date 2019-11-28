<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset> 
		<button class="search-submit" id="searchSubmit">
			<i class="fa fa-search"></i>
			<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
		</button>
		<label>
			<input type="search" class="searchfield" id="searchField" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
	</fieldset>
</form>



