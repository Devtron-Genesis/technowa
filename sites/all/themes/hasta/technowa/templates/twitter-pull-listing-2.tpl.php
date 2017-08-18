<?php

/**
 * @file
 * Theme template for a list of tweets.
 *
 * Available variables in the theme include:
 *
 * 1) An array of $tweets, where each tweet object has:
 *   $tweet->id
 *   $tweet->username
 *   $tweet->userphoto
 *   $tweet->text
 *   $tweet->timestamp
 *   $tweet->time_ago
 *
 * 2) $twitkey string containing initial keyword.
 *
 * 3) $title
 *
 */
?>
<?php if ($lazy_load): ?>
  <?php print $lazy_load; ?>
<?php else: ?>
  <div class="tweets-pulled-listing">
    <?php if (!empty($title)): ?>
      <h2><?php print $title; ?></h2>
    <?php endif; ?>
    <?php if (is_array($tweets)): ?>
      <?php $tweet_count = count($tweets); ?>
      <ul class="tweets-pulled-listing">
      <?php foreach ($tweets as $tweet_key => $tweet): ?>
        <li>
          <div class="tweet-text"><?php print twitter_pull_add_links($tweet->text); ?></div>
          <div class="tweet-footer">
            <div class="tweet-actions">
              <?php print l('<i class="fa fa-reply"></i>', "//twitter.com/intent/tweet?in_reply_to=$tweet->id", array('html' => TRUE,'attributes' => array('rel'=>'nofollow','target'=>'_blank','class' => 'twitter-reply'))); ?>
              <?php print l('<i class="fa fa-retweet"></i>', "//twitter.com/intent/retweet?tweet_id=$tweet->id", array('html' => TRUE,'attributes' => array('rel'=>'nofollow','target'=>'_blank','class' => 'twitter-retweet'))); ?>
              <?php print l('<i class="fa fa-heart"></i>', "//twitter.com/intent/favorite?tweet_id=$tweet->id", array('html' => TRUE,'attributes' => array('rel'=>'nofollow','target'=>'_blank','class' => 'twitter-favorite'))); ?>
            </div>
          </div>
          <?php if ($tweet_key < $tweet_count - 1): ?>
            <div class="tweet-divider"></div>
          <?php endif; ?>
        </li>
      <?php endforeach; ?>
      </ul>
    <?php endif; ?>
  </div>
<?php endif; ?>
