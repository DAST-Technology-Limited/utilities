<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        
        // Inser default networks
        DB::table("networks")->insert([
            ["network_id" => "1", "network_name" => "MTN"],
            ["network_id" => "2", "network_name" => "GLO"],
            ["network_id" => "3", "network_name" => "AIRTEL"],
            ["network_id" => "6", "network_name" => "9MOBILE"],
            ["network_id" => "7", "network_name" => "SMILE"]
        ]);

        // Create default user level
        DB::table("levels")->insert(["name" => "user"]);  //create first user level

        //Data plans
        DB::table("data")->insert([
            ["data_id" => "300", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "270.0",	"size" => "1.5 GB",	"validity" => "30 days"],
["data_id" => "186", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "1640.0",	"size" => "4.5 GB",	"validity" => "30 days{Gifting}"],
["data_id" => "187", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "3280.0",	"size" => "11.0 GB",	"validity" => "30 days{Gifting}"],
["data_id" => "189", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "8200.0",	"size" => "40.0 GB",	"validity" => "30 days{Gifting}"],
["data_id" => "190", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "12300.0",	"size" => "75.0 GB",	"validity" => "30 days{Gifting}"],
["data_id" => "373", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "6200.0",	"size" => "40.0 GB",	"validity" => "30 days"],
["data_id" => "372", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "35.0",	"size" => "100.0 MB",	"validity" => "30 days"],
["data_id" => "305", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "1800.0",	"size" => "10.0 GB",	"validity" => "30 days"],
["data_id" => "347", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "620.0",	"size" => "4.0 GB",	"validity" => "30 days"],
["data_id" => "348", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "900.0",	"size" => "4.5 GB",	"validity" => "30 days"],
["data_id" => "349", "network_name" =>	"9MOBILE",	"plan_type" => "SME",	"amount" => "1680.0",	"size" => "7.0 GB",	"validity" => "30 days"],
["data_id" => "304", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "775.0",	"size" => "5.0 GB",	"validity" => "30 days"],
["data_id" => "303", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "539.5",	"size" => "3.0 GB",	"validity" => "30 days"],
["data_id" => "188", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "4100.0",	"size" => "15.0 GB",	"validity" => "30 days{Gifting}"],
["data_id" => "299", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "360.0",	"size" => "2.0 GB",	"validity" => "30 days"],
["data_id" => "298", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "180.0",	"size" => "1.0 GB",	"validity" => "30 days"],
["data_id" => "350", "network_name" =>	"9MOBILE",	"plan_type" => "SME",	"amount" => "3000.0",	"size" => "15.0 GB",	"validity" => "30 days"],
["data_id" => "351", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "4200.0",	"size" => "20.0 GB",	"validity" => "30 days"],
["data_id" => "278", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "41.0",	"size" => "25.0 MB",	"validity" => "1 day"],
["data_id" => "362", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "2145.0",	"size" => "11.0 GB",	"validity" => "30 days"],
["data_id" => "361", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "25.0",	"size" => "25.0 MB",	"validity" => "30 days"],
["data_id" => "239", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "415.0",	"size" => "2000.0 MB",	"validity" => "1 (2gb)day"],
["data_id" => "238", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "246000.0",	"size" => "1000.0 MB",	"validity" => "1 day"],
["data_id" => "237", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "16400000.0",	"size" => "650.0 MB",	"validity" => "1 day"],
["data_id" => "236", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "82.0",	"size" => "100.0 MB",	"validity" => "1 day"],
["data_id" => "184", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "984.0",	"size" => "2.0 GB",	"validity" => "30 days"],
["data_id" => "276", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "1230.0",	"size" => "7.0 GB",	"validity" => "7 days(weekly)"],
["data_id" => "277", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "415.0",	"size" => "1.0 GB",	"validity" => "1 day"],
["data_id" => "344", "network_name" =>	"9MOBILE",	"plan_type" => "SME",	"amount" => "125.0",	"size" => "500.0 MB",	"validity" => "30 days"],
["data_id" => "345", "network_name" =>	"9MOBILE",	"plan_type" => "SME",	"amount" => "450.0",	"size" => "2.5 GB",	"validity" => "30 days"],
["data_id" => "346", "network_name" =>	"9MOBILE",	"plan_type" => "SME",	"amount" => "875.0",	"size" => "3.5 GB",	"validity" => "30 days"],
["data_id" => "310", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "164.0",	"size" => "250.0 MB",	"validity" => "7 days(weekly)"],
["data_id" => "377", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "15.0",	"size" => "15.0 MB",	"validity" => "30 days"],
["data_id" => "182", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "90.0",	"size" => "500.0 MB",	"validity" => "30 days"],
["data_id" => "185", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "1230.0",	"size" => "3.0 GB",	"validity" => "30 days{Gifting}"],
["data_id" => "183", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "820.0",	"size" => "1.5 GB",	"validity" => "30 days"],
["data_id" => "376", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "10.0",	"size" => "10.0 MB",	"validity" => "30 days"],
["data_id" => "375", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "15500.0",	"size" => "100.0 GB",	"validity" => "30 days"],
["data_id" => "309", "network_name" =>	"9MOBILE",	"plan_type" => "GIFTING",	"amount" => "410.0",	"size" => "500.0 MB",	"validity" => "7 days(weekly)"],
["data_id" => "374", "network_name" =>	"9MOBILE",	"plan_type" => "CORPORATE GIFTING",	"amount" => "7750.0",	"size" => "50.0 GB",	"validity" => "30 days"],
["data_id" => "319", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "1000000.0",	"size" => "500.0 GB",	"validity" => "90 days"],
["data_id" => "275", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "4400.0",	"size" => "20.0 GB",	"validity" => "30 days"],
["data_id" => "274", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "3300.0",	"size" => "15.0 GB",	"validity" => "30 days"],
["data_id" => "273", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "2150.0",	"size" => "10.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "241", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "1455.0",	"size" => "6000.0 MB",	"validity" => "7 days(weekly)"],
["data_id" => "251", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "291.0",	"size" => "350.0 MB",	"validity" => "7 days(weekly)"],
["data_id" => "253", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "19400.0",	"size" => "110.0 GB",	"validity" => "30(120gb) days"],
["data_id" => "255", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "14550.0",	"size" => "75.0 GB",	"validity" => "30 days"],
["data_id" => "264", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "22.5",	"size" => "100.0 MB",	"validity" => "7days"],
["data_id" => "269", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "1075.0",	"size" => "5.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "268", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "430.0",	"size" => "2.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "267", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "215.0",	"size" => "1.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "266", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "107.5",	"size" => "500.0 MB",	"validity" => "30 days corporate gifting"],
["data_id" => "265", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "67.5",	"size" => "300.0 MB",	"validity" => "7 days(weekly)"],
["data_id" => "146", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "1164.0",	"size" => "2.0 GB",	"validity" => "30 days"],
["data_id" => "148", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "1940.0",	"size" => "4.5 GB",	"validity" => "30 days"],
["data_id" => "149", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "2425.0",	"size" => "6.0 GB",	"validity" => "30 days"],
["data_id" => "150", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "2910.0",	"size" => "10.0 GB",	"validity" => "30 days"],
["data_id" => "163", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "3880.0",	"size" => "11.0 GB",	"validity" => "30 days"],
["data_id" => "209", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "9700.0",	"size" => "40.0 GB",	"validity" => "30 days"],
["data_id" => "370", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "500000.0",	"size" => "250.0 GB",	"validity" => "90days"],
["data_id" => "369", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "1000000.0",	"size" => "500.0 GB",	"validity" => "90days"],
["data_id" => "147", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "1455.0",	"size" => "3.0 GB",	"validity" => "30 days"],
["data_id" => "145", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "970000.0",	"size" => "1.5 GB",	"validity" => "30 days"],
["data_id" => "144", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "468.0",	"size" => "750.0 MB",	"validity" => "14 days"],
["data_id" => "326", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "19800000.0",	"size" => "10.0 TB",	"validity" => "90 days"],
["data_id" => "325", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "10000000.0",	"size" => "5.0 TB",	"validity" => "90 days"],
["data_id" => "324", "network_name" =>	"AIRTEL",	"plan_type" => "CORPORATE GIFTING",	"amount" => "2050000.0",	"size" => "1.0 TB",	"validity" => "90 days"],
["data_id" => "234", "network_name" =>	"AIRTEL",	"plan_type" => "GIFTING",	"amount" => "4850.0",	"size" => "20.0 GB",	"validity" => "30 days"],
["data_id" => "13", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "900.0",	"size" => "3.9 GB",	"validity" => "30days 1.9gbday + 2gbnite=3.9g"],
["data_id" => "331", "network_name" =>	"GLO",	"plan_type" => "CORPORATE GIFTING",	"amount" => "111.0",	"size" => "500.0 MB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "329", "network_name" =>	"GLO",	"plan_type" => "CORPORATE GIFTING",	"amount" => "1115.0",	"size" => "5.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "332", "network_name" =>	"GLO",	"plan_type" => "CORPORATE GIFTING",	"amount" => "446.0",	"size" => "2.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "333", "network_name" =>	"GLO",	"plan_type" => "CORPORATE GIFTING",	"amount" => "47.0",	"size" => "200.0 MB",	"validity" => "14 days(corporate gifting)"],
["data_id" => "334", "network_name" =>	"GLO",	"plan_type" => "CORPORATE GIFTING",	"amount" => "223.0",	"size" => "1.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "285", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "46.0",	"size" => "50.0 MB",	"validity" => "1 day GLO DATA"],
["data_id" => "335", "network_name" =>	"GLO",	"plan_type" => "CORPORATE GIFTING",	"amount" => "2230.0",	"size" => "10.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "336", "network_name" =>	"GLO",	"plan_type" => "CORPORATE GIFTING",	"amount" => "669.0",	"size" => "3.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "290", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "18000.0",	"size" => "138.0 GB",	"validity" => "30 days"],
["data_id" => "289", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "16200.0",	"size" => "119.0 GB",	"validity" => "30 days"],
["data_id" => "288", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "184.0",	"size" => "350.0 MB",	"validity" => "2 days"],
["data_id" => "287", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "92.0",	"size" => "150.0 MB",	"validity" => "1 day"],
["data_id" => "18", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "3600.0",	"size" => "18.0 GB",	"validity" => "30days 14gday +4gbnite=18gb"],
["data_id" => "220", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "13500.0",	"size" => "93.0 GB",	"validity" => "30 days"],
["data_id" => "219", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "9000.0",	"size" => "50.0 GB",	"validity" => "30 days"],
["data_id" => "218", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "7200.0",	"size" => "27.0 GB",	"validity" => "30days 27gday +2gbnite=29gb"],
["data_id" => "180", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "1350.0",	"size" => "7.5 GB",	"validity" => "30days 3.5gbday + 4gbnite=7.5g"],
["data_id" => "12", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "460.0",	"size" => "800.0 MB",	"validity" => "14 days 800mbday+550mb nite=1."],
["data_id" => "65", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "4800.0",	"size" => "20.0 GB",	"validity" => "30days 20gday +4gbnite=24gb"],
["data_id" => "16", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "2700.0",	"size" => "14.0 GB",	"validity" => "30days 10gday +4gbnite=14gb"],
["data_id" => "15", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "2250.0",	"size" => "10.8 GB",	"validity" => "30days 6.8gday +4gbnite=10.8g"],
["data_id" => "14", "network_name" =>	"GLO",	"plan_type" => "GIFTING",	"amount" => "1800.0",	"size" => "9.2 GB",	"validity" => "30days 5.2gbday + 4gbnite=9.2g"],
["data_id" => "327", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "4290000.0",	"size" => "20.0 TB",	"validity" => "90 days"],
["data_id" => "328", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "4440000.0",	"size" => "20.0 TB",	"validity" => "90 days"],
["data_id" => "322", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "1080000.0",	"size" => "5.0 TB",	"validity" => "90days"],
["data_id" => "371", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "53750.0",	"size" => "250.0 GB",	"validity" => "90days"],
["data_id" => "368", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "29.0",	"size" => "50.0 MB",	"validity" => "30 days"],
["data_id" => "367", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "1547.0",	"size" => "7.0 GB",	"validity" => "30 days"],
["data_id" => "378", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "2210000.0",	"size" => "10.0 TB",	"validity" => "30 days"],
["data_id" => "323", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "1112500.0",	"size" => "5.0 TB",	"validity" => "90days"],
["data_id" => "343", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "115000000.0",	"size" => "500.0 MB",	"validity" => "30 days (SME)2"],
["data_id" => "356", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "1082.5",	"size" => "5.0 GB",	"validity" => "30days"],
["data_id" => "353", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "216.5",	"size" => "1.0 GB",	"validity" => "30 days"],
["data_id" => "342", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "2200.0",	"size" => "10.0 GB",	"validity" => "30 days(SME)2"],
["data_id" => "341", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "1100.0",	"size" => "5.0 GB",	"validity" => "30days (SME)2"],
["data_id" => "340", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "884.0",	"size" => "4.0 GB",	"validity" => "30 days"],
["data_id" => "339", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "660.0",	"size" => "3.0 GB",	"validity" => "30 days (SME)2"],
["data_id" => "338", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "440.0",	"size" => "2.0 GB",	"validity" => "30 days (SME)2"],
["data_id" => "354", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "433.0",	"size" => "2.0 GB",	"validity" => "30 days"],
["data_id" => "355", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "649.5",	"size" => "3.0 GB",	"validity" => "30days"],
["data_id" => "366", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "1326.0",	"size" => "6.0 GB",	"validity" => "30 days"],
["data_id" => "357", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "2165.0",	"size" => "10.0 GB",	"validity" => "30days"],
["data_id" => "358", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "111.0",	"size" => "500.0 MB",	"validity" => "30 days"],
["data_id" => "337", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "220.0",	"size" => "1.0 GB",	"validity" => "30 days (SME)2"],
["data_id" => "359", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "332.0",	"size" => "1.5 GB",	"validity" => "30 days"],
["data_id" => "360", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "35.0",	"size" => "100.0 MB",	"validity" => "30 days"],
["data_id" => "363", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "20.0",	"size" => "20.0 MB",	"validity" => "30 days"],
["data_id" => "364", "network_name" =>	"MTN",	"plan_type" => "SME2",	"amount" => "23.5",	"size" => "25.0 MB",	"validity" => "30 days"],
["data_id" => "221", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "940.0",	"size" => "1.5 GB",	"validity" => "30 days"],
["data_id" => "258", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "4460.0",	"size" => "20.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "257", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "2280.0",	"size" => "10.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "256", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "2820.0",	"size" => "10.0 GB",	"validity" => "30 days(direct)"],
["data_id" => "233", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "470.0",	"size" => "1.0 GB",	"validity" => "7-days(weekly)"],
["data_id" => "232", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "470.0",	"size" => "750.0 MB",	"validity" => "7 days(direct)"],
["data_id" => "231", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "1410.0",	"size" => "6.0 GB",	"validity" => "7-day (6gb)"],
["data_id" => "230", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "285.0",	"size" => "350.0 MB",	"validity" => "7-day(direct)"],
["data_id" => "229", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "209.0",	"size" => "200.0 MB",	"validity" => "3-days(direct)"],
["data_id" => "228", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "940.0",	"size" => "2.0 GB",	"validity" => "Weekly 7days(2gb direct)"],
["data_id" => "226", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "95.0",	"size" => "100.0 MB",	"validity" => "1 Day(direct)"],
["data_id" => "225", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "114.0",	"size" => "500.0 MB",	"validity" => "30 days corporate gifting"],
["data_id" => "223", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "1880.0",	"size" => "4.5 GB",	"validity" => "30 days"],
["data_id" => "222", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "1140.0",	"size" => "2.0 GB",	"validity" => "30 days"],
["data_id" => "259", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "3345.0",	"size" => "15.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "217", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "1140.0",	"size" => "5.0 GB",	"validity" => "30 days (corporate gifting)"],
["data_id" => "216", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "684.0",	"size" => "3.0 GB",	"validity" => "30 days (corporate gifting)"],
["data_id" => "215", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "456.0",	"size" => "2.0 GB",	"validity" => "30 days (corporate gifting)"],
["data_id" => "213", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "228.0",	"size" => "1.0 GB",	"validity" => "30 days (corporate gifting)"],
["data_id" => "204", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "9400.0",	"size" => "40.0 GB",	"validity" => "30 days (direct)"],
["data_id" => "199", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "3290.0",	"size" => "12.0 GB",	"validity" => "30 days (direct)"],
["data_id" => "197", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "2350.0",	"size" => "6.0 GB",	"validity" => "30 days"],
["data_id" => "179", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "108.0",	"size" => "500.0 MB",	"validity" => "30 days"],
["data_id" => "169", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "1080.0",	"size" => "5.0 GB",	"validity" => "30 days"],
["data_id" => "168", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "648.0",	"size" => "3.0 GB",	"validity" => "30 days"],
["data_id" => "167", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "432.0",	"size" => "2.0 GB",	"validity" => "30 days"],
["data_id" => "166", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "216.0",	"size" => "1.0 GB",	"validity" => "30 days"],
["data_id" => "291", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "285.0",	"size" => "1.0 GB",	"validity" => "1 day"],
["data_id" => "320", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "215000.0",	"size" => "1.0 TB",	"validity" => "90days"],
["data_id" => "318", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "111400.0",	"size" => "500.0 GB",	"validity" => "90days"],
["data_id" => "317", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "107500.0",	"size" => "500.0 GB",	"validity" => "90 days"],
["data_id" => "316", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "28200.0",	"size" => "200.0 GB",	"validity" => "30 days"],
["data_id" => "315", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "18800.0",	"size" => "120.0 GB",	"validity" => "30 days"],
["data_id" => "314", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "5640.0",	"size" => "25.0 GB",	"validity" => "30 days"],
["data_id" => "312", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "209.0",	"size" => "250.0 MB",	"validity" => "2-days(direct)"],
["data_id" => "311", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "285.0",	"size" => "750.0 MB",	"validity" => "3-days(direct)"],
["data_id" => "297", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "48.0",	"size" => "40.0 MB",	"validity" => "1 day"],
["data_id" => "296", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "5700.0",	"size" => "25.0 GB",	"validity" => "30 days"],
["data_id" => "295", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "1410.0",	"size" => "3.0 GB",	"validity" => "30 days"],
["data_id" => "294", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "470.0",	"size" => "2.5 GB",	"validity" => "2 days"],
["data_id" => "293", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "940.0",	"size" => "2.0 GB",	"validity" => "7 days"],
["data_id" => "321", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "222000.0",	"size" => "1.0 TB",	"validity" => "90days"],
["data_id" => "284", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "2676.0",	"size" => "12.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "283", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "13800.0",	"size" => "60.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "282", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "11500.0",	"size" => "50.0 GB",	"validity" => "30 days(corporate gifting)"],
["data_id" => "280", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "14100.0",	"size" => "75.0 GB",	"validity" => "30 days"],
["data_id" => "279", "network_name" =>	"MTN",	"plan_type" => "GIFTING",	"amount" => "4700.0",	"size" => "20.0 GB",	"validity" => "30 days"],
["data_id" => "272", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "85.0",	"size" => "250.0 MB",	"validity" => "30 days corporate gifting"],
["data_id" => "271", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "65.0",	"size" => "150.0 MB",	"validity" => "30 days corporate gifting"],
["data_id" => "270", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "35.0",	"size" => "50.0 MB",	"validity" => "30 days corporate gifting"],
["data_id" => "263", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "23000.0",	"size" => "100.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "262", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "16725.0",	"size" => "75.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "261", "network_name" =>	"MTN",	"plan_type" => "CORPORATE GIFTING",	"amount" => "8840.0",	"size" => "40.0 GB",	"validity" => "30 days corporate gifting"],
["data_id" => "260", "network_name" =>	"MTN",	"plan_type" => "SME",	"amount" => "2160.0",	"size" => "10.0 GB",	"validity" => "30 days"]
        ]);
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
};