<?php

use App\Models\MedicalTest;
use Illuminate\Database\Seeder;

class InvestigationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inverstigations = [
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "SPIROMETRY",
                "amount"=>"1100",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "6 MWDT",
                "amount"=>"1000",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "EXERCISE THERAPY",
                "amount"=>"300",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "EXERCISE THERAPY+ 1 ELECTRO MODALITY",
                "amount"=>"500",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "EXERCISE THERAPY+2 ELECTRO MODALITY",
                "amount"=>"600",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "1 ELECTROTHERAPY",
                "amount"=>"350",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "2 ELECTROTHERAPY",
                "amount"=>"400",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "PULMONARY REHAB",
                "amount"=>"500",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "SLEEP STUDY LEVEL 1",
                "amount"=>"7500",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "SLEEP STUDY LEVEL 2",
                "amount"=>"5500",
            ],
            [
                "uuid"  => (String)Str::uuid(),
                "name"  => "SLEEP STUDY LEVEL 3",
                "amount"=>"3000",
            ],
            
        ];
        foreach ($inverstigations as $key => $inverstigation) {
            MedicalTest::create($inverstigation);
    }
}
}
