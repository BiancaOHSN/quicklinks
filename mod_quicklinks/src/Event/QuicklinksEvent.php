<?php
/*
 *  package: Quicklinks
 *  copyright: Copyright (c) 2023. Bianca Roelandschap | OHSN
 *  license: GNU General Public License version 2 or later
 *  link: https://www.ohsn.nl
 */

namespace OHSN\Module\Quicklinks\Administrator\Event;

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Event\AbstractEvent;

/**
 * Event object for retrieving pluggable quicklinks
 *
 * @since  1.0.0
 */
class QuicklinksEvent extends AbstractEvent
{
	/**
	 * The event context
	 *
	 * @var    string
	 * @since  1.0.0
	 */
	private $context;

    /**
     * Get the event context
     *
     * @return  string
     *
     * @since   1.0.0
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set the event context
     *
     * @param string $context The event context
     *
     * @return  string
     *
     * @since   1.0.0
     */
    public function setContext($context)
    {
        $this->context = $context;

        return $context;
    }
}
