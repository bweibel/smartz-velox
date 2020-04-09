<?php
/**
 * Template part for displaying prices
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<div class="prices"> 
  <h4>Management Option: <span id="management"></span></h4>
  <h4>Security Option: <span id="security"></span></h4>
  <h4>Users: <span id="users"></span></h4>

<table>
    <tbody>
        <tr>
            <td>Management (per user):</td>
            <td><span id="management-cost"></span></td>
        </tr>
        <tr>
            <td>Security (per user):</td>
            <td><span id="security-cost"></span></td>
        </tr>
        <tr>
            <td><strong>Total:</strong></td>
            <td><strong id="total"></strong></td>
        </tr>
    </tbody>
</table>
</div>