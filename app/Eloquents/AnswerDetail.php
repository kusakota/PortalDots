<?php

namespace App\Eloquents;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Activitylog\LogOptions;
use Spatie\Activitylog\Traits\LogsActivity;

class AnswerDetail extends Model
{
    use HasFactory;
    use LogsActivity;

    protected static function newFactory()
    {
        return \Database\Factories\AnswerDetailFactory::new();
    }

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->useLogName('answer_detail')
            ->logOnly([
                'id',
                'answer.id',
                'question.id',
                'question.form_id',
                'question.name',
            ])
            ->logOnlyDirty();
    }

    public function answer()
    {
        return $this->belongsTo(Answer::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
