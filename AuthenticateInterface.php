<?php
/**
 * Authenticate Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace Api\Event;

/**
 * Authenticate Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      1.0
 */
interface AuthenticateInterface
{
    /**
     * Before logging in processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeLogin();

    /**
     * After Logging in event
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterLogin();

    /**
     * Before logging out processing
     *
     * @return  $this
     * @since   1.0
     */
    public function onBeforeLogout();

    /**
     * After Logging out event
     *
     * @return  $this
     * @since   1.0
     */
    public function onAfterLogout();
}