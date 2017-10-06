<?php
/**
 * @file
 * Custom system helpers
 *
 * All DecimaERP code is copyright by the original authors and released under the GNU Aferro General Public License version 3 (AGPLv3) or later.
 * See COPYRIGHT and LICENSE.
 */

 Form::macro('social', function($text = '', $url = null, $twitterClass = 'social-post', $facebookClass = 'social-post', $googleClass = 'social-post google-post')
 {
  if(empty($url))
  {
    $url = URL::current();
  }

  return '<a href="https://twitter.com/share" class="twitter-share-button ' . $twitterClass . '" data-url="' . $url . '" data-text="' . $text . '" data-via="mgall3gos">Tweet</a>
           <div class="fb-like ' . $facebookClass . '" style="margin-right: 10px;" data-href="' . $url . '" data-width="120" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>
          <div class="' . $googleClass .'"><div class="g-plus" data-width="120" data-action="share" data-href="' . $url . '"></div></div>
          ';
 });
