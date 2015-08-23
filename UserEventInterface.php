<?php
/**
 * User Event Interface
 *
 * @package    Event
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 */
namespace CommonApi\Event;

/**
 * User Event Interface
 *
 * @author     Amy Stephen
 * @license    http://www.opensource.org/licenses/mit-license.html MIT License
 * @copyright  2014 Amy Stephen. All rights reserved.
 * @since      1.0
 */
interface UserEventInterface
{
    /**
     * Before Authenticate processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeAuthenticate();

    /**
     * After Authenticate processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterAuthenticate();

    /**
     * Before Logout processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeLogout();

    /**
     * After Logout event
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterLogout();

    /**
     * Before Authorisation processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onBeforeAuthorisation();

    /**
     * After Authorisation processing
     *
     * @return  $this
     * @since   1.0.0
     */
    public function onAfterAuthorisation();
}
