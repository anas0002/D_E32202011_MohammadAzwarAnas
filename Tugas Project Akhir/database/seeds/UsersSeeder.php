<?php
use Illuminate\Database\Seeder;
use App\Role;
use App\User;
class UsersSeeder extends Seeder
{
public function run()
{
// Membuat role admin
$adminRole = new Role();
$adminRole->name = "admin";
$adminRole->display_name = "Admin";
$adminRole->save();
// Membuat role member
$memberRole = new Role();
$memberRole->name = "member";
$memberRole->display_name = "Member";
$memberRole->save();
// Membuat sample admin
$admin = new User();
$admin->name = 'Admin';
$admin->email = 'admin@gmail.com';
$admin->password = bcrypt('admin123');
$admin->save();
$admin->attachRole($adminRole);
// Membuat sample member
$member = new User();
$member->name = "bayu Member";
$member->email = 'member@gmail.com';
$member->password = bcrypt('rahasia');
$member->save();
$member->attachRole($memberRole);
}
}
