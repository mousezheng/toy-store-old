<?php
/**
 * Created by PhpStorm
 * User: mousezheng
 * Date: 2020/6/18
 * Time: 上午1:23
 */

namespace App\Enum;

use SplEnum;

/**
 * Class RedirectType
 * @package App\Enum
 */
class RedirectType extends SplEnum{

    const PERMANENT = 301;

    const TEMPORARY = 302;
}