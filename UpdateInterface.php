<?php
/**
 * Update Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Update Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface UpdateInterface
{
    /**
     * Before update processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeUpdate();

    /**
     * After update processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterUpdate();
}
