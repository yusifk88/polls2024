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


        $list = [
            [
                "Code" => "P110101A",
                "Name" => "BUJANPRIMARYSCHOOL",
                "Description" => "BUJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BUJAN"
            ],
            [
                "Code" => "P110101B",
                "Name" => "BUJAN CHALLU PRIMARY",
                "Description" => "BUJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BUJAN"
            ],
            [
                "Code" => "P110102",
                "Name" => "NABUGUBELLE CHALLU PRIM.",
                "Description" => "NABUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "NABUGUBELLE"
            ],
            [
                "Code" => "P110103",
                "Name" => "NABUGUBELLE PIEN PRIM.",
                "Description" => "NABUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "NABUGUBELLE"
            ],
            [
                "Code" => "P110104",
                "Name" => "NANCHALA PIEN PRIM.",
                "Description" => "NANCHALA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "NANCHALA"
            ],
            [
                "Code" => "P110105",
                "Name" => "TAFFIASI KWAPUN PRIMARY",
                "Description" => "TAFFIASI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "TAFFIASI"
            ],
            [
                "Code" => "P110201A",
                "Name" => "CHALLU WURU PRIM",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU"
            ],
            [
                "Code" => "P110201B",
                "Name" => "CHALLU PINA PRIM",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU"
            ],
            [
                "Code" => "P110202A",
                "Name" => "CHALLU BANU PRIM",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU"
            ],
            [
                "Code" => "P110202B",
                "Name" => "CHALLU BASSISAN PRIM",
                "Description" => "CHALLU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHALLU"
            ],
            [
                "Code" => "P110203",
                "Name" => "PIEN KUNCHUGU PRIMARY",
                "Description" => "PIEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "PIEN"
            ],
            [
                "Code" => "P110204",
                "Name" => "PIEN DOLIBIZON PRIMARY",
                "Description" => "PIEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "PIEN"
            ],
            [
                "Code" => "P110301",
                "Name" => "KWAPUN YIGANTU PRIMARY",
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
                "Name" => "BANU JANA PRIMARY",
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
                "Name" => "KUNCHUGU KASSANA PRIM",
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
                "Name" => "TB TB DIDUORIJAN",
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
                "Name" => "KASSANA CHINCHAN PRIM.",
                "Description" => "KASSANA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "KASSANA"
            ],
            [
                "Code" => "P110602",
                "Name" => "TB TB KASSAPOURI",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "KASSAPOURI"
            ],
            [
                "Code" => "P110603",
                "Name" => "TB SAKAI KATINIA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "KATINIA"
            ],
            [
                "Code" => "P110604",
                "Name" => "TB SAKAI NAVROWIE",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "NAVROWIE"
            ],
            [
                "Code" => "P110605",
                "Name" => "TB SAKAI TANLA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "TANLA"
            ],
            [
                "Code" => "P110606",
                "Name" => "TB SAKAI TANVIEL",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "TANVIEL"
            ],
            [
                "Code" => "P110607",
                "Name" => "TB NANKPAWIE NITALU",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "NITALU"
            ],
            [
                "Code" => "P110608",
                "Name" => "CHINCHAN LILIXIA PRIM.",
                "Description" => "CHINCHAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "CHINCHAN"
            ],
            [
                "Code" => "P110609",
                "Name" => "TB TB KUNSOLA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110701A",
                "Name" => "SAKAI KONG PRIMARY",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110701B",
                "Name" => "SAKAI DANGI PRIMARY",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110702A",
                "Name" => "SAKAI TB PRIMARY",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110702B",
                "Name" => "SAKAI KOWIE PRIMARY",
                "Description" => "SAKAI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKAI"
            ],
            [
                "Code" => "P110703",
                "Name" => "NANKPAWIE TB PRIM.",
                "Description" => "NANKPAWIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "NANKPAWIE"
            ],
            [
                "Code" => "P110704",
                "Name" => "LILIXIA HALAMBOI PRIMARY",
                "Description" => "LILIXIA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "LILIXIA"
            ],
            [
                "Code" => "P110705",
                "Name" => "TB SAKALU NAHADAKUI",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "NAHADAKUI"
            ],
            [
                "Code" => "P110801",
                "Name" => "KONG SAKALU PRIMARY",
                "Description" => "KONG",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KONG"
            ],
            [
                "Code" => "P110802",
                "Name" => "DANGI JIJEN PRIMARY",
                "Description" => "DANGI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "DANGI"
            ],
            [
                "Code" => "P110803",
                "Name" => "TB SENTIE BAKUALA",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "BAKUALA"
            ],
            [
                "Code" => "P110804",
                "Name" => "KOWIE BENDEI PRIMARY",
                "Description" => "KOWIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KOWIE"
            ],
            [
                "Code" => "P110805",
                "Name" => "TB TB BALOLO",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "KONG",
                "Community" => "KONG"
            ],
            [
                "Code" => "P110806",
                "Name" => "HALAMBOI WELLEMBELLE MARKET",
                "Description" => "HALAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "CENTRE",
                "Community" => "HALAMBOI"
            ],
            [
                "Code" => "P110901A",
                "Name" => "SAKALU WELLEMBELLE PRIMARY",
                "Description" => "SAKALU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKALU"
            ],
            [
                "Code" => "P110901B",
                "Name" => "SAKALU WELLEMBELLE PRIMARY",
                "Description" => "SAKALU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "SAKALU"
            ],
            [
                "Code" => "P110902",
                "Name" => "JIJEN WELLEMBELLE PRIMARY",
                "Description" => "JIJEN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "JIJEN"
            ],
            [
                "Code" => "P110903",
                "Name" => "SENTIE WELLEMBELLE PRIMARY",
                "Description" => "SENTIE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "SENTIE"
            ],
            [
                "Code" => "P110904",
                "Name" => "BENDEI DAGBASU PRIMARY",
                "Description" => "BENDEI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BENDEI"
            ],
            [
                "Code" => "P110905",
                "Name" => "TB DAGBASU TIMBAKA",
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
                "Name" => "WELLEMBELLE BUGUBELLE PRIM.",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111002",
                "Name" => "WELLEMBELLE BUGUBELLE JHS",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111003A",
                "Name" => "WELLEMBELLE BUGUBELLE JHS",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111003B",
                "Name" => "WELLEMBELLE BUGUBELLE JHS",
                "Description" => "WELLEMBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "",
                "Community" => "WELLEMBELLE"
            ],
            [
                "Code" => "P111004",
                "Name" => "DAGBASU VAMBOI PRIMARY",
                "Description" => "DAGBASU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "DAGBASU"
            ],
            [
                "Code" => "P111005",
                "Name" => "DAGBASU VAMBOI CENTRAL",
                "Description" => "DAGBASU",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Community" => "DAGBASU"
            ],
            [
                "Code" => "P111006",
                "Name" => "TB KULFUO WAHABU",
                "Description" => "TB",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "KULUFUO"
            ],
            [
                "Code" => "P111101A",
                "Name" => "BUGUBELLE KULFUO PRIMARY",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUGUBELLE"
            ],
            [
                "Code" => "P111101B",
                "Name" => "BUGUBELLE TARSOR PRIMARY",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUGUBELLE"
            ],
            [
                "Code" => "P111102A",
                "Name" => "BUGUBELLE TARSOR PRIMARY",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUGUBELLE"
            ],
            [
                "Code" => "P111102B",
                "Name" => "BUGUBELLE MWANDUANU PRIMARY",
                "Description" => "BUGUBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUGUBELLE"
            ],
            [
                "Code" => "P111103A",
                "Name" => "VAMBOI MWANDUANU DAYCARE",
                "Description" => "VAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "VAMBOI"
            ],
            [
                "Code" => "P111103B",
                "Name" => "VAMBOI MWANDUANU DAYCARE",
                "Description" => "VAMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SISSALA",
                "Community" => "VAMBOI"
            ],
            [
                "Code" => "P111201",
                "Name" => "KULFUO KUROBOI PRIMARY",
                "Description" => "KULFUO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "KULFUO"
            ],
            [
                "Code" => "P111202",
                "Name" => "KULFUO BUCHEMBOI HEALTH",
                "Description" => "KULFUO",
                "Constituency" => "SISSALA EAST",
                "District" => "CENTRE",
                "Community" => "KULFUO"
            ],
            [
                "Code" => "P111203A",
                "Name" => "TARSOR TUMU PRIMARY",
                "Description" => "TARSOR",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "TARSOR"
            ],
            [
                "Code" => "P111203B",
                "Name" => "TARSOR TUMU PRIMARY",
                "Description" => "TARSOR",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH.",
                "Community" => "TARSOR"
            ],
            [
                "Code" => "P111301A",
                "Name" => "MWANDUANU TUMU PRIM.",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "MWANDUANU"
            ],
            [
                "Code" => "P111301B",
                "Name" => "MWANDUANU TUMU PRIM.",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "MWANDUANU"
            ],
            [
                "Code" => "P111302",
                "Name" => "MWANDUANU TUMU PRIM.",
                "Description" => "MWANDUANU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "MWANDUANU"
            ],
            [
                "Code" => "P111303",
                "Name" => "KUROBOI TUMU PRIM.",
                "Description" => "KUROBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KUROBOI"
            ],
            [
                "Code" => "P111304",
                "Name" => "BUCHEMBOI TUMU PRIM.",
                "Description" => "BUCHEMBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCH",
                "Community" => "BUCHEMBOI"
            ],
            [
                "Code" => "P111401A",
                "Name" => "TUMU TUMU SEC.",
                "Description" => "TUMU",
                "Constituency" => "SISSALA EAST",
                "District" => "TECH.",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111401B",
                "Name" => "TUMU ASSEMBLY SEC.",
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
                "Name" => "TB CENTRAL CENTRAL",
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
                "Name" => "UNITED NABULO PRIMARY",
                "Description" => "UNITED",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111703",
                "Name" => "FALAHIA FACHOBOI PRIMARY",
                "Description" => "FALAHIA",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "FACHOBOI"
            ],
            [
                "Code" => "P111704",
                "Name" => "BAPTIST NABULO MISSION",
                "Description" => "BAPTIST",
                "Constituency" => "SISSALA EAST",
                "District" => "HOUSE",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P111801A",
                "Name" => "CENTRAL NABULO AHMADIYA",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P111801B",
                "Name" => "CENTRAL BAWIASIBELLE AHMADIYA",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Community" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P111802",
                "Name" => "CENTRAL BAWIASIBELLE AHMADIYA",
                "Description" => "CENTRAL",
                "Constituency" => "SISSALA EAST",
                "District" => "MOSQUE",
                "Community" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P111803",
                "Name" => "NANYUOBELIIN DUU SISSALA",
                "Description" => "NANYUOBELIIN",
                "Constituency" => "SISSALA EAST",
                "District" => "EAST",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P111901",
                "Name" => "NABULO KOMO PRIMARY",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P111902",
                "Name" => "FACHOBOI SANTIJAN PRIMARY",
                "Description" => "FACHOBOI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "FACHOBOI"
            ],
            [
                "Code" => "P111903A",
                "Name" => "NABULO GUOSI TEACHERS",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "QUARTERS",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P111903B",
                "Name" => "NABULO GUOSI TEACHERS",
                "Description" => "NABULO",
                "Constituency" => "SISSALA EAST",
                "District" => "QUARTERS",
                "Community" => "NABULO"
            ],
            [
                "Code" => "P112001A",
                "Name" => "BAWIASIBELLE GBENEWISE PRIMARY",
                "Description" => "BAWIASIBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P112001B",
                "Name" => "BAWIASIBELLE KALAXSI PRIMARY",
                "Description" => "BAWIASIBELLE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "BAWIASIBELLE"
            ],
            [
                "Code" => "P112002",
                "Name" => "DUU TUMU  PRIMARY",
                "Description" => "DUU",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "TUMU"
            ],
            [
                "Code" => "P112003",
                "Name" => "KOMO  PRIMARY",
                "Description" => "KOMO",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KOMOR"
            ],
            [
                "Code" => "P112101",
                "Name" => "SANTIJAN  PRIMARY",
                "Description" => "SANTIJAN",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "SANTIJAN"
            ],
            [
                "Code" => "P112102",
                "Name" => "GUOSI  UPPER",
                "Description" => "GUOSI",
                "Constituency" => "SISSALA EAST",
                "District" => "PRIMARY",
                "Community" => "GUOSI"
            ],
            [
                "Code" => "P112103",
                "Name" => "GUOSI  LOWER",
                "Description" => "GUOSI",
                "Constituency" => "SISSALA EAST",
                "District" => "JHS",
                "Community" => "GUOSI"
            ],
            [
                "Code" => "P112104",
                "Name" => "GBENEWISE  PRIMARY",
                "Description" => "GBENEWISE",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "GBENEWISE"
            ],
            [
                "Code" => "P112105",
                "Name" => "KALAXSI  PRIMARY",
                "Description" => "KALAXSI",
                "Constituency" => "SISSALA EAST",
                "District" => "SCHOOL",
                "Community" => "KALAXSI"
            ],
            [
                "Code" => "P1101SPS",
                "Name" => "TUMU   POLICE STATION",
                "Description" => "TUMU ",
                "Constituency" => "SISSALA EAST",
                "District" => "STATION",
                "Community" => "TUMU"
            ]
        ];


        PollingStation::where("id",">",0)->delete();

        foreach ($list as $item){


            PollingStation::query()->create([
                "Code" => $item["Code"],
                "Name" => $item["Name"],
                "details"=>$item["Description"],
                "community_id"=>Community::query()->where("name",$item["Community"])->first()->id,
                "constituency_id"=>Constituency::query()->where("name",$item["Constituency"])->first()->id,
            ]);

        }


    }
}
