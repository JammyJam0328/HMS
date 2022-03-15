<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;
class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Alma Residences Iligan
        // Zamora Street Poblacion, Iligan City, 9200
        // Cell. # 0942 649 5254
        // Tel. # 228-2789	
          
        $branch = Branch::create([
            'name'=>'Alma Residences Iligan',
            'address'=>'Zamora Street Poblacion, Iligan City, 9200',
            'phone'=>'0942 649 5254',
            'telephone'=>'228-2789',
        ]);
        $branch->users()->create([
            'name'=>'Alma Residences Iligan',
            'email'=>'ariligan@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        // Alming Guest House 
        // Whiteplains San Miguel Tibanga, Iligan City, 9200
        // Cell. # 0932 625 7153
        // Tel .# 228-3262	
          $branch = Branch::create([
            'name'=>'Alming Guest House ',
            'address'=>'Whiteplains San Miguel Tibanga, Iligan City, 9200',
            'phone'=>'0932 625 7153',
            'telephone'=>'228-3262',
        ]);
        $branch->users()->create([
            'name'=>'Alming Guest House ',
            'email'=>'aghouse@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        // Famous Pension House I
        // North Gate, Brgy, San Miguel, Tibanga, Iligan City, 9200
        // Cell. # 0942 650 3512
        // Tel. # 228 2297	
        
        $branch = Branch::create([
            'name'=>'Famous Pension House I',
            'address'=>'North Gate, Brgy, San Miguel, Tibanga, Iligan City, 9200',
            'phone'=>'0942 650 3512',
            'telephone'=>'228 2297',
        ]);
        $branch->users()->create([
            'name'=>'Famous Pension House I',
            'email'=>'fphousei@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        // Famous Pension House II
        // #21 Milestone Drive, San Miguel, Tibanga, Iligan City
        // Cell. # 0932 207 6880
        // Tel. # 228-4488		
        

        $branch = Branch::create([
            'name'=>'Famous Pension House II',
            'address'=>'#21 Milestone Drive, San Miguel, Tibanga, Iligan City',
            'phone'=>'0932 207 6880',
            'telephone'=>'228-4488',
        ]);
        $branch->users()->create([
            'name'=>'Famous Pension House II',
            'email'=>'fphouseii@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        // Flor – Al Mansion Iligan
        // General Aguinaldo Street, Poblacion, Iligan City, 9200
        // Cell. # 0942 633 8176
        // Tel. # 228-2198	
        $branch = Branch::create([
            'name'=>'Flor – Al Mansion Iligan',
            'address'=>'General Aguinaldo Street, Poblacion, Iligan City, 9200',
            'phone'=>'0942 633 8176',
            'telephone'=>'228-2198',
        ]);
        $branch->users()->create([
            'name'=>'Flor – Al Mansion Iligan',
            'email'=>'familigan@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        // D’Morvie Suites Iligan
        // #27 A Bonifacio Avenue, Saray – Tibanga, Iligan City 9200	
        // Cell. # 0932 207 5953
        // Tel. # 228-5302	
        
        $branch = Branch::create([
            'name'=>'D’Morvie Suites Iligan',
            'address'=>'#27 A Bonifacio Avenue, Saray – Tibanga, Iligan City 9200',
            'phone'=>'0932 207 5953',
            'telephone'=>'228-5302',
        ]);
        $branch->users()->create([
            'name'=>'D’Morvie Suites Iligan',
            'email'=>'dmsiligan@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        // D’Morvie Suites - Velez
        // Yacapin-Velez St. Brgy. 11, Cagayan De Oro City, 9000
        // Cell. # 09421330267
        // Tel. # 323-0294
        
        $branch = Branch::create([
            'name'=>'D’Morvie Suites - Velez',
            'address'=>'Yacapin-Velez St. Brgy. 11, Cagayan De Oro City, 9000',
            'phone'=>'09421330267',
            'telephone'=>'323-0294',
        ]);
        $branch->users()->create([
            'name'=>'D’Morvie Suites - Velez',
            'email'=>'dmsvelez@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);	

        // D’Morvie Suites – Capistrano
        // Capistrano-Velez St. Brgy. 10, Cagayan De Oro City, 9000
        // Cell. # 0942 279 7410
        // Tel. # 852-2015	
         $branch = Branch::create([
            'name'=>'D’Morvie Suites – Capistrano',
            'address'=>'Capistrano-Velez St. Brgy. 10, Cagayan De Oro City, 9000',
            'phone'=>'0942 279 7410',
            'telephone'=>'852-2015',
        ]);
        $branch->users()->create([
            'name'=>'D’Morvie Suites – Capistrano',
            'email'=>'dmscapistrano@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        // D’Morvie Suites – Lapasan
        // CM Recto Avenue, Lapasan, Cagayan De Oro City, 9000
        // Cell. # 0942 693 0146
        // Tel. # 856-8117	
         $branch = Branch::create([
            'name'=>'D’Morvie Suites – Lapasan',
            'address'=>'CM Recto Avenue, Lapasan, Cagayan De Oro City, 9000',
            'phone'=>'0942 693 0146',
            'telephone'=>'856-8117',
        ]);
        $branch->users()->create([
            'name'=>'D’Morvie Suites – Lapasan',
            'email'=>'dmslapasan@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        // Flor-Al Mansion Butuan
        // JC Aquino Avenue Tandang Sora, Butuan City, 8600
        // Cell. # 0931 077 3625
        // Tel. # 815 9515	
        $branch = Branch::create([
            'name'=>'Flor-Al Mansion Butuan',
            'address'=>'JC Aquino Avenue Tandang Sora, Butuan City, 8600',
            'phone'=>'0931 077 3625',
            'telephone'=>'815 9515',
        ]);
        $branch->users()->create([
            'name'=>'Flor-Al Mansion Butuan',
            'email'=>'fambutuan@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

        $branch = Branch::create([
            'name'=>'Flor-Al Mansion Pasay',
            'address'=>'527 A Brgy. 119 EDSA Cabrera Street, Pasay City, 1300',
            'phone'=>'0943 4175118',
            'telephone'=>'',
        ]);
        $branch->users()->create([
            'name'=>'Flor-Al Mansion Pasay',
            'email'=>'fampasay@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);
     
         $branch = Branch::create([
            'name'=>'D’Morvie Suites Recto',
            'address'=>'Brgy. 35 D CM Recto St. Claveria Davao City, 8000',
            'phone'=>'0942 591 8521',
            'telephone'=>'2210075',
        ]);
        $branch->users()->create([
            'name'=>'D’Morvie Suites Recto',
            'email'=>'dmsrecto@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);
        
   
        $branch = Branch::create([
            'name'=>'D’Morvie Suites San Pedro',
            'address'=>'Brgy. 2-A San Pedro Street, Poblacion, Davao City, 8000',
            'phone'=>'0943 388 1153',
            'telephone'=>'2210075',
        ]);
        $branch->users()->create([
            'name'=>'D’Morvie Suites San Pedro',
            'email'=>'dmssanpedro@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);

     	
        $branch = Branch::create([
            'name'=>'Alma Residences Gensan',
            'address'=>'J. Catolico Avenue Sr, Brgy. Lagao General Santos City, 9500',
            'phone'=>'0933 353 8130',
            'telephone'=>'877-5321',
        ]);
        $branch->users()->create([
            'name'=>'Alma Residences Gensan',
            'email'=>'argensan@gmail.com',
            'password'=>bcrypt('password12345'),
            'role'=>'branch-admin',
        ]);


    }
}