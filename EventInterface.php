<?php
/**
 * Event Interface
 *
 * @package    Event
 * @copyright  2013 Common Api. All rights reserved.
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 */
namespace CommonApi\Event;

/**
 * Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface EventInterface
{
    /**
     * Get a property
     *
     * @param    $key
     *
     * @return   mixed|array|null|object|string
     * @since    1.0
     */
    public function get($key);

    /**
     * Set a property value
     *
     * @param    string $key
     * @param    string $value
     *
     * @return   $this
     * @since    1.0
     */
    public function set($key, $value);
}
