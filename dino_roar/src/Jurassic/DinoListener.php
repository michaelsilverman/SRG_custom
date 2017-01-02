<?php
/**
 * Created by PhpStorm.
 * User: michaelsilverman
 * Date: 12/25/16
 * Time: 6:12 PM
 */

namespace Drupal\dino_roar\Jurassic;
use Symfony\Component\DependencyInjection\ContainerInterface;
//use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\KernelEvents;

class DinoListener implements EventSubscriberInterface
{
    public function onKernelRequest($event)
    {
        drupal_set_message('I got here');
        \Drupal::logger('srg_alexa')->notice('this is the message');
      //  $container = new ContainerInterface();
        drupal_set_message('I got here2');
//    $loggerFactory = $container->get('logger.factory');
//    $loggerFactory->get('default')->debug('xxxxx');
       // var_dump($event);
     //   die;
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::REQUEST => 'onKernelRequest',
        ];
        // TODO: Implement getSubscribedEvents() method.
    }

}