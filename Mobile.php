<?php
/**
 * Arikaim
 *
 * @link        http://www.arikaim.com
 * @copyright   Copyright (c)  Konstantin Atanasov <info@arikaim.com>
 * @license     http://www.arikaim.com/license
 * 
*/
namespace Arikaim\Modules\Mobile;

use Arikaim\Core\Extension\Module;
use Arikaim\Modules\Mobile\MobileMiddleware;

/**
 * Mobile detect middleware class
 */
class Mobile extends Module implements MiddlewareInterface
{
    /**
     * Boot module
     *
     * @return void
     */
    public function boot()
    {
        $this->addMiddlewareClass(MobileMiddleware::class);
    }
}
