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
                'name' => 'category',
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
                'entity' => 'admin',
                'label' => 'Admin',
                'type' => 'relationship',
                'attribute' => "username",
                'model' => 'App\Models\Admin',
            ],
            [
                'name' => 'category',
                'entity' => 'categoryy',
                'label' => 'Category',
                'type' => 'text',
                'attribute' => "title",
                'model' => 'App\Models\Category',
            ]
        ]);
    }
}
