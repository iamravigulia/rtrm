<?php
namespace Edgewizz\Rtrm\Models;

use Illuminate\Database\Eloquent\Model;

class RtrmQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Rtrm\Models\RtrmAns', 'question_id');
    }
    protected $table = 'fmt_rtrm_ques';
}