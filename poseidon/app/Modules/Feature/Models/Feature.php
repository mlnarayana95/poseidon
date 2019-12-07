<?php

namespace App\Modules\Feature\Models;

use App\Modules\Room\Models\FeatureRoom;
use Illuminate\Database\Eloquent\Model;
use DB;

class Feature extends Model
{

    protected $fillable = [
        'feature',
        'feature_icon'
    ];

    /**
     * Delete feature
     * @param $id
     */
    public function remove($id)
    {
        DB::beginTransaction();

        try {
            FeatureRoom::where('feature_id', $id)->delete();
            Feature::find($id)->delete();

            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
        }
    }

}
