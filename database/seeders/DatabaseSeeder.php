<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {


        User::factory()->create([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('password123')
        ]);

        $user = User::create([
            'name' => 'Supplier',
            'email' => 'supplier@gmail.com',
            'password' => bcrypt('password123'),
        ]);


        $managePermission = Permission::create(['name' => 'manage-suppliers']);

        $createSupplierPermission = Permission::create(['name' => 'create-supplier']);
        $editSupplierPermission = Permission::create(['name' => 'edit-supplier']);
        $viewSupplierPermission = Permission::create(['name' => 'view-supplier']);
        $deleteSupplierPermission = Permission::create(['name' => 'delete-supplier']);
        $listSupplierPermission = Permission::create(['name' => 'list-supplier']);


        $managePermission->givePermissionTo($createSupplierPermission);
        $managePermission->givePermissionTo($editSupplierPermission);
        $managePermission->givePermissionTo($viewSupplierPermission);
        $managePermission->givePermissionTo($deleteSupplierPermission);
        $managePermission->givePermissionTo($listSupplierPermission);

        $user->givePermissionTo($managePermission);
    }
}
