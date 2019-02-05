<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
 
class Books extends Model
{
    protected $table ='books4';
    protected $primaryKey = 'isbno';
    public $incrementing = false;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isbno', 'name', 'category','description',
    ];

    //
}
