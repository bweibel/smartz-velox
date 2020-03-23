<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

$theme = get_template_directory_uri();
?>
<section class="call-to-action fancy-background sloped">
  <div class="wrap wrap-large">
    <section class="pitch">
      <h1 class="title">Work better.<br>Play more.</h1>
      <h3 class="subtitle">I.T. support you can trust</h3>
      <p>We help you work better by providing integrated systems management and strategic forecasting to keep your time at work focused on, well, work! When you leave for the day, you can leave knowing your environment and data are secure and ready for your return. Who knew work-life-balance could be so sustainable?</p>
      <p>You can play more by becoming our strategic partner and letting us do the heavy lifting. Need a well-designed network? Smart applications? Cloud migration assistance? We’ll get those designs in place and provide a road-map of how to achieve those goals so you can enjoy life beyond planning.</p>
      <p>Not sure where to go?</p>
    </section>
    <figure>
      <img src=<?php printf($theme . "/assets/images/Velox-Caricatures-Jordan@2x.png")?> alt="Caricature" role="presentation">
    </figure>
    <a href="#" class="button button--big">Let's Figure it Out Together</a>
  </div>
</section>
