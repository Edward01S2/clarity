<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Contact extends Block
{
    /**
     * The display name of the block.
     *
     * @var string
     */
    public $name = 'Contact';

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
            'form' => get_field('form'),
            'title' => get_field('title'),
            'content' => get_field('content'),
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
        if(class_exists('gfapi')) {
            $forms = \GFAPI::get_forms();
            $choices= [];
            foreach($forms as $form) {
                $choices[] = [
                    $form['id'] => $form['title']
                ];
            }
        }

        $contact = new FieldsBuilder('contact');

        $contact
            ->addText('title')
            ->addTextarea('content', [
                'rows' => '2',
            ])
            ->addSelect('form', [
                'label' => 'Select Form',
                'choices' => $choices,
            ]);

        return $contact->build();
    }

}
