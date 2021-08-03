<?php

$fiirst="knknn";
$num=3;
echo $combiner=$num.$fiirst;

$conn = mysqli_connect("localhost", "root", "", "measure");
if (isset($_POST["import"])) {

     $delete="DELETE FROM `frommeasure`";
              mysqli_query($conn,$delete);

    $fileName = $_FILES["file"]["tmp_name"];

    if ($_FILES["file"]["size"] > 0) {
        $file = fopen($fileName, "r");

        $counter = 1;
        fgetcsv($file, 10000, ",");
        $counter = 0;

        while (($column = fgetcsv($file, 10000, ",")) !== FALSE) {
            $counter += 1;

            if (isset($column[1])) {
                $col1 = mysqli_real_escape_string($conn, $column[1]);
            }
            if (isset($column[2])) {
                $col2 = mysqli_real_escape_string($conn, $column[2]);
            }
            if (isset($column[3])) {
                $col3 = mysqli_real_escape_string($conn, $column[3]);
            }
            if (isset($column[4])) {
                $col4 = mysqli_real_escape_string($conn, $column[4]);
            }
            if (isset($column[5])) {
                $col5 = mysqli_real_escape_string($conn, $column[5]);
            }
            if (isset($column[6])) {
                $col6 = mysqli_real_escape_string($conn, $column[6]);
            }
            if (isset($column[7])) {
                $col7 = mysqli_real_escape_string($conn, $column[7]);
            }
            if (isset($column[8])) {
                $col8 = mysqli_real_escape_string($conn, $column[8]);
            }
            if(isset($column[9])){
                 $col9 = mysqli_real_escape_string($conn, $column[9]);
                }
if(isset($column[10])){
     $col10 = mysqli_real_escape_string($conn, $column[10]);}
if(isset($column[11])){
     $col11 = mysqli_real_escape_string($conn, $column[11]);}
if(isset($column[12])){
     $col12 = mysqli_real_escape_string($conn, $column[12]);}
if(isset($column[13])){
     $col13 = mysqli_real_escape_string($conn, $column[13]);}
if(isset($column[14])){
     $col14 = mysqli_real_escape_string($conn, $column[14]);}
if(isset($column[15])){
     $col15 = mysqli_real_escape_string($conn, $column[15]);}
if(isset($column[16])){
     $col16 = mysqli_real_escape_string($conn, $column[16]);}
if(isset($column[17])){
     $col17 = mysqli_real_escape_string($conn, $column[17]);}
if(isset($column[18])){
     $col18 = mysqli_real_escape_string($conn, $column[18]);}
if(isset($column[19])){
     $col19 = mysqli_real_escape_string($conn, $column[19]);}
if(isset($column[20])){
     $col20 = mysqli_real_escape_string($conn, $column[20]);}
if(isset($column[21])){
     $col21 = mysqli_real_escape_string($conn, $column[21]);}
if(isset($column[22])){
     $col22 = mysqli_real_escape_string($conn, $column[22]);}
if(isset($column[23])){
     $col23 = mysqli_real_escape_string($conn, $column[23]);}
if(isset($column[24])){
     $col24 = mysqli_real_escape_string($conn, $column[24]);}
if(isset($column[25])){
     $col25 = mysqli_real_escape_string($conn, $column[25]);}
if(isset($column[26])){
     $col26 = mysqli_real_escape_string($conn, $column[26]);}
if(isset($column[27])){
     $col27 = mysqli_real_escape_string($conn, $column[27]);}
if(isset($column[28])){
     $col28 = mysqli_real_escape_string($conn, $column[28]);}
if(isset($column[29])){
     $col29 = mysqli_real_escape_string($conn, $column[29]);}
if(isset($column[30])){
     $col30 = mysqli_real_escape_string($conn, $column[30]);}
if(isset($column[31])){
     $col31 = mysqli_real_escape_string($conn, $column[31]);}
if(isset($column[32])){
     $col32 = mysqli_real_escape_string($conn, $column[32]);}
if(isset($column[33])){
     $col33 = mysqli_real_escape_string($conn, $column[33]);}
if(isset($column[34])){
     $col34 = mysqli_real_escape_string($conn, $column[34]);}
if(isset($column[35])){
     $col35 = mysqli_real_escape_string($conn, $column[35]);}
if(isset($column[36])){
     $col36 = mysqli_real_escape_string($conn, $column[36]);}
if(isset($column[37])){
     $col37 = mysqli_real_escape_string($conn, $column[37]);}
if(isset($column[38])){
     $col38 = mysqli_real_escape_string($conn, $column[38]);}
if(isset($column[39])){
     $col39 = mysqli_real_escape_string($conn, $column[39]);}
if(isset($column[40])){
     $col40 = mysqli_real_escape_string($conn, $column[40]);}
if(isset($column[41])){
     $col41 = mysqli_real_escape_string($conn, $column[41]);}
if(isset($column[42])){
     $col42 = mysqli_real_escape_string($conn, $column[42]);}
if(isset($column[43])){
     $col43 = mysqli_real_escape_string($conn, $column[43]);}
if(isset($column[44])){
     $col44 = mysqli_real_escape_string($conn, $column[44]);}
if(isset($column[45])){
     $col45 = mysqli_real_escape_string($conn, $column[45]);}
if(isset($column[46])){
     $col46 = mysqli_real_escape_string($conn, $column[46]);}
if(isset($column[47])){
     $col47 = mysqli_real_escape_string($conn, $column[47]);}
if(isset($column[48])){
     $col48 = mysqli_real_escape_string($conn, $column[48]);}
if(isset($column[49])){
     $col49 = mysqli_real_escape_string($conn, $column[49]);}
if(isset($column[50])){
     $col50 = mysqli_real_escape_string($conn, $column[50]);}
if(isset($column[51])){
     $col51 = mysqli_real_escape_string($conn, $column[51]);}
if(isset($column[52])){
     $col52 = mysqli_real_escape_string($conn, $column[52]);}
if(isset($column[53])){
     $col53 = mysqli_real_escape_string($conn, $column[53]);}
if(isset($column[54])){
     $col54 = mysqli_real_escape_string($conn, $column[54]);}
if(isset($column[55])){
     $col55 = mysqli_real_escape_string($conn, $column[55]);}
if(isset($column[56])){
     $col56 = mysqli_real_escape_string($conn, $column[56]);}
if(isset($column[57])){
     $col57 = mysqli_real_escape_string($conn, $column[57]);}
if(isset($column[58])){
     $col58 = mysqli_real_escape_string($conn, $column[58]);}
if(isset($column[59])){
     $col59 = mysqli_real_escape_string($conn, $column[59]);}
if(isset($column[60])){
     $col60 = mysqli_real_escape_string($conn, $column[60]);}
if(isset($column[61])){
     $col61 = mysqli_real_escape_string($conn, $column[61]);}
if(isset($column[62])){
     $col62 = mysqli_real_escape_string($conn, $column[62]);}
if(isset($column[63])){
     $col63 = mysqli_real_escape_string($conn, $column[63]);}
if(isset($column[64])){
     $col64 = mysqli_real_escape_string($conn, $column[64]);}
if(isset($column[65])){
     $col65 = mysqli_real_escape_string($conn, $column[65]);}
if(isset($column[66])){
     $col66 = mysqli_real_escape_string($conn, $column[66]);}
if(isset($column[67])){
     $col67 = mysqli_real_escape_string($conn, $column[67]);}
if(isset($column[68])){
     $col68 = mysqli_real_escape_string($conn, $column[68]);}
if(isset($column[69])){
     $col69 = mysqli_real_escape_string($conn, $column[69]);}
if(isset($column[70])){
     $col70 = mysqli_real_escape_string($conn, $column[70]);}
if(isset($column[71])){
     $col71 = mysqli_real_escape_string($conn, $column[71]);}
if(isset($column[72])){
     $col72 = mysqli_real_escape_string($conn, $column[72]);}
if(isset($column[73])){
     $col73 = mysqli_real_escape_string($conn, $column[73]);}
if(isset($column[74])){
     $col74 = mysqli_real_escape_string($conn, $column[74]);}
if(isset($column[75])){
     $col75 = mysqli_real_escape_string($conn, $column[75]);}
if(isset($column[76])){
     $col76 = mysqli_real_escape_string($conn, $column[76]);}
if(isset($column[77])){
     $col77 = mysqli_real_escape_string($conn, $column[77]);}
if(isset($column[78])){
     $col78 = mysqli_real_escape_string($conn, $column[78]);}
if(isset($column[79])){
     $col79 = mysqli_real_escape_string($conn, $column[79]);}
if(isset($column[80])){
     $col80 = mysqli_real_escape_string($conn, $column[80]);}
if(isset($column[81])){
     $col81 = mysqli_real_escape_string($conn, $column[81]);}
if(isset($column[82])){
     $col82 = mysqli_real_escape_string($conn, $column[82]);}
if(isset($column[83])){
     $col83 = mysqli_real_escape_string($conn, $column[83]);}
if(isset($column[84])){
     $col84 = mysqli_real_escape_string($conn, $column[84]);}
if(isset($column[85])){
     $col85 = mysqli_real_escape_string($conn, $column[85]);}
if(isset($column[86])){
     $col86 = mysqli_real_escape_string($conn, $column[86]);}
if(isset($column[87])){
     $col87 = mysqli_real_escape_string($conn, $column[87]);}
if(isset($column[88])){
     $col88 = mysqli_real_escape_string($conn, $column[88]);}
if(isset($column[89])){
     $col89 = mysqli_real_escape_string($conn, $column[89]);}
if(isset($column[90])){
     $col90 = mysqli_real_escape_string($conn, $column[90]);}
if(isset($column[91])){
     $col91 = mysqli_real_escape_string($conn, $column[91]);}
if(isset($column[92])){
     $col92 = mysqli_real_escape_string($conn, $column[92]);}
if(isset($column[93])){
     $col93 = mysqli_real_escape_string($conn, $column[93]);}
if(isset($column[94])){
     $col94 = mysqli_real_escape_string($conn, $column[94]);}
if(isset($column[95])){
     $col95 = mysqli_real_escape_string($conn, $column[95]);}
if(isset($column[96])){
     $col96 = mysqli_real_escape_string($conn, $column[96]);}
if(isset($column[97])){
     $col97 = mysqli_real_escape_string($conn, $column[97]);}
if(isset($column[98])){
     $col98 = mysqli_real_escape_string($conn, $column[98]);}
if(isset($column[99])){
     $col99 = mysqli_real_escape_string($conn, $column[99]);}
if(isset($column[100])){
     $col100 = mysqli_real_escape_string($conn, $column[100]);}
if(isset($column[101])){
     $col101 = mysqli_real_escape_string($conn, $column[101]);}
if(isset($column[102])){
     $col102 = mysqli_real_escape_string($conn, $column[102]);}
if(isset($column[103])){
     $col103 = mysqli_real_escape_string($conn, $column[103]);}
if(isset($column[104])){
     $col104 = mysqli_real_escape_string($conn, $column[104]);}
if(isset($column[105])){
     $col105 = mysqli_real_escape_string($conn, $column[105]);}
if(isset($column[106])){
     $col106 = mysqli_real_escape_string($conn, $column[106]);}
if(isset($column[107])){
     $col107 = mysqli_real_escape_string($conn, $column[107]);}
if(isset($column[108])){
     $col108 = mysqli_real_escape_string($conn, $column[108]);}
if(isset($column[109])){
     $col109 = mysqli_real_escape_string($conn, $column[109]);}
if(isset($column[110])){
     $col110 = mysqli_real_escape_string($conn, $column[110]);}
if(isset($column[111])){
     $col111 = mysqli_real_escape_string($conn, $column[111]);}
if(isset($column[112])){
     $col112 = mysqli_real_escape_string($conn, $column[112]);}
if(isset($column[113])){
     $col113 = mysqli_real_escape_string($conn, $column[113]);}
if(isset($column[114])){
     $col114 = mysqli_real_escape_string($conn, $column[114]);}
if(isset($column[115])){
     $col115 = mysqli_real_escape_string($conn, $column[115]);}
if(isset($column[116])){
     $col116 = mysqli_real_escape_string($conn, $column[116]);}
if(isset($column[117])){
     $col117 = mysqli_real_escape_string($conn, $column[117]);}
if(isset($column[118])){
     $col118 = mysqli_real_escape_string($conn, $column[118]);}
if(isset($column[119])){
     $col119 = mysqli_real_escape_string($conn, $column[119]);}
if(isset($column[120])){
     $col120 = mysqli_real_escape_string($conn, $column[120]);}
if(isset($column[121])){
     $col121 = mysqli_real_escape_string($conn, $column[121]);}
if(isset($column[122])){
     $col122 = mysqli_real_escape_string($conn, $column[122]);}
if(isset($column[123])){
     $col123 = mysqli_real_escape_string($conn, $column[123]);}
if(isset($column[124])){
     $col124 = mysqli_real_escape_string($conn, $column[124]);}
if(isset($column[125])){
     $col125 = mysqli_real_escape_string($conn, $column[125]);}
if(isset($column[126])){
     $col126 = mysqli_real_escape_string($conn, $column[126]);}
if(isset($column[127])){
     $col127 = mysqli_real_escape_string($conn, $column[127]);}
if(isset($column[128])){
     $col128 = mysqli_real_escape_string($conn, $column[128]);}
if(isset($column[129])){
     $col129 = mysqli_real_escape_string($conn, $column[129]);}
if(isset($column[130])){
     $col130 = mysqli_real_escape_string($conn, $column[130]);}
if(isset($column[131])){
     $col131 = mysqli_real_escape_string($conn, $column[131]);}
if(isset($column[132])){
     $col132 = mysqli_real_escape_string($conn, $column[132]);}
if(isset($column[133])){
     $col133 = mysqli_real_escape_string($conn, $column[133]);}
if(isset($column[134])){
     $col134 = mysqli_real_escape_string($conn, $column[134]);}
if(isset($column[135])){
     $col135 = mysqli_real_escape_string($conn, $column[135]);}
if(isset($column[136])){
     $col136 = mysqli_real_escape_string($conn, $column[136]);}
if(isset($column[137])){
     $col137 = mysqli_real_escape_string($conn, $column[137]);}
if(isset($column[138])){
     $col138 = mysqli_real_escape_string($conn, $column[138]);}
if(isset($column[139])){
     $col139 = mysqli_real_escape_string($conn, $column[139]);}
if(isset($column[140])){
     $col140 = mysqli_real_escape_string($conn, $column[140]);}
if(isset($column[141])){
     $col141 = mysqli_real_escape_string($conn, $column[141]);}
if(isset($column[142])){
     $col142 = mysqli_real_escape_string($conn, $column[142]);}
if(isset($column[143])){
     $col143 = mysqli_real_escape_string($conn, $column[143]);}
if(isset($column[144])){
     $col144 = mysqli_real_escape_string($conn, $column[144]);}
if(isset($column[145])){
     $col145 = mysqli_real_escape_string($conn, $column[145]);}
if(isset($column[146])){
     $col146 = mysqli_real_escape_string($conn, $column[146]);}
if(isset($column[147])){
     $col147 = mysqli_real_escape_string($conn, $column[147]);}
if(isset($column[148])){
     $col148 = mysqli_real_escape_string($conn, $column[148]);}
if(isset($column[149])){
     $col149 = mysqli_real_escape_string($conn, $column[149]);}
if(isset($column[150])){
     $col150 = mysqli_real_escape_string($conn, $column[150]);}
if(isset($column[151])){
     $col151 = mysqli_real_escape_string($conn, $column[151]);}
if(isset($column[152])){
     $col152 = mysqli_real_escape_string($conn, $column[152]);}
if(isset($column[153])){
     $col153 = mysqli_real_escape_string($conn, $column[153]);}
if(isset($column[154])){
     $col154 = mysqli_real_escape_string($conn, $column[154]);}
if(isset($column[155])){
     $col155 = mysqli_real_escape_string($conn, $column[155]);}
if(isset($column[156])){
     $col156 = mysqli_real_escape_string($conn, $column[156]);}
if(isset($column[157])){
     $col157 = mysqli_real_escape_string($conn, $column[157]);}
if(isset($column[158])){
     $col158 = mysqli_real_escape_string($conn, $column[158]);}
if(isset($column[159])){
     $col159 = mysqli_real_escape_string($conn, $column[159]);}
if(isset($column[160])){
     $col160 = mysqli_real_escape_string($conn, $column[160]);}
if(isset($column[161])){
     $col161 = mysqli_real_escape_string($conn, $column[161]);}
if(isset($column[162])){
     $col162 = mysqli_real_escape_string($conn, $column[162]);}
if(isset($column[163])){
     $col163 = mysqli_real_escape_string($conn, $column[163]);}
if(isset($column[164])){
     $col164 = mysqli_real_escape_string($conn, $column[164]);}
if(isset($column[165])){
     $col165 = mysqli_real_escape_string($conn, $column[165]);}
if(isset($column[166])){
     $col166 = mysqli_real_escape_string($conn, $column[166]);}
if(isset($column[167])){
     $col167 = mysqli_real_escape_string($conn, $column[167]);}
if(isset($column[168])){
     $col168 = mysqli_real_escape_string($conn, $column[168]);}
if(isset($column[169])){
     $col169 = mysqli_real_escape_string($conn, $column[169]);}
if(isset($column[170])){
     $col170 = mysqli_real_escape_string($conn, $column[170]);}
if(isset($column[171])){
     $col171 = mysqli_real_escape_string($conn, $column[171]);}
if(isset($column[172])){
     $col172 = mysqli_real_escape_string($conn, $column[172]);}
if(isset($column[173])){
     $col173 = mysqli_real_escape_string($conn, $column[173]);}
if(isset($column[174])){
     $col174 = mysqli_real_escape_string($conn, $column[174]);}
if(isset($column[175])){
     $col175 = mysqli_real_escape_string($conn, $column[175]);}
if(isset($column[176])){
     $col176 = mysqli_real_escape_string($conn, $column[176]);}
if(isset($column[177])){
     $col177 = mysqli_real_escape_string($conn, $column[177]);}
if(isset($column[178])){
     $col178 = mysqli_real_escape_string($conn, $column[178]);}
if(isset($column[179])){
     $col179 = mysqli_real_escape_string($conn, $column[179]);}
if(isset($column[180])){
     $col180 = mysqli_real_escape_string($conn, $column[180]);}
if(isset($column[181])){
     $col181 = mysqli_real_escape_string($conn, $column[181]);}
if(isset($column[182])){
     $col182 = mysqli_real_escape_string($conn, $column[182]);}
if(isset($column[183])){
     $col183 = mysqli_real_escape_string($conn, $column[183]);}
if(isset($column[184])){
     $col184 = mysqli_real_escape_string($conn, $column[184]);}
if(isset($column[185])){
     $col185 = mysqli_real_escape_string($conn, $column[185]);}
if(isset($column[186])){
     $col186 = mysqli_real_escape_string($conn, $column[186]);}
if(isset($column[187])){
     $col187 = mysqli_real_escape_string($conn, $column[187]);}
if(isset($column[188])){
     $col188 = mysqli_real_escape_string($conn, $column[188]);}
if(isset($column[189])){
     $col189 = mysqli_real_escape_string($conn, $column[189]);}
if(isset($column[190])){
     $col190 = mysqli_real_escape_string($conn, $column[190]);}
if(isset($column[191])){
     $col191 = mysqli_real_escape_string($conn, $column[191]);}
if(isset($column[192])){
     $col192 = mysqli_real_escape_string($conn, $column[192]);}
if(isset($column[193])){
     $col193 = mysqli_real_escape_string($conn, $column[193]);}
if(isset($column[194])){
     $col194 = mysqli_real_escape_string($conn, $column[194]);}
if(isset($column[195])){
     $col195 = mysqli_real_escape_string($conn, $column[195]);}
if(isset($column[196])){
     $col196 = mysqli_real_escape_string($conn, $column[196]);}
if(isset($column[197])){
     $col197 = mysqli_real_escape_string($conn, $column[197]);}
if(isset($column[198])){
     $col198 = mysqli_real_escape_string($conn, $column[198]);}
if(isset($column[199])){
     $col199 = mysqli_real_escape_string($conn, $column[199]);}
if(isset($column[200])){
     $col200 = mysqli_real_escape_string($conn, $column[200]);}
if(isset($column[201])){
     $col201 = mysqli_real_escape_string($conn, $column[201]);}
if(isset($column[202])){
     $col202 = mysqli_real_escape_string($conn, $column[202]);}
if(isset($column[203])){
     $col203 = mysqli_real_escape_string($conn, $column[203]);}
if(isset($column[204])){
     $col204 = mysqli_real_escape_string($conn, $column[204]);}
if(isset($column[205])){
     $col205 = mysqli_real_escape_string($conn, $column[205]);}
if(isset($column[206])){
     $col206 = mysqli_real_escape_string($conn, $column[206]);}
if(isset($column[207])){
     $col207 = mysqli_real_escape_string($conn, $column[207]);}
if(isset($column[208])){
     $col208 = mysqli_real_escape_string($conn, $column[208]);}
if(isset($column[209])){
     $col209 = mysqli_real_escape_string($conn, $column[209]);}
if(isset($column[210])){
     $col210 = mysqli_real_escape_string($conn, $column[210]);}
if(isset($column[211])){
     $col211 = mysqli_real_escape_string($conn, $column[211]);}
if(isset($column[212])){
     $col212 = mysqli_real_escape_string($conn, $column[212]);}
if(isset($column[213])){
     $col213 = mysqli_real_escape_string($conn, $column[213]);}
if(isset($column[214])){
     $col214 = mysqli_real_escape_string($conn, $column[214]);}
if(isset($column[215])){
     $col215 = mysqli_real_escape_string($conn, $column[215]);}
if(isset($column[216])){
     $col216 = mysqli_real_escape_string($conn, $column[216]);}
if(isset($column[217])){
     $col217 = mysqli_real_escape_string($conn, $column[217]);}
if(isset($column[218])){
     $col218 = mysqli_real_escape_string($conn, $column[218]);}
if(isset($column[219])){
     $col219 = mysqli_real_escape_string($conn, $column[219]);}
if(isset($column[220])){
     $col220 = mysqli_real_escape_string($conn, $column[220]);}
if(isset($column[221])){
     $col221 = mysqli_real_escape_string($conn, $column[221]);}
if(isset($column[222])){
     $col222 = mysqli_real_escape_string($conn, $column[222]);}
if(isset($column[223])){
     $col223 = mysqli_real_escape_string($conn, $column[223]);}
if(isset($column[224])){
     $col224 = mysqli_real_escape_string($conn, $column[224]);}
if(isset($column[225])){
     $col225 = mysqli_real_escape_string($conn, $column[225]);}
if(isset($column[226])){
     $col226 = mysqli_real_escape_string($conn, $column[226]);}
if(isset($column[227])){
     $col227 = mysqli_real_escape_string($conn, $column[227]);}
if(isset($column[228])){
     $col228 = mysqli_real_escape_string($conn, $column[228]);}
if(isset($column[229])){
     $col229 = mysqli_real_escape_string($conn, $column[229]);}
if(isset($column[230])){
     $col230 = mysqli_real_escape_string($conn, $column[230]);}
if(isset($column[231])){
     $col231 = mysqli_real_escape_string($conn, $column[231]);}
if(isset($column[232])){
     $col232 = mysqli_real_escape_string($conn, $column[232]);}
if(isset($column[233])){
     $col233 = mysqli_real_escape_string($conn, $column[233]);}
if(isset($column[234])){
     $col234 = mysqli_real_escape_string($conn, $column[234]);}
if(isset($column[235])){
     $col235 = mysqli_real_escape_string($conn, $column[235]);}
if(isset($column[236])){
     $col236 = mysqli_real_escape_string($conn, $column[236]);}
if(isset($column[237])){
     $col237 = mysqli_real_escape_string($conn, $column[237]);}
if(isset($column[238])){
     $col238 = mysqli_real_escape_string($conn, $column[238]);}
if(isset($column[239])){
     $col239 = mysqli_real_escape_string($conn, $column[239]);}
if(isset($column[240])){
     $col240 = mysqli_real_escape_string($conn, $column[240]);}
if(isset($column[241])){
     $col241 = mysqli_real_escape_string($conn, $column[241]);}
if(isset($column[242])){
     $col242 = mysqli_real_escape_string($conn, $column[242]);}
if(isset($column[243])){
     $col243 = mysqli_real_escape_string($conn, $column[243]);}
if(isset($column[244])){
     $col244 = mysqli_real_escape_string($conn, $column[244]);}
if(isset($column[245])){
     $col245 = mysqli_real_escape_string($conn, $column[245]);}
if(isset($column[246])){
     $col246 = mysqli_real_escape_string($conn, $column[246]);}
if(isset($column[247])){
     $col247 = mysqli_real_escape_string($conn, $column[247]);}
if(isset($column[248])){
     $col248 = mysqli_real_escape_string($conn, $column[248]);}
if(isset($column[249])){
     $col249 = mysqli_real_escape_string($conn, $column[249]);}
if(isset($column[250])){
     $col250 = mysqli_real_escape_string($conn, $column[250]);}
if(isset($column[251])){
     $col251 = mysqli_real_escape_string($conn, $column[251]);}
if(isset($column[252])){
     $col252 = mysqli_real_escape_string($conn, $column[252]);}
if(isset($column[253])){
     $col253 = mysqli_real_escape_string($conn, $column[253]);}
if(isset($column[254])){
     $col254 = mysqli_real_escape_string($conn, $column[254]);}
if(isset($column[255])){
     $col255 = mysqli_real_escape_string($conn, $column[255]);}
if(isset($column[256])){
     $col256 = mysqli_real_escape_string($conn, $column[256]);}
if(isset($column[257])){
     $col257 = mysqli_real_escape_string($conn, $column[257]);}
if(isset($column[258])){
     $col258 = mysqli_real_escape_string($conn, $column[258]);}
if(isset($column[259])){
     $col259 = mysqli_real_escape_string($conn, $column[259]);}
if(isset($column[260])){
     $col260 = mysqli_real_escape_string($conn, $column[260]);}
if(isset($column[261])){
     $col261 = mysqli_real_escape_string($conn, $column[261]);}
if(isset($column[262])){
     $col262 = mysqli_real_escape_string($conn, $column[262]);}
if(isset($column[263])){
     $col263 = mysqli_real_escape_string($conn, $column[263]);}
if(isset($column[264])){
     $col264 = mysqli_real_escape_string($conn, $column[264]);}
if(isset($column[265])){
     $col265 = mysqli_real_escape_string($conn, $column[265]);}
if(isset($column[266])){
     $col266 = mysqli_real_escape_string($conn, $column[266]);}
if(isset($column[267])){
     $col267 = mysqli_real_escape_string($conn, $column[267]);}
if(isset($column[268])){
     $col268 = mysqli_real_escape_string($conn, $column[268]);}
if(isset($column[269])){
     $col269 = mysqli_real_escape_string($conn, $column[269]);}
if(isset($column[270])){
     $col270 = mysqli_real_escape_string($conn, $column[270]);}
if(isset($column[271])){
     $col271 = mysqli_real_escape_string($conn, $column[271]);}
if(isset($column[272])){
     $col272 = mysqli_real_escape_string($conn, $column[272]);}
if(isset($column[273])){
     $col273 = mysqli_real_escape_string($conn, $column[273]);}
if(isset($column[274])){
     $col274 = mysqli_real_escape_string($conn, $column[274]);}
if(isset($column[275])){
     $col275 = mysqli_real_escape_string($conn, $column[275]);}
if(isset($column[276])){
     $col276 = mysqli_real_escape_string($conn, $column[276]);}
if(isset($column[277])){
     $col277 = mysqli_real_escape_string($conn, $column[277]);}
if(isset($column[278])){
     $col278 = mysqli_real_escape_string($conn, $column[278]);}
if(isset($column[279])){
     $col279 = mysqli_real_escape_string($conn, $column[279]);}
if(isset($column[280])){
     $col280 = mysqli_real_escape_string($conn, $column[280]);}
if(isset($column[281])){
     $col281 = mysqli_real_escape_string($conn, $column[281]);}
if(isset($column[282])){
     $col282 = mysqli_real_escape_string($conn, $column[282]);}
if(isset($column[283])){
     $col283 = mysqli_real_escape_string($conn, $column[283]);}
if(isset($column[284])){
     $col284 = mysqli_real_escape_string($conn, $column[284]);}
if(isset($column[285])){
     $col285 = mysqli_real_escape_string($conn, $column[285]);}
if(isset($column[286])){
     $col286 = mysqli_real_escape_string($conn, $column[286]);}
if(isset($column[287])){
     $col287 = mysqli_real_escape_string($conn, $column[287]);}
if(isset($column[288])){
     $col288 = mysqli_real_escape_string($conn, $column[288]);}
if(isset($column[289])){
     $col289 = mysqli_real_escape_string($conn, $column[289]);}
if(isset($column[290])){
     $col290 = mysqli_real_escape_string($conn, $column[290]);}
if(isset($column[291])){
     $col291 = mysqli_real_escape_string($conn, $column[291]);}
if(isset($column[292])){
     $col292 = mysqli_real_escape_string($conn, $column[292]);}
if(isset($column[293])){
     $col293 = mysqli_real_escape_string($conn, $column[293]);}
if(isset($column[294])){
     $col294 = mysqli_real_escape_string($conn, $column[294]);}
if(isset($column[295])){
     $col295 = mysqli_real_escape_string($conn, $column[295]);}
if(isset($column[296])){
     $col296 = mysqli_real_escape_string($conn, $column[296]);}
if(isset($column[297])){
     $col297 = mysqli_real_escape_string($conn, $column[297]);}
if(isset($column[298])){
     $col298 = mysqli_real_escape_string($conn, $column[298]);}
if(isset($column[299])){
     $col299 = mysqli_real_escape_string($conn, $column[299]);}
if(isset($column[300])){
     $col300 = mysqli_real_escape_string($conn, $column[300]);}
if(isset($column[301])){
     $col301 = mysqli_real_escape_string($conn, $column[301]);}
if(isset($column[302])){
     $col302 = mysqli_real_escape_string($conn, $column[302]);}
if(isset($column[303])){
     $col303 = mysqli_real_escape_string($conn, $column[303]);}
if(isset($column[304])){
     $col304 = mysqli_real_escape_string($conn, $column[304]);}
if(isset($column[305])){
     $col305 = mysqli_real_escape_string($conn, $column[305]);}
if(isset($column[306])){
     $col306 = mysqli_real_escape_string($conn, $column[306]);}
if(isset($column[307])){
     $col307 = mysqli_real_escape_string($conn, $column[307]);}
if(isset($column[308])){
     $col308 = mysqli_real_escape_string($conn, $column[308]);}
if(isset($column[309])){
     $col309 = mysqli_real_escape_string($conn, $column[309]);}
if(isset($column[310])){
     $col310 = mysqli_real_escape_string($conn, $column[310]);}
if(isset($column[311])){
     $col311 = mysqli_real_escape_string($conn, $column[311]);}
if(isset($column[312])){
     $col312 = mysqli_real_escape_string($conn, $column[312]);}
if(isset($column[313])){
     $col313 = mysqli_real_escape_string($conn, $column[313]);}
if(isset($column[314])){
     $col314 = mysqli_real_escape_string($conn, $column[314]);}
if(isset($column[315])){
     $col315 = mysqli_real_escape_string($conn, $column[315]);}
if(isset($column[316])){
     $col316 = mysqli_real_escape_string($conn, $column[316]);}
if(isset($column[317])){
     $col317 = mysqli_real_escape_string($conn, $column[317]);}
if(isset($column[318])){
     $col318 = mysqli_real_escape_string($conn, $column[318]);}
if(isset($column[319])){
     $col319 = mysqli_real_escape_string($conn, $column[319]);}
if(isset($column[320])){
     $col320 = mysqli_real_escape_string($conn, $column[320]);}
if(isset($column[321])){
     $col321 = mysqli_real_escape_string($conn, $column[321]);}
if(isset($column[322])){
     $col322 = mysqli_real_escape_string($conn, $column[322]);}
if(isset($column[323])){
     $col323 = mysqli_real_escape_string($conn, $column[323]);}
if(isset($column[324])){
     $col324 = mysqli_real_escape_string($conn, $column[324]);}
if(isset($column[325])){
     $col325 = mysqli_real_escape_string($conn, $column[325]);}
if(isset($column[326])){
     $col326 = mysqli_real_escape_string($conn, $column[326]);}
if(isset($column[327])){
     $col327 = mysqli_real_escape_string($conn, $column[327]);}
if(isset($column[328])){
     $col328 = mysqli_real_escape_string($conn, $column[328]);}
if(isset($column[329])){
     $col329 = mysqli_real_escape_string($conn, $column[329]);}
if(isset($column[330])){
     $col330 = mysqli_real_escape_string($conn, $column[330]);}
if(isset($column[331])){
     $col331 = mysqli_real_escape_string($conn, $column[331]);}
if(isset($column[332])){
     $col332 = mysqli_real_escape_string($conn, $column[332]);}
if(isset($column[333])){
     $col333 = mysqli_real_escape_string($conn, $column[333]);}
if(isset($column[334])){
     $col334 = mysqli_real_escape_string($conn, $column[334]);}
if(isset($column[335])){
     $col335 = mysqli_real_escape_string($conn, $column[335]);}
if(isset($column[336])){
     $col336 = mysqli_real_escape_string($conn, $column[336]);}
if(isset($column[337])){
     $col337 = mysqli_real_escape_string($conn, $column[337]);}
if(isset($column[338])){
     $col338 = mysqli_real_escape_string($conn, $column[338]);}
if(isset($column[339])){
     $col339 = mysqli_real_escape_string($conn, $column[339]);}
if(isset($column[340])){
     $col340 = mysqli_real_escape_string($conn, $column[340]);}
if(isset($column[341])){
     $col341 = mysqli_real_escape_string($conn, $column[341]);}
if(isset($column[342])){
     $col342 = mysqli_real_escape_string($conn, $column[342]);}
if(isset($column[343])){
     $col343 = mysqli_real_escape_string($conn, $column[343]);}
if(isset($column[344])){
     $col344 = mysqli_real_escape_string($conn, $column[344]);}
if(isset($column[345])){
     $col345 = mysqli_real_escape_string($conn, $column[345]);}
if(isset($column[346])){
     $col346 = mysqli_real_escape_string($conn, $column[346]);}
if(isset($column[347])){
     $col347 = mysqli_real_escape_string($conn, $column[347]);}
if(isset($column[348])){
     $col348 = mysqli_real_escape_string($conn, $column[348]);}
if(isset($column[349])){
     $col349 = mysqli_real_escape_string($conn, $column[349]);}
if(isset($column[350])){
     $col350 = mysqli_real_escape_string($conn, $column[350]);}
if(isset($column[351])){
     $col351 = mysqli_real_escape_string($conn, $column[351]);}
if(isset($column[352])){
     $col352 = mysqli_real_escape_string($conn, $column[352]);}
if(isset($column[353])){
     $col353 = mysqli_real_escape_string($conn, $column[353]);}
if(isset($column[354])){
     $col354 = mysqli_real_escape_string($conn, $column[354]);}
if(isset($column[355])){
     $col355 = mysqli_real_escape_string($conn, $column[355]);}
if(isset($column[356])){
     $col356 = mysqli_real_escape_string($conn, $column[356]);}
if(isset($column[357])){
     $col357 = mysqli_real_escape_string($conn, $column[357]);}
if(isset($column[358])){
     $col358 = mysqli_real_escape_string($conn, $column[358]);}
if(isset($column[359])){
     $col359 = mysqli_real_escape_string($conn, $column[359]);}
if(isset($column[360])){
     $col360 = mysqli_real_escape_string($conn, $column[360]);}
if(isset($column[361])){
     $col361 = mysqli_real_escape_string($conn, $column[361]);}
if(isset($column[362])){
     $col362 = mysqli_real_escape_string($conn, $column[362]);}
if(isset($column[363])){
     $col363 = mysqli_real_escape_string($conn, $column[363]);}
if(isset($column[364])){
     $col364 = mysqli_real_escape_string($conn, $column[364]);}
if(isset($column[365])){
     $col365 = mysqli_real_escape_string($conn, $column[365]);}
if(isset($column[366])){
     $col366 = mysqli_real_escape_string($conn, $column[366]);}
if(isset($column[367])){
     $col367 = mysqli_real_escape_string($conn, $column[367]);}
if(isset($column[368])){
     $col368 = mysqli_real_escape_string($conn, $column[368]);}
if(isset($column[369])){
     $col369 = mysqli_real_escape_string($conn, $column[369]);}
if(isset($column[370])){
     $col370 = mysqli_real_escape_string($conn, $column[370]);}
if(isset($column[371])){
     $col371 = mysqli_real_escape_string($conn, $column[371]);}
if(isset($column[372])){
     $col372 = mysqli_real_escape_string($conn, $column[372]);}
if(isset($column[373])){
     $col373 = mysqli_real_escape_string($conn, $column[373]);}
if(isset($column[374])){
     $col374 = mysqli_real_escape_string($conn, $column[374]);}
if(isset($column[375])){
     $col375 = mysqli_real_escape_string($conn, $column[375]);}
if(isset($column[376])){
     $col376 = mysqli_real_escape_string($conn, $column[376]);}
if(isset($column[377])){
     $col377 = mysqli_real_escape_string($conn, $column[377]);}
if(isset($column[378])){
     $col378 = mysqli_real_escape_string($conn, $column[378]);}
if(isset($column[379])){
     $col379 = mysqli_real_escape_string($conn, $column[379]);}
if(isset($column[380])){
     $col380 = mysqli_real_escape_string($conn, $column[380]);}
$inserter = "INSERT INTO `dummy`( `grp`, `Jkt_FITMODEL`, `orderno`, `Customer_Name`, `Marker`, `Cloth_Article`, `Cloth`, `Fabric_Width`, `Plaid`, `Stripe`, `Offset`, `Fabric_Way`, `1_Way_Stripe`, `S95-SHELL_SOLID`, `S95-SHELL_STP`, `S95-SHELL_PLAID`, `BUFFER_SOLID-S95`, `BUFFER_STP-S95`, `BUFFER_PLAID-S95`, `Jkt_HANDMD`, `Jkt_LINING`, `Jkt_CHE`, `Jkt_GIR`, `Jkt_SEAT`, `Jkt_LEN`, `Jkt_FRTLEN`, `Jkt_PP`, `Jkt_BCKWDTH`, `Jkt_SLVOUT_RIGHT`, `Jkt_SLVOUT_LEFT`, `Jkt_BICEP`, `Jkt_LAPK`, `Jkt_LAPP`, `Jkt_BTN`, `Jkt_WRIST`, `Jkt_AHDEPTH`, `Jkt_VENT`, `Jkt_PLUSAH3`, `Jkt_ERECT`, `Jkt_FULLCHES`, `Jkt_HEADF`, `Jkt_LOWCLR`, `Jkt_PLUSAH2`, `Jkt_MINUSCLR`, `Jkt_SLOPE`, `Jkt_BTN1`, `Jkt_BTN3`, `Jkt_ROPESLV`, `Jkt_SLANTPKT`, `Jkt_TKTPKT`, `Jkt_ADDLIFT`, `Jkt_NOOBW`, `Jkt_NODART`, `Jkt_FRTEDGE`, `Jkt_LEARCLR`, `Jkt_LEFTDN`, `Jkt_RIGTDN`, `Jkt_FULCANV`, `Jkt_HALFCANV`, `Jkt_FLTCANV`, `Jkt_PATCHPKT`, `Jkt_SLVVENT`, `Jkt_SLVBACK`, `Jkt_SLVFW`, `Jkt_LONDONF`, `Jkt_PORTLYF`, `Jkt_DB`, `Jkt_CBPLULS`, `Jkt_SHGIRTHF`, `Jkt_SHGIRTBK`, `Jkt_PLTPPK`, `Jkt_OPENDART`, `Jkt_PORTLYGRI`, `Jkt_ATHLETIC`, `Jkt_STBTM`, `Jkt_FLAPPK`, `Jkt_BESOMP`, `Jkt_2PATCH`, `Jkt_2PATFL`, `Jkt_3PATCH`, `Jkt_3PATFL`, `Jkt_L-WELT`, `Jkt_STDPLG`, `Jkt_STDPSH`, `Jkt_CIGLG`, `Jkt_CIGSH`, `Jkt_PENPLG`, `Jkt_PENPSH`, `Jkt_CELLLG`, `Jkt_CELLSH`, `Jkt_PASSPK`, `Jkt_SVSTRA`, `Jkt_SWEATP`, `Jkt_TKT-PK`, `Jkt_ELBOWP`, `Jkt_C-SETN`, `Jkt_C-SETF`, `Jkt_C-SETH`, `Jkt_RIOFAC`, `Jkt_SOVFAC`, `Jkt_FF`, `Jkt_CPSLV`, `Jkt_YOKE`, `Jkt_BELTBK`, `Jkt_US-SV-RG-HG-TR-FLG`, `Jkt_US-SV-RG-HG-TR-HLG`, `Jkt_US-SV-RG-HG-TR-HLG-A`, `Jkt_US-SV-SHAWL-FLG`, `Jkt_US-SV-SHAWL-HLG`, `Jkt_US-SV-SHAWL-HLG-A`, `Jkt_US-SV-SRP-DRP-DB-FLG`, `Jkt_US-SV-SRP-DRP-DB-HLG`, `Jkt_US-SV-SRP-DRP-DB-HLG-A`, `Jkt_US-CV-RG-HG-TR-FLG`, `Jkt_US-CV-RG-HG-TR-HLG`, `Jkt_US-CV-RG-HG-TR-HLG-A`, `Jkt_US-CV-SHAWL-FLG`, `Jkt_US-CV-SHAWL-HLG`, `Jkt_US-CV-SHAWL-HLG-A`, `Jkt_US-CV-SRP-DRP-DB-FLG`, `Jkt_US-CV-SRP-DRP-DB-HLG`, `Jkt_US-CV-SRP-DRP-DB-HLG-A`, `Jkt_US-NV-RG-HG-TR-FLG`, `Jkt_US-NV-RG-HG-TR-HLG`, `Jkt_US-NV-RG-HG-TR-HLG-A`, `Jkt_US-NV-SHAWL-FLG`, `Jkt_US-NV-SHAWL-HLG`, `Jkt_US-NV-SHAWL-HLG-A`, `Jkt_US-NV-SRP-DRP-DB-FLG`, `Jkt_US-NV-SRP-DRP-DB-HLG`, `Jkt_US-NV-SRP-DRP-DB-HLG-A`, `Trs_HANDMD`, `Trs_LINING`, `Trs1_WAIST`, `Trs1_SEAT`, `Trs1_THIGH`, `Trs1_KNEE`, `Trs1_BTM`, `Trs1_INSEAM RIGHT`, `Trs1_INSEAM LEFT`, `Trs1_OTSEAM`, `Trs1_TRURISE`, `Trs1_FRTRISE`, `Trs1_BKRISE`, `Trs1_URISE`, `Trs1_DPSEAT`, `Trs1_HIPFWD`, `Trs1_LWFRT`, `Trs1_PLCROT`, `Trs1_RISEBK`, `Trs1_DEP1PLE`, `Trs1_DEP2PLE`, `Trs1_BPKTD`, `Trs1_CUFF`, `Trs1_SLTHM`, `Trs1_SQEXT`, `Trs1_TRNPLT`, `Trs1_WBHT`, `Trs1_MINUSPEG`, `Trs1_FRTPKTD`, `Trs1_ZIPPER`, `Trs1_EXTENT`, `Trs1_C-PKT`, `Trs1_CFHKLG`, `Trs1_C-HKLG`, `Trs1_CPFKLG`, `Trs1_S-PKT`, `Trs1_SFHKLG`, `Trs1_S-HKLG`, `Trs1_SPFKLG`, `Trs1_FB-PKT`, `Trs1_FFHKLG`, `Trs1_F-HKLG`, `Trs1_FPFKLG`, `Trs1_P-EXTN`, `Trs1_NOLOOP`, `Trs1_TNLLOP`, `Trs1_BKFLAP`, `Trs1_WATCHP`, `Trs1_WAFLAP`, `Trs1_ADJTAB`, `Trs1_EXITAB`, `Trs1_TABFLY`, `Trs1_COINPK`, `Trs1_RENFLG`, `Trs1_RENFSH`, `Trs1_D-RING`, `Trs1_PSQUFL`, `Trs1_ADBUCK`, `Trs1_WBSKIR`, `Trs1_STAYBA`, `Trs1_W-PKT`, `Trs1_WFHKLG`, `Trs1_W-HKLG`, `Trs1_WPFKLG`, `Trs1_US-1PLEAT-TRS-1DART`, `Trs1_US-1PLEAT-TRS-2DART`, `Trs1_US-2PLEAT-TRS-1DART`, `Trs1_US-2PLEAT-TRS-2DART`, `Trs1_US-3PLEAT-TRS-1DART`, `Trs1_US-3PLEAT-TRS-2DART`, `Trs1_US-4PLEAT-TRS-1DART`, `Trs1_US-4PLEAT-TRS-2DART`, `Trs1_US-11-FF-TRS-1DART`, `Trs1_US-11-FF-TRS-2DART`, `Trs1_HARI-1PLEAT-TRS`, `Trs1_HARI-2PLEAT-TRS`, `Trs1_HARI-3PLEAT-TRS`, `Trs1_HARI-4PLEAT-TRS`, `Trs1_HARI-11-FF-TRS`, `Trs2_HANDMD`, `Trs2_WAIST`, `Trs2_SEAT`, `Trs2_THIGH`, `Trs2_KNEE`, `Trs2_BTM`, `Trs2_INSEAM_RIGHT`, `Trs2_INSEAM_LEFT`, `Trs2_OTSEAM`, `Trs2_TRURISE`, `Trs2_FRTRISE`, `Trs2_BKRISE`, `Trs2_URISE`, `Trs2_DPSEAT`, `Trs2_HIPFWD`, `Trs2_LWFRT`, `Trs2_PLCROT`, `Trs2_RISEBK`, `Trs2_DEP1PLE`, `Trs2_DEP2PLE`, `Trs2_BPKTD`, `Trs2_CUFF`, `Trs2_SLTHM`, `Trs2_SQEXT`, `Trs2_TRNPLT`, `Trs2_WBHT`, `Trs2_MINUSPEG`, `Trs2_FRTPKTD`, `Trs2_ZIPPER`, `Trs2_EXTENT`, `Trs2_C-PKT`, `Trs2_CFHKLG`, `Trs2_C-HKLG`, `Trs2_CPFKLG`, `Trs2_S-PKT`, `Trs2_SFHKLG`, `Trs2_S-HKLG`, `Trs2_SPFKLG`, `Trs2_FB-PKT`, `Trs2_FFHKLG`, `Trs2_F-HKLG`, `Trs2_FPFKLG`, `Trs2_P-EXTN`, `Trs2_NOLOOP`, `Trs2_TNLLOP`, `Trs2_BKFLAP`, `Trs2_WATCHP`, `Trs2_WAFLAP`, `Trs2_ADJTAB`, `Trs2_EXITAB`, `Trs2_TABFLY`, `Trs2_COINPK`, `Trs2_RENFLG`, `Trs2_RENFSH`, `Trs2_D-RING`, `Trs2_PSQUFL`, `Trs2_ADBUCK`, `Trs2_WBSKIR`, `Trs2_STAYBA`, `Trs2_W-PKT`, `Trs2_WFHKLG`, `Trs2_W-HKLG`, `Trs2_WPFKLG`, `Trs2_US-1PLEAT-TRS-1DART`, `Trs2_US-1PLEAT-TRS-2DART`, `Trs2_US-2PLEAT-TRS-1DART`, `Trs2_US-2PLEAT-TRS-2DART`, `Trs2_US-3PLEAT-TRS-1DART`, `Trs2_US-3PLEAT-TRS-2DART`, `Trs2_US-4PLEAT-TRS-1DART`, `Trs2_US-4PLEAT-TRS-2DART`, `Trs2_US-11-FF-TRS-1DART`, `Trs2_US-11-FF-TRS-2DART`, `Trs2_HARI-1PLEAT-TRS`, `Trs2_HARI-2PLEAT-TRS`, `Trs2_HARI-3PLEAT-TRS`, `Trs2_HARI-4PLEAT-TRS`, `Trs2_HARI-11-FF-TRS`, `Vst_HANDMD`, `Vst_LINING`, `Vst_GIRTH`, `Vst_CHE`, `Vst_FLCB`, `Vst_BKL`, `Vst_PP`, `Vst_BACKWDTH`, `Vst_2WELTP`, `Vst_4WELTP`, `Vst_2PIPEP`, `Vst_4PIPEP`, `Vst_SHBACK`, `Vst_Break_Point-474/VS2/VS4/VS6`, `Vst_Break_Point-VS-5`, `Vst_Break_Point-VS-I4`, `Vst_Break_Point-VL9-VL22`, `Vst_Break_Point-VL-1/VL-10`, `Vst_Break_Point-VL-8`, `Vst_Break_Point-VL-25`, `Vst_S95-SHELL_PLAID`, `Vst_S95-SHELL_SOLID`, `Vst_S95-SHELL_STP`, `Vst_BUFFER_PLAID-S95`, `Vst_BUFFER_SOLID-S95`, `Vst_BUFFER_STP-S95`, `Vst_US-474-2WELTS-VEST`, `Vst_US-474-4WELTS-VEST`, `Vst_US-VL-1-VEST`, `Vst_US-VL-10-VEST`, `Vst_US-VL1-PEAK-VEST`, `Vst_US-VL8-VEST`, `Vst_US-VL9-VEST`, `Vst_US-VL22-VEST`, `Vst_US-VL25-VEST`, `Vst_US-VS-2-VEST`, `Vst_US-VS-4-VEST`, `Vst_US-VS-5-VEST`, `Vst_US-VS-6-VEST`, `Vst_US-VS-14-VEST`, `Barcode`, `Jkt_Remarks`, `Trs1_Remarks`, `Trs2_Remarks`, `Vst_Remarks`, `Trs1_RAISE_FRONT`, `Trs1_LOWER_BACK`, `Trs2_RAISE_FRONT`, `Trs2_LOWER_BACK`, `Dealer_Name`, `Trs1_TG-US-FF-TRS-1DART`, `Trs1_TG-US-FF-TRS-2DART`, `Trs2_TG-US-FF-TRS-1DART`, `Trs2_TG-US-FF-TRS-2DART`, `Jkt_54WIDER-FR`, `Jkt_PKT-SQ`, `Jkt_SLV-CUF`, `Jkt_GUNPAT`, `Jkt_STOTAB`, `Jkt_SH-TAB`, `Jkt_NOOBW_`, `Jkt_MILL-F`, `Jkt_1WELT`, `Jkt_1PLYBK`, `Jkt_2PLYBK`, `Trs1_33TNLLOOP`, `Trs1_34FRTPKTOPEN`, `Trs1_35FRTDART`, `Trs1_NOHIPP`, `Trs1_BHKLG`, `Trs2_33TNLLOOP`, `Trs2_34FRTPKTOPEN`, `Trs2_35FRTDART`, `Trs2_NOHIPP`, `Trs2_BHKLG`, `Jkt_FLATCHEST`, `Jkt_HN`, `Jkt_OPENBK`, `Trs1_DEPTURN1`, `Trs1_DEPTURN2`, `Trs2_DEPTURN1`, `Trs2_DEPTURN2`, `Trs1_18PKT`, `Trs2_18PKT`, `Trs1_JNW`, `Trs2_JNW`, `Trs1_JNN`, `Trs2_JNN`, `Vst_AVSTGR`, `Jkt_NOVSLV`, `Jkt_BISWBK`, `Jkt_STBKYK`, `Jkt_STFRYK`) VALUES ('$column[0]','$col1','$col2','$col3','$col4','$col5','$col6','$col7','$col8','$col9','$col10','$col11','$col12','$col13','$col14','$col15','$col16','$col17','$col18','$col19','$col20','$col21','$col22','$col23','$col24','$col25','$col26','$col27','$col28','$col29','$col30','$col31','$col32','$col33','$col34','$col35','$col36','$col37','$col38','$col39','$col40','$col41','$col42','$col43','$col44','$col45','$col46','$col47','$col48','$col49','$col50','$col51','$col52','$col53','$col54','$col55','$col56','$col57','$col58','$col59','$col60','$col61','$col62','$col63','$col64','$col65','$col66','$col67','$col68','$col69','$col70','$col71','$col72','$col73','$col74','$col75','$col76','$col77','$col78','$col79','$col80','$col81','$col82','$col83','$col84','$col85','$col86','$col87','$col88','$col89','$col90','$col91','$col92','$col93','$col94','$col95','$col96','$col97','$col98','$col99','$col100','$col101','$col102','$col103','$col104','$col105','$col106','$col107','$col108','$col109','$col110','$col111','$col112','$col113','$col114','$col115','$col116','$col117','$col118','$col119','$col120','$col121','$col122','$col123','$col124','$col125','$col126','$col127','$col128','$col129','$col130','$col131','$col132','$col133','$col134','$col135','$col136','$col137','$col138','$col139','$col140','$col141','$col142','$col143','$col144','$col145','$col146','$col147','$col148','$col149','$col150','$col151','$col152','$col153','$col154','$col155','$col156','$col157','$col158','$col159','$col160','$col161','$col162','$col163','$col164','$col165','$col166','$col167','$col168','$col169','$col170','$col171','$col172','$col173','$col174','$col175','$col176','$col177','$col178','$col179','$col180','$col181','$col182','$col183','$col184','$col185','$col186','$col187','$col188','$col189','$col190','$col191','$col192','$col193','$col194','$col195','$col196','$col197','$col198','$col199','$col200','$col201','$col202','$col203','$col204','$col205','$col206','$col207','$col208','$col209','$col210','$col211','$col212','$col213','$col214','$col215','$col216','$col217','$col218','$col219','$col220','$col221','$col222','$col223','$col224','$col225','$col226','$col227','$col228','$col229','$col230','$col231','$col232','$col233','$col234','$col235','$col236','$col237','$col238','$col239','$col240','$col241','$col242','$col243','$col244','$col245','$col246','$col247','$col248','$col249','$col250','$col251','$col252','$col253','$col254','$col255','$col256','$col257','$col258','$col259','$col260','$col261','$col262','$col263','$col264','$col265','$col266','$col267','$col268','$col269','$col270','$col271','$col272','$col273','$col274','$col275','$col276','$col277','$col278','$col279','$col280','$col281','$col282','$col283','$col284','$col285','$col286','$col287','$col288','$col289','$col290','$col291','$col292','$col293','$col294','$col295','$col296','$col297','$col298','$col299','$col300','$col301','$col302','$col303','$col304','$col305','$col306','$col307','$col308','$col309','$col310','$col311','$col312','$col313','$col314','$col315','$col316','$col317','$col318','$col319','$col320','$col321','$col322','$col323','$col324','$col325','$col326','$col327','$col328','$col329','$col330','$col331','$col332','$col333','$col334','$col335','$col336','$col337','$col338','$col339','$col340','$col341','$col342','$col343','$col344','$col345','$col346','$col347','$col348','$col349','$col350','$col351','$col352','$col353','$col354','$col355','$col356','$col357','$col358','$col359','$col360','$col361','$col362','$col363','$col364','$col365','$col366','$col367','$col368','$col369','$col370','$col371','$col372','$col373','$col374','$col375','$col376','$col377','$col378','$col379','$col380')";
mysqli_query($conn, $inserter);





           // $dater = $group . " " . $order . " " . $customer . " " . $marker . " " . $clothArt . "" . $cloth . "" . $fabricwidth . "" . $plaid;

           // $myfile = fopen($group . ".txt", "w") or die("Unable to open file!");
            //fwrite($myfile, $dater);

            //calculation

            //select single row 
            //perform operation 
            //generate file


            ///
           // if (file_exists($group . '.txt')) {
                //delete from dummy
                // insert into allInputs
            //}
        }
          //for first che column
          function fetcher($orderno,$Jkt_CHE,$Jkt_PLUSAH3,$Jkt_ERECT,$Jkt_FULLCHES,$Jkt_HEADF,$Jkt_LOWCLR,$Jkt_PLUSAH2,$btn,$Jkt_VENT,$Jkt_GIR,$Jkt_SEAT,$Jkt_LEN,$conn){

              

                    if($Jkt_CHE!=0){
                    $in="SELECT `$Jkt_CHE` as col FROM `size_chart`";
                    $res=mysqli_query($conn,$in);
                    while($row=mysqli_fetch_array($res)){
                         $che=$row['col'];
                         
                           $inserter="insert into `frommeasure` (`che`,`orderno`,`btn1/3`)values('$che','$orderno','$btn')";
                           mysqli_query($conn,$inserter); 
                      

                     }
                    }
                    //if($Jkt_PLUSAH3!=0){
                    $in2="insert into `frommeasure` (`16plus3`)SELECT `$Jkt_PLUSAH3` FROM `size_chart` ";
                    mysqli_query($conn,$in2);
                   // }
                    //if($Jkt_ERECT!=0){
                    $in3="insert into `frommeasure` (`17erect`)SELECT `$Jkt_ERECT` FROM `size_chart` ";
                    mysqli_query($conn,$in3);
                    //}
                    //if($Jkt_FULLCHES!=0){
                    $in4="insert into `frommeasure` (`18fullches`)SELECT `$Jkt_FULLCHES` FROM `size_chart` ";
                    mysqli_query($conn,$in4);
                    //}
                   // if($Jkt_HEADF!=0){
                    $in5="insert into `frommeasure` (`19headf`)SELECT `$Jkt_HEADF` FROM `size_chart` ";
                    mysqli_query($conn,$in5);
                    //}
                    //if($Jkt_LOWCLR!=0){
                    $in6="insert into `frommeasure` (`20lowclr`)SELECT `$Jkt_LOWCLR` FROM `size_chart` ";
                    mysqli_query($conn,$in6);
                   // }
                    //if($Jkt_PLUSAH2!=0){
                    $in7="insert into `frommeasure` (`21push2`)SELECT `$Jkt_PLUSAH2` FROM `size_chart` ";
                    mysqli_query($conn,$in7);
                   // }
                   // if($Jkt_PLUSAH2!=0){
                    $in7="insert into `frommeasure` (`21push2`)SELECT `$Jkt_PLUSAH2` FROM `size_chart` ";
                    mysqli_query($conn,$in7);

                    $in8="insert into `frommeasure` (`Jkt_VENT`)SELECT `$Jkt_VENT` FROM `size_chart` ";
                    mysqli_query($conn,$in8);

                    $in9="insert into `frommeasure` (`Jkt_GIR`)SELECT `$Jkt_GIR` FROM `size_chart` ";
                    mysqli_query($conn,$in9);

                    $in10="insert into `frommeasure` (`Jkt_SEAT`)SELECT `$Jkt_SEAT` FROM `size_chart` ";
                    mysqli_query($conn,$in10);

                    $in11="insert into `frommeasure` (`Jkt_LEN`)SELECT `$Jkt_LEN` FROM `size_chart` ";
                    mysqli_query($conn,$in11);

                    //}
                    $sect="SELECT id,(`che`+`16plus3`+`17erect`+`18fullches`+`19headf`+`20lowclr`+`21push2`+`btn1/3`+`15vent`+`open_waist_1/2_girth`+`seat`+`4len`) as total FROM `frommeasure`";
                    $fire=mysqli_query($conn,$sect);
                    while($roy=mysqli_fetch_array($fire)){
                         $total=$roy['total'];
                         $id=$roy['id'];
                    
                      $in8="update `frommeasure` set sum='$total' where id='$id'";
                      mysqli_query($conn,$in8);
                    }
                           
               }
  $che="select orderno,Jkt_CHE,Jkt_PLUSAH3,Jkt_ERECT,Jkt_FULLCHES,Jkt_HEADF,Jkt_LOWCLR,
  Jkt_PLUSAH2,Jkt_BTN1,Jkt_BTN3,Jkt_VENT,Jkt_GIR,Jkt_SEAT,Jkt_LEN from dummy";
  $res=mysqli_query($conn,$che);
  while($row=mysqli_fetch_array($res)){
     $orderno=abs($row["orderno"]);
     $Jkt_CHE=abs($row["Jkt_CHE"]);
     $Jkt_PLUSAH3=abs($row["Jkt_PLUSAH3"]);
     $Jkt_ERECT=abs($row["Jkt_ERECT"]);
     $Jkt_FULLCHES=abs($row["Jkt_FULLCHES"]);
     $Jkt_HEADF=abs($row["Jkt_HEADF"]);
     $Jkt_LOWCLR=abs($row["Jkt_LOWCLR"]);
     $Jkt_PLUSAH2=abs($row["Jkt_PLUSAH2"]);
     $Jkt_BTN1=abs($row["Jkt_BTN1"]);
     $Jkt_BTN3=abs($row["Jkt_BTN3"]);
     $Jkt_VENT=abs($row['Jkt_VENT']);
     $Jkt_GIR=abs($row['Jkt_GIR']);
     $Jkt_SEAT=abs($row['Jkt_SEAT']);
     $Jkt_LEN=abs($row['Jkt_LEN']);

     if($Jkt_BTN1!=0){
     $btn=-2.5;
     }elseif ($Jkt_BTN3!=0) {
     $btn=-3;
     }else{
          $btn=0;
     }
     
     
     fetcher($orderno,$Jkt_CHE,$Jkt_PLUSAH3,$Jkt_ERECT,$Jkt_FULLCHES,$Jkt_HEADF,$Jkt_LOWCLR,$Jkt_PLUSAH2,$btn,$Jkt_VENT,$Jkt_GIR,$Jkt_SEAT,$Jkt_LEN,$conn);
  }
    }
}

