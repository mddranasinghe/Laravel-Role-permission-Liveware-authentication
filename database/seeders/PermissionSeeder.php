<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions =[
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'todo-list',
            'todo-create',
            'todo-edit',
            'todo-delete',
        ];

        foreach ($permissions as $key => $permission)
        {
            Permission::create(['name' => $permission]);
        }
    }
}
