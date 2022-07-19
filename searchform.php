<form class="search-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<div class="search-form__item">
		<input class="search-form__input" type="search" placeholder="Search" value="<?php echo get_search_query() ?>" name="s" id="s" />
		<button class="search-form__submit"><span>search</span></button>
		<input type="hidden" value="post" name="post_type" />
	</div>
</form>