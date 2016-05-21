<?php
/**
 * Rafael Armenio <rafael.armenio@gmail.com>
 *
 * @link http://github.com/armenio for the source repository
 */

namespace Armenio\ViewHelperJsonDecode\View\Helper;

use Zend\View\Helper\AbstractHelper;
use Zend\Json\Json as JsonFormatter;

/**
 * Helper for simplifying JSON decode
 */
class JsonDecode extends AbstractHelper
{
    /**
     * Encode data as JSON and set response header
     *
     * @param string $source String to be decoded
     * @param int $objectDecodeType How objects should be decoded; should be
     * @return string|void
     */
    public function __invoke($source, $objectDecodeType = JsonFormatter::TYPE_ARRAY)
    {
        return JsonFormatter::decode($source, $objectDecodeType);
    }
}
