<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class App extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        '*',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'siteName' => $this->siteName(),
            'resourcesNavigation' => $this->resourcesNavigation(),
            'page_ids_array' => $this->page_ids_array(),
            'page_ids_schools' => $this->page_ids_schools(),
            'mimeo_current_lang_id' => $this->mimeo_current_lang_id(),
        ];
    }

    /**
     * Returns current blog id.
     *
     * @return string
     */
        public function mimeo_current_lang_id()
        {
            return get_current_blog_id();
        }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function siteName()
    {
        return get_bloginfo('name', 'display');
    }

    public function page_ids_array()
    {
         $page_ids = array(370, 249885, 245400, 245487, 245042, 245064, 245398, 245063, 195310, 196977, 195074, 226114, 207036, 200013, 245990, 245402, 226438);

         return $page_ids;
    }

    public function page_ids_schools()
    {
         $page_ids = array(157, 705, 245049);

         return $page_ids;
    }

    public function resourcesNavigation()
    {
        $args = array(
            'theme_location' => 'resource_navigation',
            'container_class' => 'mimeo-resource-menu',
            'menu_class' => 'list-unstyled',
        );
        return $args;
    }

}
