<?php
/**
* The Date Class
* @package Mars
*/

namespace Mars\Time;

/**
 * The Date Class
 * Date related functions
 */
class Date extends Base
{
    /**
     * {@inheritDoc}
     */
    protected string $format = 'Y-m-d';

    /**
     * {@inheritDoc}
     */
    protected string $default_value = '0000-00-00';
}
