<?php
/**
 * Authenticate Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * Authenticate Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2013 Common Api. All rights reserved.
 * @since      0.1
 */
interface AuthenticateInterface
{
    /**
     * Before logging in processing
     *
     * @return  $this
     * @since   0.1
     */
    public function onBeforeLogin();

    /**
     * After Logging in event
     *
     * @return  $this
     * @since   0.1
     */
    public function onAfterLogin();

    /**
     * Before logging out processing
     *
     * @return  $this
     * @since   0.1
     */
    public function onBeforeLogout();

    /**
     * After Logging out event
     *
     * @return  $this
     * @since   0.1
     */
    public function onAfterLogout();
}
