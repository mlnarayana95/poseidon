<?php
/**
 * Common Helper File
 * User: Krita
 * Date: 2019-12-09
 * Time: 12:18 PM
 */

if (!function_exists('setting')) {

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
            return App\Modules\Setting\Models\SiteSetting::set($key[0],
                $key[1]);
        }

        $value = App\Modules\Setting\Models\SiteSetting::get($key);

        return is_null($value) ? value($default) : $value;
    }
}

if (!function_exists('format_price')) {

    /**
     * @param int $price
     * @return string
     */
    function format_price($price = 0)
    {
        return '$' . number_format($price, 2) . ' CAD';
    }

}

/**
 * @param $first_name Name of the recipient
 * @param $email email reciever email address
 * @param $view create a view that shows the format of the email
 * @return \Illuminate\Http\RedirectResponse
 */
function sendEmail($first_name, $email, $view)
{
    try {
        $data = array('name' => $first_name, 'email' => $email);
        Mail::send($view, $data, function ($mesage) use ($data) {
            $mesage->to($data['email'],
                $data['name'])->subject('Test subject');

        });
        return back();
    } catch (Exception $e) {
    }
}