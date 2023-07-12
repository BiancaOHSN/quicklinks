<?php
/*
 *  package: Quicklinks
 *  copyright: Copyright (c) 2023. Bianca Roelandschap | OHSN
 *  license: GNU General Public License version 2 or later
 *  link: https://www.ohsn.nl
 */

namespace OHSN\Module\Quicklinks\Administrator\Dispatcher;

// No direct access.
defined('_JEXEC') or die;

use Joomla\CMS\Dispatcher\AbstractModuleDispatcher;

/**
 * Dispatcher class for mod_quicklinks
 *
 * @since  1.0.0
 */
class Dispatcher extends AbstractModuleDispatcher
{
    /**
     * Returns the layout data.
     *
     * @return  array
     *
     * @since   1.0.0
     */
    protected function getLayoutData()
    {
        $data = parent::getLayoutData();

        $helper = $this->app->bootModule('mod_quicklinks', 'administrator')->getHelper('QuicklinksHelper');
        $data['buttons'] = $helper->getButtons($data['params'], $this->getApplication());
        return $data;
    }
}
