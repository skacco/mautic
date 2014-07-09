<?php
/**
 * @package     Mautic
 * @copyright   2014 Mautic, NP. All rights reserved.
 * @author      Mautic
 * @link        http://mautic.com
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace Mautic\PageBundle;

/**
 * Class PageEvents
 * Events available for PageBundle
 *
 * @package Mautic\PageBundle
 */
final class PageEvents
{

    /**
     * The mautic.page_on_build event is thrown before displaying the page builder form to allow adding of tokens
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\PageContent instance.
     *
     * @var string
     */
    const PAGE_ON_BUILD   = 'mautic.page_on_build';

    /*
     * The mautic.page_on_display event is thrown before displaying the page content
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\PageEvent instance.
     *
     * @var string
     */
    const PAGE_ON_DISPLAY   = 'mautic.page_on_display';

    /**
     * The mautic.page_pre_save event is thrown right before a page is persisted.
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\PageEvent instance.
     *
     * @var string
     */
    const PAGE_PRE_SAVE   = 'mautic.page_pre_save';

    /**
     * The mautic.page_post_save event is thrown right after a page is persisted.
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\PageEvent instance.
     *
     * @var string
     */
    const PAGE_POST_SAVE   = 'mautic.page_post_save';

    /**
     * The mautic.page_pre_delete event is thrown prior to when a page is deleted.
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\PageEvent instance.
     *
     * @var string
     */
    const PAGE_PRE_DELETE   = 'mautic.page_pre_delete';


    /**
     * The mautic.page_post_delete event is thrown after a page is deleted.
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\PageEvent instance.
     *
     * @var string
     */
    const PAGE_POST_DELETE   = 'mautic.page_post_delete';

    /**
     * The mautic.category_pre_save event is thrown right before a category is persisted.
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\CategoryEvent instance.
     *
     * @var string
     */
    const CATEGORY_PRE_SAVE   = 'mautic.category_pre_save';

    /**
     * The mautic.category_post_save event is thrown right after a category is persisted.
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\CategoryEvent instance.
     *
     * @var string
     */
    const CATEGORY_POST_SAVE   = 'mautic.category_post_save';

    /**
     * The mautic.category_pre_delete event is thrown prior to when a category is deleted.
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\CategoryEvent instance.
     *
     * @var string
     */
    const CATEGORY_PRE_DELETE   = 'mautic.category_pre_delete';


    /**
     * The mautic.category_post_delete event is thrown after a category is deleted.
     *
     * The event listener receives a
     * Mautic\PageBundle\Event\CategoryEvent instance.
     *
     * @var string
     */
    const CATEGORY_POST_DELETE   = 'mautic.category_post_delete';
}