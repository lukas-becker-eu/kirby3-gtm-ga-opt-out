<?php

Kirby::plugin('candyblue/gtm-ga-opt-out', [
  'tags' => [
    'ga_opt_out' => [
      'attr' => [
        'message'
      ],
      'html' => function($tag) {
        $text = $tag->attr('ga_opt_out');
        $message = $tag->attr('message');

        $a = '<a id="ga-opt-out" href="#" data-message="' . $message . '">';
        $a .= $text;
        $a .= '</a>';

        return $a;
      }
    ]
  ]
]);
