<?php
/**
 * Event Dispatcher Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Event Dispatcher Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface EventDispatcherInterface
{
    /**
     * Event Dispatcher triggers Listeners in order of priority
     *
     * @param   EventInterface $event
     * @param   array          $listeners
     *
     * @return  array
     * @since   1.0
     */
    public function triggerListeners(EventInterface $event, array $listeners = array());
}
