<?php
/**
 * Trigger Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Trigger Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface TriggerInterface
{
    /**
     * Trigger Event Method 
     *
     * @param   string $event_name
     *
     * @return  array
     * @since   1.0.0
     */
    public function triggerEvent($event_name);
}
