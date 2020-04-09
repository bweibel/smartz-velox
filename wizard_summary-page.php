<?php
/**
 * Template Name: Wizard Summary Template
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
  //grab relevant cookie data
  summaryInit();
  // selectionInit();
}

function summaryInit() {
  const usersObj = document.getElementById('users');
  const managementObj = document.getElementById('management');
  const managementCostObj = document.getElementById('management-cost');
  const securityObj = document.getElementById('security');
  const securityCostObj = document.getElementById('security-cost');
  const totalObj = document.getElementById('total');
  
  let data = parseCookie().cf7msm_posted_data;
  let employeeCount = data.employees;
  let management = data.management;
  let security = data.security;

  usersObj.innerText = employeeCount;
  managementObj.innerText = PLANS[management].name;
  securityObj.innerText = PLANS[security].name;
  managementCostObj.innerText = '$' + PLANS[management].cost;
  securityCostObj.innerText = '$' + PLANS[security].cost;
  totalObj.innerText = '$' + employeeCount*(PLANS[security].cost+PLANS[management].cost);
}

function selectionInit() {
  const selectElement = document.querySelector('#options');
  const optionButtons = document.querySelectorAll('.option-card');
  optionButtons.forEach(opt => {
    opt.addEventListener('click', () => changeSelection(selectElement, opt.id))
  });


  selectElement.addEventListener('change', (event) => {
    console.log(selectElement.value);
  })
}

function changeSelection(input, value) {
  console.log('change')
  Array.from(document.querySelector('#options'))
  .find(x => x.value == value).selected = true;
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

	<main id="primary" class="site-main">
		<?php
    get_template_part( 'template-parts/wizard/wizard_header');
    
		while ( have_posts() ) {
			the_post();
      echo '<section class="wizard wrap summary">';
      get_template_part( 'template-parts/wizard/form_header');
      get_template_part( 'template-parts/content/entry_content', get_post_type() );
      get_template_part( 'template-parts/wizard/summary_prices');
      
      echo do_shortcode( get_field('form_shortcode'));
      echo '</section>';
		}
		?>
	</main><!-- #primary -->
<?php
get_footer();
