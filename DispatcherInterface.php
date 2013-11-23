<?php
/**
 * Dispatcher Interface
 *
 * @package    Event
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace Api\Event;

/**
 * Dispatcher Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface DispatcherInterface
{
    /**
     * Listener registers for an Event with the Dispatcher
     *
     * @param   string   $event_name
     * @param   callable $callback
     * @param   int      $priority 0 (lowest) to 100 (highest)
     *
     * @return  mixed
     * @since   1.0
     */
    public function registerForEvent($event_name, callable $callback, $priority = 50);

    /**
     * Requester Schedules Event with Dispatcher
     *
     * @param   string         $event_name
     * @param   EventInterface $event
     *
     * @return  $this
     * @since   1.0
     */
    public function triggerEvent($event_name, EventInterface $event);
}
