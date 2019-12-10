<?php

namespace App\Modules\Setting\Controllers;

use App\Modules\Setting\Models\SiteSetting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['setting'] = SiteSetting::all();
        return view("Setting::index", $data);
    }

    /**
     * Update the Site Settings
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request)
    {
        $rules = SiteSetting::getValidationRules();
        $data = $this->validate($request, $rules);

        $validSettings = array_keys($rules);

        foreach ($data as $key => $val) {
            if (in_array($key, $validSettings)) {
                SiteSetting::add($key, $val, SiteSetting::getDataType($key));
            }
        }

        flash('Site Settings have been updated successfully!')->success();
        return redirect()->back();
    }
}
