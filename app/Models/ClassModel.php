<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    use HasFactory;
    protected $table = 'class';

        static function getSingle($id)
        {
            return self::find($id);
        }

        static public function getRecord()
        {
            $return = ClassModel::select('class.*', 'users.name as created_by_name')
                        ->join('users', 'users.id', 'class.created_by')
                        ->orderBy('class.id', 'desc')
                        ->paginate(1);
                    
                    return $return;
        }
}
