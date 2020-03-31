<?php
/**
 * Template Name: Wizard Select Template
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
<script>

// Plans
const PLANS = {
  granite: {name: 'Granite', cost: 150},
  obsidian: {name: 'Obsidian', cost: 110},
  basic: {name: 'Basic Security', cost: 0},
  advanced: {name: 'Advanced Security', cost: 110},
}

if ( 'loading' === document.readyState ) {
	// The DOM has not yet been loaded.
	document.addEventListener( 'DOMContentLoaded', init );
} else {
	// The DOM has already been loaded.
	init();
}

function init() {
  selectionInit();
}


function selectionInit() {
  const selectElement = document.querySelector('#options');
  const optionButtons = document.querySelectorAll('.option-card');
  
  optionButtons.forEach(opt => {
    opt.addEventListener('click', () => optionClickHandler(selectElement, opt))
  });
}

function optionClickHandler(input, option) {
  Array.from(document.querySelectorAll('.option-card'))
  .forEach(x => x.classList.remove('selected'));  option.classList.add('selected');
  changeSelection(input, option)
}

function changeSelection(input, option) {
  console.log('change')
  Array.from(input).find(x => x.value == option.id).selected = true;
}

function parseCookie() {
  return document.cookie
  .split(';')
  .reduce((res, c) => {
    const [key, val] = c.trim().split('=').map(decodeURIComponent)
    const allNumbers = str => /^\d+$/.test(str);
    try {
      return Object.assign(res, { [key]: allNumbers(val) ?  val : JSON.parse(val) })
    } catch (e) {
      return Object.assign(res, { [key]: val })
    }
  }, {});
}



// document.cookie.split(';').filter(x => x.indexOf('cf7msm_posted_data') > -1)
// 

</script>

	<main id="primary" class="site-main wizard">  

    
		<?php

		while ( have_posts() ) {
			the_post();

      get_template_part( 'template-parts/content/entry', 'page' );
		}
    ?>
	</main><!-- #primary -->
<?php
get_footer();
