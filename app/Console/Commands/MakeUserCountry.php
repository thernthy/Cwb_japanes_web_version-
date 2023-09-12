<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\User;
use DB;
use Carbon\Carbon;

class MakeUserCountry extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'makeuser:country';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'make user automatically';

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
     * @return mixed
     */
    public function handle()
    {
        $data = json_decode(DB::table('countries')->get(), true);
        foreach ($data as $item){

            $emailnya = $item['slug'].'@cwb-team.net';

            // hak akses
            // if($item['jenis']=='Puskesmas') {
            //     $hak_akses = 2;
            // } else {
            //     $hak_akses = 3;
            // }
            $hak_akses = 3;

            DB::table('cms_users')->insert(
                [
                    'country_id' => $item['id'],
                    'name' => 'CWB '.$item['title'], 
                    'photo' => 'img/default.jpg',
                    'email' => $emailnya,
                    'password' => bcrypt("Cwb#23"),
                    'id_cms_privileges' => $hak_akses,
                    'created_at' => new \DateTime(),
                ]
            );
        }
        return true;
    }
}