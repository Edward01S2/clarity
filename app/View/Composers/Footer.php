<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.footer',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
        return [
          'logo' => get_field('Logo', 'options'),
          'navigation' => $this->navigation(),
          'social' => get_field('Social', 'options'),
          'footer' => get_field('Footer Items', 'options'),
        ];
    }

    public function navigation()
    {
        if (Navi::build()->isEmpty()) {
            return;
        }
        
        return Navi::build()->toArray();
    }

}
