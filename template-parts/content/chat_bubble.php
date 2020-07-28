<?php
/**
 * Template part for displaying the call to action
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;
?>

<script>

if ( 'loading' === document.readyState ) {
	// The DOM has not yet been loaded.
	document.addEventListener( 'DOMContentLoaded', init );
} else {
	// The DOM has already been loaded.
	init();
}


function init() {
  const toggleButton = document.querySelector('.close-button');
  const chatBubble = document.querySelector('.chat-cta'); 

  chatBubble.hidden = getHiddenValue();
  if(!chatBubble.hidden) chatBubble.classList.remove('hidden');

  toggleButton.addEventListener('click', (e) => {
    toggleChat(chatBubble);
  });

}

function getHiddenValue(){
  if(sessionStorage.getItem("chatHidden")){
    return JSON.parse(sessionStorage.getItem("chatHidden"));
  } else {
    sessionStorage.setItem("chatHidden", false);
    return false;
  }
}

function toggleChat(chatBubble) {
  chatBubble.hidden = !chatBubble.hidden;
  sessionStorage.setItem("chatHidden", chatBubble.hidden);
  chatBubble.classList.toggle('hidden');
}
  

</script>

<div class="chat-cta hidden" name="chat-bubble" >
  <button class="close-button" onClick="">
    x
  </button>
  <div class="bubble">
    <p>Not sure what I.T. services you need? We'll walk you through it.</p>
    <a href="/getting-started/" class="button">Get Started</a>
  </div>
  <div class="face"></div>
  
</div>
