<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\Constituency;
use App\Models\PollingStation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PollingStationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $lookup = [
            [
                "Code" => "P110101A",
                "Name" => "BUJAN PRIMARY SCHOOL",
                "Description" => "BUJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "BUJAN"
            ],
            [
                "Code" => "P110101B",
                "Name" => "BUJAN PRIMARY SCHOOL",
                "Description" => "BUJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "BUJAN"
            ],
            [
                "Code" => "P110102",
                "Name" => "NABUGUBELLE PRIM. SCH",
                "Description" => "NABUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "BUJAN"
            ],
            [
                "Code" => "P110103",
                "Name" => "NABUGUBELLE PRIM. SCH",
                "Description" => "NABUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "BUJAN"
            ],
            [
                "Code" => "P110104",
                "Name" => "NANCHALA PRIM. SCH.",
                "Description" => "NANCHALA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "BUJAN"
            ],
            [
                "Code" => "P110105",
                "Name" => "TAFFIASI PRIMARY SCH.",
                "Description" => "TAFFIASI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "BUJAN"
            ],
            [
                "Code" => "P110201A",
                "Name" => "CHALLU PRIM SCH",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "CHALLU"
            ],
            [
                "Code" => "P110201B",
                "Name" => "CHALLU PRIM SCH",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "CHALLU"
            ],
            [
                "Code" => "P110202A",
                "Name" => "CHALLU PRIM SCH",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "CHALLU"
            ],
            [
                "Code" => "P110202B",
                "Name" => "CHALLU PRIM SCH",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "CHALLU"
            ],
            [
                "Code" => "P110203",
                "Name" => "PIEN PRIMARY SCHOOL",
                "Description" => "PIEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "CHALLU"
            ],
            [
                "Code" => "P110204",
                "Name" => "PIEN PRIMARY SCHOOL",
                "Description" => "PIEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "CHALLU"
            ],
            [
                "Code" => "P110301",
                "Name" => "KWAPUN PRIMARY SCH",
                "Description" => "KWAPUN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "KWAPUN"
            ],
            [
                "Code" => "P110302",
                "Name" => "WURU PRIMARY SCHOOL",
                "Description" => "WURU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "KWAPUN"
            ],
            [
                "Code" => "P110303",
                "Name" => "PINA PRIMARY SCHOOL",
                "Description" => "PINA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "KWAPUN"
            ],
            [
                "Code" => "P110401",
                "Name" => "BANU PRIMARY SCHOOL",
                "Description" => "BANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "KWAPUN"
            ],
            [
                "Code" => "P110402",
                "Name" => "BASSISAN PRIMARY SCH",
                "Description" => "BASSISAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "KWAPUN"
            ],
            [
                "Code" => "P110403",
                "Name" => "KUNCHUGU PRIM SCH",
                "Description" => "KUNCHUGU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "KWAPUN"
            ],
            [
                "Code" => "P110501",
                "Name" => "DOLIBIZON PRIM. SCH",
                "Description" => "DOLIBIZON",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "Dolibzon"
            ],
            [
                "Code" => "P110502",
                "Name" => "YIGANTU PRIMARY SCH",
                "Description" => "YIGANTU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "Dolibzon"
            ],
            [
                "Code" => "P110503",
                "Name" => "SIMBORU PRIMARY SCH",
                "Description" => "SIMBORU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "Dolibzon"
            ],
            [
                "Code" => "P110504",
                "Name" => "TB DIDUORIJAN SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "Dolibzon"
            ],
            [
                "Code" => "P110505",
                "Name" => "JANA PRIMARY SCH",
                "Description" => "JANA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "Dolibzon"
            ],
            [
                "Code" => "P110506",
                "Name" => "DIMAJAN PRIMARY SCHOOL",
                "Description" => "DIMAJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "Dolibzon"
            ],
            [
                "Code" => "P110601",
                "Name" => "KASSANA PRIM. SCH",
                "Description" => "KASSANA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110602",
                "Name" => "TB KASSAPOURI SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110603",
                "Name" => "TB KATINIA SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110604",
                "Name" => "TB NAVROWIE SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110605",
                "Name" => "TB TANLA SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110606",
                "Name" => "TB TANVIEL SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110607",
                "Name" => "TB NITALU SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110608",
                "Name" => "CHINCHAN PRIM. SCH",
                "Description" => "CHINCHAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110609",
                "Name" => "TB KUNSOLA ",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Electoral_area" => "KASANA"
            ],
            [
                "Code" => "P110701A",
                "Name" => "SAKAI PRIMARY SCH.",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "SAKAI"
            ],
            [
                "Code" => "P110701B",
                "Name" => "SAKAI PRIMARY SCH.",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "SAKAI"
            ],
            [
                "Code" => "P110702A",
                "Name" => "SAKAI PRIMARY SCH.",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "SAKAI"
            ],
            [
                "Code" => "P110702B",
                "Name" => "SAKAI PRIMARY SCH.",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "SAKAI"
            ],
            [
                "Code" => "P110703",
                "Name" => "NANKPAWIE PRIM. SCH",
                "Description" => "NANKPAWIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "SAKAI"
            ],
            [
                "Code" => "P110704",
                "Name" => "LILIXIA PRIMARY SCHOOL",
                "Description" => "LILIXIA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "SAKAI"
            ],
            [
                "Code" => "P110705",
                "Name" => "TB NAHADAKUI SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "SAKAI"
            ],
            [
                "Code" => "P110801",
                "Name" => "KONG PRIMARY SCHOOL",
                "Description" => "KONG",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "KONG"
            ],
            [
                "Code" => "P110802",
                "Name" => "DANGI PRIMARY SCHOOL",
                "Description" => "DANGI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "KONG"
            ],
            [
                "Code" => "P110803",
                "Name" => "TB BAKUALA SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "KONG"
            ],
            [
                "Code" => "P110804",
                "Name" => "KOWIE PRIMARY SCHOOL",
                "Description" => "KOWIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "KONG"
            ],
            [
                "Code" => "P110805",
                "Name" => "TB BALOLO KONG",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "KONG",
                "Electoral_area" => "KONG"
            ],
            [
                "Code" => "P110806",
                "Name" => "HALAMBOI MARKET CENTRE",
                "Description" => "HALAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "CENTRE",
                "Electoral_area" => "KONG"
            ],
            [
                "Code" => "P110901A",
                "Name" => "SAKALU PRIMARY SCH.",
                "Description" => "SAKALU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "Kyeiviara-Yalia"
            ],
            [
                "Code" => "P110901B",
                "Name" => "SAKALU PRIMARY SCH.",
                "Description" => "SAKALU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "Kyeiviara-Yalia"
            ],
            [
                "Code" => "P110902",
                "Name" => "JIJEN PRIMARY SCHOOL",
                "Description" => "JIJEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "Kyeiviara-Yalia"
            ],
            [
                "Code" => "P110903",
                "Name" => "SENTIE PRIMARY SCHOOL",
                "Description" => "SENTIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "Kyeiviara-Yalia"
            ],
            [
                "Code" => "P110904",
                "Name" => "BENDEI PRIMARY SCHOOL",
                "Description" => "BENDEI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "Kyeiviara-Yalia"
            ],
            [
                "Code" => "P110905",
                "Name" => "TB TIMBAKA SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "Kyeiviara-Yalia"
            ],
            [
                "Code" => "P111001A",
                "Name" => "WELLEMBELLE PRIM. SCH",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111001B",
                "Name" => "WELLEMBELLE PRIM. SCH",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111002",
                "Name" => "WELLEMBELLE JHS ",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Electoral_area" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111003A",
                "Name" => "WELLEMBELLE JHS ",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Electoral_area" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111003B",
                "Name" => "WELLEMBELLE JHS ",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Electoral_area" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111004",
                "Name" => "DAGBASU PRIMARY SCH",
                "Description" => "DAGBASU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111005",
                "Name" => "DAGBASU CENTRAL MOSQUE",
                "Description" => "DAGBASU",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Electoral_area" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111006",
                "Name" => "TB WAHABU SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111101A",
                "Name" => "BUGUBELLE PRIMARY SCH",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "BUGUBELLE"
            ],
            [
                "Code" => "P111101B",
                "Name" => "BUGUBELLE PRIMARY SCH",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "BUGUBELLE"
            ],
            [
                "Code" => "P111102A",
                "Name" => "BUGUBELLE PRIMARY SCH",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "BUGUBELLE"
            ],
            [
                "Code" => "P111102B",
                "Name" => "BUGUBELLE PRIMARY SCH",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "BUGUBELLE"
            ],
            [
                "Code" => "P111103A",
                "Name" => "VAMBOI DAYCARE SISSALA",
                "Description" => "VAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "BUGUBELLE"
            ],
            [
                "Code" => "P111103B",
                "Name" => "VAMBOI DAYCARE SISSALA",
                "Description" => "VAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "BUGUBELLE"
            ],
            [
                "Code" => "P111201",
                "Name" => "KULFUO PRIMARY SCH.",
                "Description" => "KULFUO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "KULFUO/TARSOR"
            ],
            [
                "Code" => "P111202",
                "Name" => "KULFUO HEALTH CENTRE",
                "Description" => "KULFUO",
                "Constituency" => "SISSALA EAST",
                "District" => "CENTRE",
                "Electoral_area" => "KULFUO/TARSOR"
            ],
            [
                "Code" => "P111203A",
                "Name" => "TARSOR PRIMARY SCH.",
                "Description" => "TARSOR",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "KULFUO/TARSOR"
            ],
            [
                "Code" => "P111203B",
                "Name" => "TARSOR PRIMARY SCH.",
                "Description" => "TARSOR",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Electoral_area" => "KULFUO/TARSOR"
            ],
            [
                "Code" => "P111301A",
                "Name" => "MWANDUANU PRIM. SCH",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "MWANDUANU"
            ],
            [
                "Code" => "P111301B",
                "Name" => "MWANDUANU PRIM. SCH",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "MWANDUANU"
            ],
            [
                "Code" => "P111302",
                "Name" => "MWANDUANU PRIM. SCH",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "MWANDUANU"
            ],
            [
                "Code" => "P111303",
                "Name" => "KUROBOI PRIM. SCHOOL",
                "Description" => "KUROBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "MWANDUANU"
            ],
            [
                "Code" => "P111304",
                "Name" => "BUCHEMBOI PRIM. SCH",
                "Description" => "BUCHEMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Electoral_area" => "MWANDUANU"
            ],
            [
                "Code" => "P111401A",
                "Name" => "TUMU SEC. TECH.",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "TECH.",
                "Electoral_area" => "Kusinjan"
            ],
            [
                "Code" => "P111401B",
                "Name" => "TUMU SEC. TECH.",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "TECH.",
                "Electoral_area" => "Kusinjan"
            ],
            [
                "Code" => "P111402",
                "Name" => "TUMU SEC. TECH.",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "TECH.",
                "Electoral_area" => "Kusinjan"
            ],
            [
                "Code" => "P111403A",
                "Name" => "TUMU COURT HOUSE",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Electoral_area" => "Kusinjan"
            ],
            [
                "Code" => "P111403B",
                "Name" => "TUMU COURT HOUSE",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Electoral_area" => "Kusinjan"
            ],
            [
                "Code" => "P111404",
                "Name" => "TUMU COURT HOUSE",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Electoral_area" => "Kusinjan"
            ],
            [
                "Code" => "P111501",
                "Name" => "TUMU COMMUNITY CENTRE",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "CENTRE",
                "Electoral_area" => "Nyaminjan"
            ],
            [
                "Code" => "P111502",
                "Name" => "TUMU RURAL BANK",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "BANK",
                "Electoral_area" => "Nyaminjan"
            ],
            [
                "Code" => "P111601",
                "Name" => "ASSEMBLY CANTEEN SISSALA",
                "Description" => "ASSEMBLY",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "Stadium"
            ],
            [
                "Code" => "P111602",
                "Name" => "TB CENTRAL BOREHOLE",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "BOREHOLE",
                "Electoral_area" => "Stadium"
            ],
            [
                "Code" => "P111701",
                "Name" => "TB GPRTU SISSALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Electoral_area" => "Zongo extension"
            ],
            [
                "Code" => "P111702",
                "Name" => "UNITED PRIMARY SCHOOL",
                "Description" => "UNITED",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "Zongo extension"
            ],
            [
                "Code" => "P111703",
                "Name" => "FALAHIA PRIMARY SCHOOL",
                "Description" => "FALAHIA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "Zongo extension"
            ],
            [
                "Code" => "P111704",
                "Name" => "BAPTIST MISSION HOUSE",
                "Description" => "BAPTIST",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Electoral_area" => "Nanyua"
            ],
            [
                "Code" => "P111801A",
                "Name" => "CENTRAL AHMADIYA MOSQUE",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Electoral_area" => "Nanyua"
            ],
            [
                "Code" => "P111801B",
                "Name" => "CENTRAL AHMADIYA MOSQUE",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Electoral_area" => "Nanyua"
            ],
            [
                "Code" => "P111802",
                "Name" => "CENTRAL AHMADIYA MOSQUE",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Electoral_area" => "Nanyua"
            ],
            [
                "Code" => "P111803",
                "Name" => "NANYUOBELIIN SISSALA EAST",
                "Description" => "NANYUOBELIIN",
                "Constituency" => "SISSALA EAST",
                "District" => "EAST",
                "Electoral_area" => "Nanyua"
            ],
            [
                "Code" => "P111901",
                "Name" => "NABULO PRIMARY SCHOOL",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "NABULO"
            ],
            [
                "Code" => "P111902",
                "Name" => "FACHOBOI PRIMARY SCHOOL",
                "Description" => "FACHOBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "NABULO"
            ],
            [
                "Code" => "P111903A",
                "Name" => "NABULO TEACHERS QUARTERS",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "QUARTERS",
                "Electoral_area" => "NABULO"
            ],
            [
                "Code" => "P111903B",
                "Name" => "NABULO TEACHERS QUARTERS",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "QUARTERS",
                "Electoral_area" => "NABULO"
            ],
            [
                "Code" => "P112001A",
                "Name" => "BAWIASIBELLE PRIMARY SCHOOL",
                "Description" => "BAWIASIBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P112001B",
                "Name" => "BAWIASIBELLE PRIMARY SCHOOL",
                "Description" => "BAWIASIBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P112002",
                "Name" => "DUU PRIMARY SCHOOL",
                "Description" => "DUU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P112003",
                "Name" => "KOMO PRIMARY SCHOOL",
                "Description" => "KOMO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P112101",
                "Name" => "SANTIJAN PRIMARY SCHOOL",
                "Description" => "SANTIJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "SANTIJAN"
            ],
            [
                "Code" => "P112102",
                "Name" => "GUOSI UPPER PRIMARY",
                "Description" => "GUOSI",
                "Constituency" => "SISSALA EAST",
                "District" => "PRIMARY",
                "Electoral_area" => "SANTIJAN"
            ],
            [
                "Code" => "P112103",
                "Name" => "GUOSI LOWER JHS",
                "Description" => "GUOSI",
                "Constituency" => "SISSALA EAST",
                "District" => "JHS",
                "Electoral_area" => "SANTIJAN"
            ],
            [
                "Code" => "P112104",
                "Name" => "GBENEWISE PRIMARY SCHOOL",
                "Description" => "GBENEWISE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "SANTIJAN"
            ],
            [
                "Code" => "P112105",
                "Name" => "KALAXSI PRIMARY SCHOOL",
                "Description" => "KALAXSI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Electoral_area" => "SANTIJAN"
            ],
            [
                "Code" => "P1101SPS",
                "Name" => "TUMU  POLICE STATION STATION",
                "Description" => "TUMU ",
                "Constituency" => "SISSALA EAST",
                "District" => "STATION",
                "Electoral_area" => "TUMU"
            ]
        ];




        $list = [
            [
                "Code" => "P110101A",
                "Name" => "BUJAN RIMARY SCHOOL",
                "Description" => "BUJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BUJAN"
            ],
            [
                "Code" => "P110101B",
                "Name" => "BUJAN PRIMARY SCHOOL",
                "Description" => "BUJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BUJAN"
            ],
            [
                "Code" => "P110102",
                "Name" => "NABUGUBELLE PRIM.",
                "Description" => "NABUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU/PIEN"
            ],
            [
                "Code" => "P110103",
                "Name" => "NABUGUBELLE PRIM.",
                "Description" => "NABUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU/PIEN"
            ],
            [
                "Code" => "P110104",
                "Name" => "NANCHALA PRIM.",
                "Description" => "NANCHALA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "NANCHALA"
            ],
            [
                "Code" => "P110105",
                "Name" => "TAFFIASI PRIMARY",
                "Description" => "TAFFIASI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "TAFFIASI"
            ],
            [
                "Code" => "P110201A",
                "Name" => "CHALLU PRIM",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU/PIEN"
            ],
            [
                "Code" => "P110201B",
                "Name" => "CHALLU PRIM",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU/PIEN"
            ],
            [
                "Code" => "P110202A",
                "Name" => "CHALLU PRIM",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU/PIEN"
            ],
            [
                "Code" => "P110202B",
                "Name" => "CHALLU PRIM",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU/PIEN"
            ],
            [
                "Code" => "P110203",
                "Name" => "PIEN PRIMARY",
                "Description" => "PIEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "CHALLU/PIEN"
            ],
            [
                "Code" => "P110204",
                "Name" => "PIEN PRIMARY",
                "Description" => "PIEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "CHALLU/PIEN"
            ],
            [
                "Code" => "P110301",
                "Name" => "KWAPUN PRIMARY",
                "Description" => "KWAPUN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "KWAPUN"
            ],
            [
                "Code" => "P110302",
                "Name" => "WURU SIMBORU PRIMARY",
                "Description" => "WURU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "WURU"
            ],
            [
                "Code" => "P110303",
                "Name" => "PINA TB PRIMARY",
                "Description" => "PINA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "PINA"
            ],
            [
                "Code" => "P110401",
                "Name" => "BANU PRIMARY",
                "Description" => "BANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BANU"
            ],
            [
                "Code" => "P110402",
                "Name" => "BASSISAN DIMAJAN PRIMARY",
                "Description" => "BASSISAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BASSISAN"
            ],
            [
                "Code" => "P110403",
                "Name" => "KUNCHUGU PRIM",
                "Description" => "KUNCHUGU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "KUNCHUGU"
            ],
            [
                "Code" => "P110501",
                "Name" => "DOLIBIZON TB PRIM.",
                "Description" => "DOLIBIZON",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "DOLIBIZON"
            ],
            [
                "Code" => "P110502",
                "Name" => "YIGANTU TB PRIMARY",
                "Description" => "YIGANTU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "YIGANTU"
            ],
            [
                "Code" => "P110503",
                "Name" => "SIMBORU TB PRIMARY",
                "Description" => "SIMBORU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "SIMBORU"
            ],
            [
                "Code" => "P110504",
                "Name" => "TB DIDUORIJAN",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "DIDUORIJAN"
            ],
            [
                "Code" => "P110505",
                "Name" => "JANA TB PRIMARY",
                "Description" => "JANA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "JANA"
            ],
            [
                "Code" => "P110506",
                "Name" => "DIMAJAN TB PRIMARY",
                "Description" => "DIMAJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "DIMAJAN"
            ],
            [
                "Code" => "P110601",
                "Name" => "KASSANA PRIM.",
                "Description" => "KASSANA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "KASSANA"
            ],
            [
                "Code" => "P110602",
                "Name" => "TB KASSAPOURI",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "KASSAPOURI"
            ],
            [
                "Code" => "P110603",
                "Name" => "TB KATINIA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "KATINIA"
            ],
            [
                "Code" => "P110604",
                "Name" => "TB NAVROWIE",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "NAVROWIE"
            ],
            [
                "Code" => "P110605",
                "Name" => "TB TANLA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "TANLA"
            ],
            [
                "Code" => "P110606",
                "Name" => "TB TANVIEL",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "TANVIEL"
            ],
            [
                "Code" => "P110607",
                "Name" => "TB NANKPAWIE",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "NITALU"
            ],
            [
                "Code" => "P110608",
                "Name" => "CHINCHAN PRIM.",
                "Description" => "CHINCHAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHINCHAN"
            ],
            [
                "Code" => "P110609",
                "Name" => "TB KUNSOLA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "KUNSOLA"
            ],
            [
                "Code" => "P110701A",
                "Name" => "SAKAI PRIMARY",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110701B",
                "Name" => "SAKAI PRIMARY",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110702A",
                "Name" => "SAKAI PRIMARY",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110702B",
                "Name" => "SAKAI PRIMARY",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110703",
                "Name" => "NANKPAWIE PRIM.",
                "Description" => "NANKPAWIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "NANKPAWIE"
            ],
            [
                "Code" => "P110704",
                "Name" => "LILIXIA PRIMARY",
                "Description" => "LILIXIA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "LILIXIA"
            ],
            [
                "Code" => "P110705",
                "Name" => "TB NAHADAKUI",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "NAHADAKUI"
            ],
            [
                "Code" => "P110801",
                "Name" => "KONG PRIMARY",
                "Description" => "KONG",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KONG"
            ],
            [
                "Code" => "P110802",
                "Name" => "DANGI PRIMARY",
                "Description" => "DANGI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "DANGI"
            ],
            [
                "Code" => "P110803",
                "Name" => "TB BAKUALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "BAKUALA"
            ],
            [
                "Code" => "P110804",
                "Name" => "KOWIE PRIMARY",
                "Description" => "KOWIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KOWIE"
            ],
            [
                "Code" => "P110805",
                "Name" => "TB BALOLO",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "KONG",
                "Community" => "KONG"
            ],
            [
                "Code" => "P110806",
                "Name" => "HALAMBOI MARKET",
                "Description" => "HALAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "CENTRE",
                "Community" => "HALAMBOI"
            ],
            [
                "Code" => "P110901A",
                "Name" => "SAKALU PRIMARY",
                "Description" => "SAKALU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKALU"
            ],
            [
                "Code" => "P110901B",
                "Name" => "SAKALU PRIMARY",
                "Description" => "SAKALU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKALU"
            ],
            [
                "Code" => "P110902",
                "Name" => "JIJEN PRIMARY",
                "Description" => "JIJEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "JIJEN"
            ],
            [
                "Code" => "P110903",
                "Name" => "SENTIE PRIMARY",
                "Description" => "SENTIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "SENTIE"
            ],
            [
                "Code" => "P110904",
                "Name" => "BENDEI PRIMARY",
                "Description" => "BENDEI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BENDEI"
            ],
            [
                "Code" => "P110905",
                "Name" => "TB TIMBAKA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "TIMBAKA"
            ],
            [
                "Code" => "P111001A",
                "Name" => "WELLEMBELLE TB PRIM.",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111001B",
                "Name" => "WELLEMBELLE PRIM.",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111002",
                "Name" => "WELLEMBELLE JHS",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111003A",
                "Name" => "WELLEMBELLE JHS",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111003B",
                "Name" => "WELLEMBELLE JHS",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111004",
                "Name" => "DAGBASU PRIMARY",
                "Description" => "DAGBASU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "DAGBASU"
            ],
            [
                "Code" => "P111005",
                "Name" => "DAGBASU CENTRAL",
                "Description" => "DAGBASU",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Community" => "DAGBASU"
            ],
            [
                "Code" => "P111006",
                "Name" => "TB KULFUO",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "KULUFUO"
            ],
            [
                "Code" => "P111101A",
                "Name" => "BUGUBELLE PRIMARY",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUGUBELLE"
            ],
            [
                "Code" => "P111101B",
                "Name" => "BUGUBELLE PRIMARY",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUGUBELLE"
            ],
            [
                "Code" => "P111102A",
                "Name" => "BUGUBELLE PRIMARY",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUGUBELLE"
            ],
            [
                "Code" => "P111102B",
                "Name" => "BUGUBELLE PRIMARY",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUGUBELLE"
            ],
            [
                "Code" => "P111103A",
                "Name" => "VAMBOI DAYCARE",
                "Description" => "VAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "VAMBOI"
            ],
            [
                "Code" => "P111103B",
                "Name" => "VAMBOI DAYCARE",
                "Description" => "VAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "VAMBOI"
            ],
            [
                "Code" => "P111201",
                "Name" => "KULFUO PRIMARY",
                "Description" => "KULFUO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "KULFUO/TARSOR"
            ],
            [
                "Code" => "P111202",
                "Name" => "KULFUO HEALTH",
                "Description" => "KULFUO",
                "Constituency" => "SISSALA EAST",
                "District" => "CENTRE",
                "Community" => "KULFUO/TARSOR"
            ],
            [
                "Code" => "P111203A",
                "Name" => "TARSOR PRIMARY",
                "Description" => "TARSOR",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "KULFUO/TARSOR"
            ],
            [
                "Code" => "P111203B",
                "Name" => "TARSOR PRIMARY",
                "Description" => "TARSOR",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "KULFUO/TARSOR"
            ],
            [
                "Code" => "P111301A",
                "Name" => "MWANDUANU PRIM.",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "MWANDUANU"
            ],
            [
                "Code" => "P111301B",
                "Name" => "MWANDUANU PRIM.",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "MWANDUANU"
            ],
            [
                "Code" => "P111302",
                "Name" => "MWANDUANU PRIM.",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "MWANDUANU"
            ],
            [
                "Code" => "P111303",
                "Name" => "KUROBOI PRIM.",
                "Description" => "KUROBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KUROBOI"
            ],
            [
                "Code" => "P111304",
                "Name" => "BUCHEMBOI PRIM.",
                "Description" => "BUCHEMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUCHEMBOI"
            ],
            [
                "Code" => "P111401A",
                "Name" => "TUMU SEC.",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "TECH.",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111401B",
                "Name" => "TUMU SEC.",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "TECH.",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111402",
                "Name" => "TUMU TB SEC.",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "TECH.",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111403A",
                "Name" => "TUMU TB COURT",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111403B",
                "Name" => "TUMU UNITED COURT",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111404",
                "Name" => "TUMU FALAHIA COURT",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111501",
                "Name" => "TUMU BAPTIST COMMUNITY",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "CENTRE",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111502",
                "Name" => "TUMU CENTRAL RURAL",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "BANK",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111601",
                "Name" => "ASSEMBLY CENTRAL CANTEEN",
                "Description" => "ASSEMBLY",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111602",
                "Name" => "TB CENTRAL",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "BOREHOLE",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111701",
                "Name" => "TB NANYUOBELIIN GPRTU",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111702",
                "Name" => "UNITED PRIMARY",
                "Description" => "UNITED",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111703",
                "Name" => "FALAHIA PRIMARY",
                "Description" => "FALAHIA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111704",
                "Name" => "BAPTIST MISSION HOUSE",
                "Description" => "BAPTIST",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P111801A",
                "Name" => "NABULO AHMADIYA",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P111801B",
                "Name" => "BAWIASIBELLE AHMADIYA",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Community" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P111802",
                "Name" => "BAWIASIBELLE AHMADIYA",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Community" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P111803",
                "Name" => "NANYUOBELIIN",
                "Description" => "NANYUOBELIIN",
                "Constituency" => "SISSALA EAST",
                "District" => "EAST",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111901",
                "Name" => "NABULO PRIMARY",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P111902",
                "Name" => "FACHOBOI PRIMARY",
                "Description" => "FACHOBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "FACHOBOI"
            ],
            [
                "Code" => "P111903A",
                "Name" => "NABULO TEACHERS QUARTERS",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "QUARTERS",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P111903B",
                "Name" => "NABULO TEACHERS QUARTERS",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "QUARTERS",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P112001A",
                "Name" => "BAWIASIBELLE PRIMARY",
                "Description" => "BAWIASIBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P112001B",
                "Name" => "BAWIASIBELLE PRIMARY",
                "Description" => "BAWIASIBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P112002",
                "Name" => "TUMU  PRIMARY",
                "Description" => "DUU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P112003",
                "Name" => "KOMO PRIMARY",
                "Description" => "KOMO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KOMOR"
            ],
            [
                "Code" => "P112101",
                "Name" => "SANTIJAN PRIMARY",
                "Description" => "SANTIJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "SANTIJAN"
            ],
            [
                "Code" => "P112102",
                "Name" => "GUOSI UPPER PRIMARY",
                "Description" => "GUOSI",
                "Constituency" => "SISSALA EAST",
                "District" => "PRIMARY",
                "Community" => "GUOSI"
            ],
            [
                "Code" => "P112103",
                "Name" => "GUOSI LOWER PRIMARY",
                "Description" => "GUOSI",
                "Constituency" => "SISSALA EAST",
                "District" => "JHS",
                "Community" => "GUOSI"
            ],
            [
                "Code" => "P112104",
                "Name" => "GBENEWISE PRIMARY",
                "Description" => "GBENEWISE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "GBENEWISE"
            ],
            [
                "Code" => "P112105",
                "Name" => "KALAXSI PRIMARY",
                "Description" => "KALAXSI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KALAXSI"
            ],
            [
                "Code" => "P1101SPS",
                "Name" => "TUMU POLICE STATION",
                "Description" => "TUMU ",
                "Constituency" => "SISSALA EAST",
                "District" => "STATION",
                "Community" => "TUMU"
            ]
        ];


        $lookupCollection = collect($lookup);

        foreach ($list as $polling) {

            $electoralArea = $lookupCollection->where("Code", $polling["Code"])->first()['Electoral_area'];

            PollingStation::query()->create([
                "Code" => $polling["Code"],
                "name" => $polling["Name"],
                "community_id"=>Community::query()->where("name",$electoralArea)->first()->id,
                "constituency_id"=>Constituency::query()->where("name",$polling["Constituency"])->first()->id,
            ]);

        }


    }
}
