<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class PostCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\Post');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/posts');
        $this->crud->setEntityNameStrings('Post', 'Posts');

        $this->crud->setColumns([
            [
                'name' => 'title',
                'label' => 'Title'
            ],
            [
                'name' => 'text',
                'label' => 'Text'
            ],
            [
                'name' => 'user_id',
                'label' => 'User'
            ],
            [
                'name'      => 'image',
                'label'     => 'Image',
                'type'      => 'image',
                'height' => '50px',
                'width'  => '50px',
            ],
            [
                'name' => 'category_id',
                'label' => 'Category'
            ]
        ]);

        $this->crud->addFields([
            [
                'name' => 'title',
                'label' => 'Title',
                'attributes' => [
                    'required' => 'required',
                    'placeholder' => 'Title of post'
                ]
            ],
            [
                'name' => 'text',
                'label' => 'Text',
                'type' => 'ckeditor'
            ],
            [
                'name' => "image",
                'label' => "Image",
                'type' => "image",
                'crop' => true,
                'aspect_ratio' => 1,
            ],
            [
                'name' => 'user_id',
                'entity' => 'user',
                'label' => 'User',
                'type' => 'relationship',
                'attribute' => "name",
                'model' => 'App\Models\User'
            ],
            [
                'name' => 'category_id',
                'entity' => 'category',
                'label' => 'Category',
                'type' => 'relationship',
                'attribute' => "name",
                'model' => 'App\Models\Category'
            ]
        ]);
    }

    public function setupCreateOperation()
    {
        Post::created(function($entry) {
            Cache::forget('posts');
        });
    }

    protected function setupUpdateOperation()
    {
        Post::saving(function($entry) {
            Cache::forget('posts');
        });
    }
}
