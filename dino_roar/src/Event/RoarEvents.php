<?php

/**
 * Created by PhpStorm.
 * User: michaelsilverman
 * Date: 12/28/16
 * Time: 7:22 PM
 */

namespace Drupal\dino_roar\Event;

// @ingroup dino_roar

final class RoarEvents
{
    /**
     * Name of the event fired when a new incident is reported.
     *
     * This event allows modules to perform an action whenever a new incident is
     * reported via the incident report form. The event listener method receives a
     * \Drupal\events_example\Event\IncidentReportEvent instance.
     *
     * @Event
     *
     * @see \Drupal\dino_roar\Event\IncidentRoartEvent
     *
     * @var string
     */
    const NEW_REPORT = 'dino_roar.new_roar_report';
}