<?php

namespace Database\Seeders;

use App\Models\Ability;
use App\Models\Hero;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
      $heroData = [
          ['name' => 'Thor'],
          ['name' => 'Wonder Woman'],
          ['name' => 'Loki'],
          ['name' => 'Hulk'],
          ['name' => 'Spider Man'],
          ['name' => 'Ant Man'],
          ['name' => 'Captain America'],
          ['name' => 'Wolverine'],
          ['name' => 'Deadpool'],
          ['name' => 'Krakoa'],
      ];

      Hero::truncate();
      Hero::insert($heroData);

      $abilityData = [
        ['name' => 'Flight'],
        ['name' => 'Healing'],
        ['name' => 'Teleportation'],
        ['name' => 'Longevity'],
        ['name' => 'Immortality'],
        ['name' => 'Beauty'],
        ['name' => 'Shapeshifting'],
        ['name' => 'Durability'],
        ['name' => 'Intelligence'],
        ['name' => 'Agility'],
        ['name' => 'Telepathic immunity'],
        ['name' => 'Extended lifespan'],
        ['name' => 'Animal empathy'],
      ];

      Ability::truncate();
      Ability::insert($abilityData);
    }
}
