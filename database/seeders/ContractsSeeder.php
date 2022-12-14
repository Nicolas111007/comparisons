<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Contracts;


class ContractsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table first
         DB::statement('SET FOREIGN_KEY_CHECKS=0');
         Contracts::truncate();
         DB::statement('SET FOREIGN_KEY_CHECKS=1');

        //Define data
        $contracts = [
            ['suppliers_id'=>'1','energy_type_id'=> '1','contract_name'=> 'Électricité Variable Vert','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paaevv','active_contract'=>'1'],
            ['suppliers_id'=>'2','energy_type_id'=> '1','contract_name'=> 'Soleil & Vent Fixe','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paesvfi','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '1','contract_name'=> 'Soleil & Vent Flex','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paesvfl','active_contract'=>'1'],
            ['suppliers_id'=>'2','energy_type_id'=> '1','contract_name'=> 'Soleil & Vent Go','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paesvg','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '1','contract_name'=> 'Soleil & Vent Plus','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paesvp','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '1','contract_name'=> 'Soleil & Vent Variable','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paesvv','active_contract'=>'1'],
            ['suppliers_id'=>'2','energy_type_id'=> '1','contract_name'=> 'Toit Solaire','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paets','active_contract'=>'0'],
            ['suppliers_id'=>'3','energy_type_id'=> '1','contract_name'=> 'Électricité Fixe','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paeef','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Direct 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paed1','active_contract'=>'1'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Direct 3 ans','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paed3','active_contract'=>'1'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Direct Fixed 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paedf1','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Direct Fixed 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paedf3','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Drive 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paedr3','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Easy 3 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paee3','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Easy Fixed 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paeef1','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Easy Fixed 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paeef3','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Easy Indexed 1 an','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paeei1','active_contract'=>'1'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Easy Indexed 3 ans','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paeei3','active_contract'=>'1'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Up','var_fix'=>'1','time_contract'=>'48','abbreviation'=> 'paeu','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '1','contract_name'=> 'Avance électricité','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paeae','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '1','contract_name'=> 'Électricité Fixe Vert 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paeefv1','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '1','contract_name'=> 'Électricité Fixe Vert 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paeefv3','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '1','contract_name'=> 'Électricité Variable Vert','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paeevv','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '1','contract_name'=> 'Online électricité','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paeoe','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'Online','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pallo','active_contract'=>'1'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'Solar','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pals','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'Tip','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palti','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'Top 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palto1','active_contract'=>'0'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> '#BeGreen Fix','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palbgf','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Basic','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palb','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Click','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palc','active_contract'=>'0'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Comfy Green','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palcg','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Comfy Plugin','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palcp','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Comfy Shine','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palcs','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Ecoflex','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palec','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Essential','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'pales','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Optifix','var_fix'=>'1','time_contract'=>'24','abbreviation'=> 'paloptif','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Optimal','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paloptim','active_contract'=>'1'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Easy Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pamef','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Easy Variable 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamev','active_contract'=>'1'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Super Variable 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamsv','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Zen Fixe 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'pamzf3','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Zen Fixe 5 ans','var_fix'=>'1','time_contract'=>'60','abbreviation'=> 'pamzf5','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '1','contract_name'=> 'Activ','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paoa','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '1','contract_name'=> 'Activ +','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paoap','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '1','contract_name'=> 'Safe','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paos','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '1','contract_name'=> 'Smart','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paosm','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '1','contract_name'=> 'Smart Variable','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paosv','active_contract'=>'1'],
            ['suppliers_id'=>'10','energy_type_id'=> '1','contract_name'=> '100 % Vert Variable 1 an / courrier','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pawvv1c','active_contract'=>'0'],
            ['suppliers_id'=>'10','energy_type_id'=> '1','contract_name'=> '100 % Vert Variable 2 ans / courrier','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pawvv2c','active_contract'=>'0'],
            ['suppliers_id'=>'10','energy_type_id'=> '1','contract_name'=> '100 % Vert Variable 1 an / digital','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pawvv1d','active_contract'=>'0'],
            ['suppliers_id'=>'10','energy_type_id'=> '1','contract_name'=> '100 % Vert Variable 2 ans / digital','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pawvv2d','active_contract'=>'0'],
            ['suppliers_id'=>'1','energy_type_id'=> '2','contract_name'=> 'Gaz variable','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paagv','active_contract'=>'1'],
            ['suppliers_id'=>'2','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Fixe','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paegnfi','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Flex','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paegnfl','active_contract'=>'1'],
            ['suppliers_id'=>'2','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Go','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paegng','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Plus','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paegnp','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Variable','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paegnv','active_contract'=>'1'],
            ['suppliers_id'=>'3','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Variable','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paengnv','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Direct 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paegd1','active_contract'=>'1'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Direct 3 ans','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paegd3','active_contract'=>'1'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Direct Fixed 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paegdf1','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Direct Fixed 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paegdf3','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Easy 3 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paege3','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Easy Fixed 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paegef1','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Easy Fixed 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paegef3','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Easy Indexed 1 an','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paegei1','active_contract'=>'1'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Easy Indexed 3 ans','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paegei3','active_contract'=>'1'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Up','var_fix'=>'1','time_contract'=>'48','abbreviation'=> 'paegu','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '2','contract_name'=> 'Avance Gaz','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paesag','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paesgnf1','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Fixe 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paesgnf3','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Variable','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paesgnv','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '2','contract_name'=> 'Online Gaz','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paesog','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '2','contract_name'=> 'Online','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'palglo','active_contract'=>'1'],
            ['suppliers_id'=>'6','energy_type_id'=> '2','contract_name'=> 'Tip','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palgti','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '2','contract_name'=> 'Top 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palgto1','active_contract'=>'0'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> '#BeGreen Fix','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palgbgf','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Basic','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palgb','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Click','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palgc','active_contract'=>'0'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Comfy','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palgcg','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Ecoflex','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palgec','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Essential','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palges','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Optifix','var_fix'=>'1','time_contract'=>'24','abbreviation'=> 'palgopif','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Optimal','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palgoptim','active_contract'=>'1'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Easy Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pamgef','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Easy Variable 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamgev','active_contract'=>'1'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Super Variable 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamgsv','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Zen Variable 3 ans','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamgzv3','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Zen Variable 5 ans','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamgzv5','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '2','contract_name'=> 'Activ','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paoga','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '2','contract_name'=> 'Activ +','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paogap','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '2','contract_name'=> 'Smart','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paogsm','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '2','contract_name'=> 'Smart Variable','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paogsv','active_contract'=>'1'],
            ['suppliers_id'=>'10','energy_type_id'=> '2','contract_name'=> '100 % Vert Variable 1 an / courrier','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'pawgvv1c','active_contract'=>'0'],
            ['suppliers_id'=>'10','energy_type_id'=> '2','contract_name'=> '100 % Vert Variable 2 ans / courrier','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'pawgvv2c','active_contract'=>'0'],
            ['suppliers_id'=>'10','energy_type_id'=> '2','contract_name'=> '100 % Vert Variable 1 an / digital','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'pawgvv1d','active_contract'=>'0'],
            ['suppliers_id'=>'10','energy_type_id'=> '2','contract_name'=> '100 % Vert Variable 2 ans / digital','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'pawgvv2d','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Super Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pamsf1','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Zen Fixe 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'pamgzf3','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Zen Fixe 5 ans','var_fix'=>'1','time_contract'=>'60','abbreviation'=> 'pamgzf5','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'Top 2 ans','var_fix'=>'1','time_contract'=>'24','abbreviation'=> 'palto2','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'Top 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'palto3','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '2','contract_name'=> 'Top 2 ans','var_fix'=>'1','time_contract'=>'24','abbreviation'=> 'palgto2','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '2','contract_name'=> 'Top 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'palgto3','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Super Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pamgsf','active_contract'=>'0'],
            ['suppliers_id'=>'10','energy_type_id'=> '1','contract_name'=> 'Simplement Électricité','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pawese','active_contract'=>'0'],
            ['suppliers_id'=>'10','energy_type_id'=> '2','contract_name'=> 'Simplement Gaz','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'pawgsg','active_contract'=>'0'],
            ['suppliers_id'=>'9','energy_type_id'=> '1','contract_name'=> 'Flex','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'paoefl','active_contract'=>'0'],
            ['suppliers_id'=>'5','energy_type_id'=> '1','contract_name'=> 'Électricité Fixe Vert Solar 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paeefvs3','active_contract'=>'0'],
            ['suppliers_id'=>'11','energy_type_id'=> '1','contract_name'=> 'Bolt','var_fix'=>' 0','time_contract'=>' 1','abbreviation'=> 'pabeb','active_contract'=>'1'],
            ['suppliers_id'=>'11','energy_type_id'=> '1','contract_name'=> 'Bolt Go','var_fix'=>' 0','time_contract'=>' 1','abbreviation'=> 'pabebg','active_contract'=>'1'],
            ['suppliers_id'=>'11','energy_type_id'=> '1','contract_name'=> 'Bolt Online','var_fix'=>' 0','time_contract'=>' 1','abbreviation'=> 'pabebo','active_contract'=>'1'],
            ['suppliers_id'=>'11','energy_type_id'=> '2','contract_name'=> 'Bolt','var_fix'=>' 0','time_contract'=>' 1','abbreviation'=> 'pabgb','active_contract'=>'1'],
            ['suppliers_id'=>'11','energy_type_id'=> '2','contract_name'=> 'Bolt Go','var_fix'=>' 0','time_contract'=>' 1','abbreviation'=> 'pabgbg','active_contract'=>'1'],
            ['suppliers_id'=>'11','energy_type_id'=> '2','contract_name'=> 'Bolt Online','var_fix'=>' 0','time_contract'=>' 1','abbreviation'=> 'pabgbo','active_contract'=>'1'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Comfy Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pamecf','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Comfy Variable 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamecv','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Comfy Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pamgcf','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Comfy Variable 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamgcv','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Group Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pamegf','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Group Variable 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamegv','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Group Fixe 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'pamggf','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Group Variable 1 an','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamggv','active_contract'=>'0'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Comfy +','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palecp','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Comfy +','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palgcp','active_contract'=>'1'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'eMobility 1 an','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paleem1','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'eMobility 2 ans','var_fix'=>'1','time_contract'=>'24','abbreviation'=> 'paleem2','active_contract'=>'0'],
            ['suppliers_id'=>'6','energy_type_id'=> '1','contract_name'=> 'eMobility 3 ans','var_fix'=>'1','time_contract'=>'36','abbreviation'=> 'paleem3','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '1','contract_name'=> 'Soleil & Vent Home','var_fix'=>'1','time_contract'=>'24','abbreviation'=> 'paeesvh','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '1','contract_name'=> 'Soleil & Vent Home +','var_fix'=>'1','time_contract'=>'48','abbreviation'=> 'paeesvhp','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Home','var_fix'=>'1','time_contract'=>'24','abbreviation'=> 'paeggnh','active_contract'=>'0'],
            ['suppliers_id'=>'2','energy_type_id'=> '2','contract_name'=> 'Gaz Naturel Home +','var_fix'=>'1','time_contract'=>'48','abbreviation'=> 'paeggnhp','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Flow Indexed','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paeefi','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '2','contract_name'=> 'Flow Indexed','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paegfi','active_contract'=>'0'],
            ['suppliers_id'=>'4','energy_type_id'=> '1','contract_name'=> 'Dynamic','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paeed','active_contract'=>'1'],
            ['suppliers_id'=>'12','energy_type_id'=> '1','contract_name'=> 'Électricité particulier','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paeeep','active_contract'=>'1'],
            ['suppliers_id'=>'12','energy_type_id'=> '2','contract_name'=> 'Gaz particulier','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'paeggp','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'ComfyFlex','var_fix'=>'1','time_contract'=>'12','abbreviation'=> 'palecf','active_contract'=>'0'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'ComfyFlex','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palgcf','active_contract'=>'0'],
            ['suppliers_id'=>'3','energy_type_id'=> '1','contract_name'=> 'Électricité SELECT','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paeees','active_contract'=>'1'],
            ['suppliers_id'=>'3','energy_type_id'=> '2','contract_name'=> 'Gaz VARIO','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'paeggv','active_contract'=>'1'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Actif +','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palueap','active_contract'=>'0'],
            ['suppliers_id'=>'7','energy_type_id'=> '1','contract_name'=> 'Eco +','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palueep','active_contract'=>'0'],
            ['suppliers_id'=>'7','energy_type_id'=> '2','contract_name'=> 'Actif +','var_fix'=>'0','time_contract'=>'3','abbreviation'=> 'palugap','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '1','contract_name'=> 'Cosy Flex','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamecf1','active_contract'=>'0'],
            ['suppliers_id'=>'8','energy_type_id'=> '2','contract_name'=> 'Cosy Flex','var_fix'=>'0','time_contract'=>'1','abbreviation'=> 'pamgcf1','active_contract'=>'0'],

        ];
            
        //Insert data in the table
        DB::table('contracts')->insert($contracts);
    }
}
