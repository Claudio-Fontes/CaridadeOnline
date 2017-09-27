<?php

use Faker\Generator as Faker;
use Charis\Models\OrganizationRoleUser;
use Charis\Models\Organization;
use Charis\Models\User;
use Charis\Models\Role;


$factory->define(OrganizationRoleUser::class, function (Faker $faker) {
    $organizations = Organization::pluck(Organization::ID)->toArray();
    $users = User::pluck(User::ID)->toArray();
    $roles = Role::pluck(Role::ID)->toArray();


    return [
        OrganizationRoleUser::ID_ORGANIZATION => $faker->randomElement($organizations),
        OrganizationRoleUser::ID_USER => $faker->randomElement($users),
        OrganizationRoleUser::ID_ROLE => $faker->randomElement($roles)
    ];
});

