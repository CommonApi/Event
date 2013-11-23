<?php
/**
 * Delete Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Delete Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface DeleteInterface
{
    /**
     * Before delete processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeDelete();

    /**
     * After delete processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterDelete();
}
