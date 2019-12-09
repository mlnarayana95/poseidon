<?php
/**
 * Common Helper File
 * User: Krita
 * Date: 2019-12-09
 * Time: 12:18 PM
 */

if (! function_exists('setting')) {

    /**
     * @param      $key
     * @param null $default
     * @return \App\Modules\Setting\Models\SiteSetting|bool|int|mixed
     */
    function setting($key, $default = null)
    {
        if (is_null($key)) {
            return new App\Modules\Setting\Models\SiteSetting();
        }

        if (is_array($key)) {
            return App\Modules\Setting\Models\SiteSetting::set($key[0], $key[1]);
        }

        $value = App\Modules\Setting\Models\SiteSetting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}