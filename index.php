<?php

Kirby::plugin('candyblue/gtm-ga-opt-out', [
  'tags' => [
    'optout' => [
      'attr' => [
        'message'
      ],
      'html' => function($tag) {
        $text = $tag->attr('optout');
        $message = $tag->attr('message');

        $a = '<a id="ga-opt-out" href="#" data-message="' . $message . '">';
        $a .= $text;
        $a .= '</a>';

        return $a;
      }
    ]
  ]
]);
