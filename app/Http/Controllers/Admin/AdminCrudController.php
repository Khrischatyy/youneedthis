<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class AdminCrudController extends CrudController
{

    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    public function setup()
    {
        $this->crud->setModel('App\Models\User');
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/admins');
        $this->crud->setEntityNameStrings('Admin', 'Admins');

        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Username'
            ],
            [
                'name' => 'email',
                'label' => 'User e-mail'
            ],
            [
                'name' => 'created_at',
                'label' => 'Time of creation'
            ]
        ]);

        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Username'
            ],
            [
                'name' => 'email',
                'label' => 'User e-mail'
            ],
            [
                'name' => 'password',
                'label' => 'Password'
            ]
        ]);
    }
}
