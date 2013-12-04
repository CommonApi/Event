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
 * @since      0.1
 */
interface EventDispatcherInterface
{
    /**
     * Event Dispatcher triggers Listeners
     *
     * @param   EventInterface $event
     * @param   array          $listeners - array of callable anonymous functions
     *
     * @return  array
     * @since   0.1
     */
    public function triggerListeners(EventInterface $event, array $listeners = array());
}
