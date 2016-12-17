<?php

namespace Statamic\Addons\Reject;

use Statamic\API\Helper;
use Statamic\Extend\Filter;

class RejectFilter extends Filter
{
    public function filter()
    {

        return $this->collection->reject(function ($entry)
        {
          $remove = array_get($this->context, $this->get('remove'));
          return in_array($entry->get('id'),$remove);
        });
    }
}
