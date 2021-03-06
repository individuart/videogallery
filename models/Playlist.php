<?php namespace Individuart\Videogallery\Models;

use Model;
use October\Rain\Database\Traits\Validation;

/**
 * Playlist Model
 *
 * @property Video[] $videos;
 * @property int $videos_count
 */
class Playlist extends Model
{
    use Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'individuart_videogallery_playlists';

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['name'];

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = ['name'];

    public $rules = [
        'name' => 'required',
    ];

    public $attributeNames = [
        'name' => 'individuart.videogallery::lang.plugin.models.playlist.attributes.name',
    ];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];
    public $belongsToMany = [
        'videos' => [
            Video::class,
            'table' => 'individuart_videogallery_playlist_video'
        ],
        'videos_count' => [
            Video::class,
            'table' => 'individuart_videogallery_playlist_video',
            'count' => true
        ]
    ];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];
}