?>
<html>

<head>
    <script src="jquery-3.2.1.min.js"></script>

    <style>
        body {
            font-family: Arial;
            width: auto;
        }

        .outer-scontainer {
            background: #F0F0F0;
            border: #e0dfdf 1px solid;
            padding: 20px;
            border-radius: 2px;

        }

        .input-row {
            margin-top: 0px;
            margin-bottom: 20px;
        }

        .btn-submit {
            background: #333;
            border: #1d1d1d 1px solid;
            color: #f0f0f0;
            font-size: 0.9em;
            width: 100px;
            border-radius: 2px;
            cursor: pointer;
        }

        .outer-scontainer table {
            border-collapse: collapse;
            width: 100%;
        }

        .outer-scontainer th {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        .outer-scontainer td {
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }

        #response {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 2px;
            display: none;
        }

        .success {
            background: #c7efd9;
            border: #bbe2cd 1px solid;
        }

        .error {
            background: #fbcfcf;
            border: #f3c6c7 1px solid;
        }

        div#response.display-block {
            display: block;
        }
    </style>
</head>

<body>

    <h2> CSV </h2>

    <div id="response" class="">

    </div>
    <div class="outer-scontainer">
        <div class="row">

            <form class="form-horizontal" action="" method="post" name="frmCSVImport" id="frmCSVImport" enctype="multipart/form-data">
                <div class="input-row">
                    <label class="col-md-4 control-label">Choose CSV
                        File</label> <input type="file" name="file" id="file" accept=".csv">
                    <button type="submit" id="submit" name="import" class="btn-submit">Import</button>
                    <br />

                </div>

            </form>
            </div>

        </div>
       
      
</body>

</html>