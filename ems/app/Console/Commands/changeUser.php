<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\employee;

class changeUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:change';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'To change status of User';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        echo "hi \n";
           $chang_id= readline("\n enter the Employee Id for changing the type:  ");
           $emp=employee::find(intval($chang_id)); 
           if(!$emp){
               echo "\n Wrong Employee ID ";
           }
           else{
               echo "\n1. Normal Employee. \n2. Manager. \n3. Admin. ";
               $opt=readline("\n Enter the Change you want to make: ");
               switch ($opt) {
                case "1":
                    $emp->emp_type="normal";
                  break;
                case "2":
                    $emp->emp_type="manager";
                  break;
                case "3":
                    $emp->emp_type="admin";
                  break;
                }
                $emp->save();
                echo "\n Your change was succesfull";

           }
        }
        

    
}
