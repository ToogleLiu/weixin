<?php

namespace Toogleliu\Weixin;

class Weixin
{
    public function version()
    {
        return config('weixin.env') == 'dev' ? 'dev-master' : '7.1.8';
    }

    public function pushArr(array $from, array $to)
    {
        $from = array_column($from, null, 'id');
        foreach ($to as &$value) {
            $value['from'] = $from[$value['from_id']] ?: [];
        }
        unset($value);
        return $to;
    }
}