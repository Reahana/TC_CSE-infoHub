<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuideTeacher extends Model
{
    use HasFactory;
    private static $teacher;

    public static function newGuideTeacher($request)
    {
        self::$teacher = new GuideTeacher();

        self::$teacher->semester    = $request->semester;
        self::$teacher->g_t_id    = $request->g_t_id;
        self::$teacher->guide_teacher = $request->guide_teacher;
        self::$teacher->ag_t_id    = $request->ag_t_id;
        self::$teacher->asst_guide_teacher = $request->asst_guide_teacher;

        self::$teacher->save();
    }


    public static function updateGuideTeacher($request, $id)
    {
        self::$teacher =GuideTeacher::find($id);

        self::$teacher->semester    = $request->semester;
        self::$teacher->g_t_id    = $request->g_t_id;
        self::$teacher->guide_teacher = $request->guide_teacher;
        self::$teacher->ag_t_id    = $request->ag_t_id;
        self::$teacher->asst_guide_teacher = $request->asst_guide_teacher;

        self::$teacher->save();
    }
    public static function deleteGuideTeacher($id)
    {

        self::$teacher =GuideTeacher::find($id);

        self::$teacher->delete();
    }

    public  function teacher()
    {
        self::hasMany('App\Models\Teacher');
//        return $this->belongsToMany('App\Models\Teacher');
    }


}
