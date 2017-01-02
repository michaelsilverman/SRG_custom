<?php
/**
 * Created by PhpStorm.
 * User: michaelsilverman
 * Date: 12/28/16
 * Time: 7:42 PM
 */

namespace Drupal\dino_roar\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Wraps a incident report event for event subscribers.
 *
 * Whenever there is additional contextual data that you want to provide to the
 * event subscribers when dispatching an event you should create a new class
 * that extends \Symfony\Component\EventDispatcher\Event.
 *
 * See \Drupal\Core\Config\ConfigCrudEvent for an example of this in core.
 *
 * @ingroup dino_roar
 */
class RoarEvent extends Event {

    /**
     * Incident type.
     *
     * @var string
     */
    protected $type;

    /**
     * Detailed incident report.
     *
     * @var string
     */
    protected $report;

    /**
     * Constructs an incident report event object.
     *
     * @param string $type
     *   The incident report type.
     * @param string $report
     *   A detailed description of the incident provided by the reporter.
     */
    public function __construct($type, $report) {
        $this->type = $type;
        $this->report = $report;
    }

    /**
     * Get the incident type.
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Get the detailed incident report.
     *
     * @return string
     */
    public function getReport() {
        return $this->report;
    }

}