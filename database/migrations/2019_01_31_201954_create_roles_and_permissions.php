<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CreateRolesAndPermissions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $admin = Role::create(['name' => 'admin']);
        $developer = Role::create(['name' => 'developer']);
        
        $manageUsers = Permission::create(['name' => 'manage users']);
        $showStatistics = Permission::create(['name' => 'show statistics']);
        
        $admin->givePermissionTo($manageUsers, $showStatistics);
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
