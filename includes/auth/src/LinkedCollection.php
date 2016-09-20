<?php

namespace rexstaffing\uFlex;

/**
 * A Collection which references a existing array
 */
class LinkedCollection extends Collection
{
    /**
     * Takes the reference of an array
     *
     * @param array $info
     */
    public function __construct(array &$info = array())
    {
        $this->_data =& $info;
    }
}
