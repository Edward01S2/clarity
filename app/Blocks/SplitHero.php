<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SplitHero extends Block
{
    /**
     * The display name of the block.
     *
     * @var string
     */
    public $name = 'SplitHero';

    /**
     * The description of the block.
     *
     * @var string
     */
    public $description = 'Lorem ipsum...';

    /**
     * The category this block belongs to.
     *
     * @var string
     */
    public $category = 'custom';

    /**
     * The icon of this block.
     *
     * @var string|array
     */
    public $icon = 'screenoptions';

    /**
     * An array of block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * An array of post types the block will be available to.
     *
     * @var array
     */
    public $post_types = ['post', 'page'];

    /**
     * The default display mode of the block that is shown to the user.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The block alignment class.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * Features supported by the block.
     *
     * @var array
     */
    public $supports = [];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'title' => get_field('title'),
            'content' => get_field('content'),
            'link' => get_field('link'),
            'poster' => get_field('poster'),
            'video' => get_field('video url'),
            'app' => get_field('App Download'),
            'download' => get_field('App', 'options'),
        ];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $splitHero = new FieldsBuilder('split_hero');

        $splitHero
        ->addTab('left')
            ->addText('title')
            ->addTextarea('content', [
                'rows' => 2,
            ])
            ->addLink('link')
            ->addTrueFalse('App Download')
        ->addTab('right')
            ->addImage('poster')
            ->addUrl('video url');

        return $splitHero->build();
    }

}
