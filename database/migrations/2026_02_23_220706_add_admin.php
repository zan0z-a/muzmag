<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        $users = [
            [
                'id' => '0',
                'name' => 'admin',
                'phone' => 'admin',
                'password' => Hash::make('admin'),
                'is_admin' => '1',
                'created_at' => DB::raw('CURRENT_TIMESTAMP'),
                'updated_at' => DB::raw('CURRENT_TIMESTAMP')
            ]
        ];
        DB::table('users')->insert($users);
    }

   
    public function down(): void
    {
        //
    }
};
