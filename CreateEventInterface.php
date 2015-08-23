<?php
/**
 * Create Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Create Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface CreateEventInterface
{
    /**
     * Pre-create processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeCreate();

    /**
     * Post-create processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterCreate();
}
