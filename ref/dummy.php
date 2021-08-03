<div class="zeroth_row row">
    <select name="tables" id="tables" onchange="admSelectCheck(this);">
        <option value="" selected disabled>Select Table</option>
        <?php

        $quant = "SELECT table_name FROM information_schema.tables
WHERE table_schema = 'measurements'";
        $query = mysqli_query($measurements, $quant);
        while ($row = mysqli_fetch_array($query)) { ?>
            <option value="<?php $row['table_name']; ?>"><?php echo $row['table_name'] ?></option>
        <?php }

        ?>

    </select>
    <div class="col-sm-6" id="displayer">

    </div>

</div>


$('select').change(function () {
var optionSelected = $(this).find("option:selected");
var valueSelected = optionSelected.val();
var textSelected = optionSelected.text();
});



var t1 = $('#ah_34_a_plus');
var size_chart_t = $('#size_chart');
var seat_t = $('#seat');
var raise_bk_plus_minus_t = $('#raise_bk_plus_minus');
var PAH12_t = $('#P+AH+12');
var portly_fit_t = $('#portly_fit');
var low_clr_plus_t = $('#low_clr_plus');
var plu_crot_plus_t = $('#plu_crot_plus');
var mtm_us_trs_r_t = $('#mtm_us_trs(r)');
var mtm_us_trs_l_t = $('#mtm_us_trs(l)');
var measurement_chart_t = $('#measurement_chart');
var low_fron_t = $('#low_fron');
var jkt_london_fit_r_t = $('#jkt_london_fit_r');
var hip_frow_plus_t = $('#hip_frow_plus');
var head_for_plus_t = $('#head_for_plus');
var full_chest_t = $('#full_chest');
var half_grith_t = $('#half_grith');
var front_length_minus_t = $('#front_length(-)');
var front_length_plus_t = $('#front_length(+)');
var erect_plus_t = $('#erect_plus');
var Deep_seat_t = $('#Deep_seat(-)');
var athletic_fit_t = $('#athletic_fit');
var fift_vent_t = $('#15vent');
var twl_back_t = $('#12back');
var four_len_t = $('#4len');




} else if (ls == '12back') {
$(back12).clone().appendTo('#zero');
} else if (ls == '15vent') {
$(vent15).clone().appendTo('#zero');
} else if (ls == 'ah_34_a_plus') {
$(ah_34_a_plus).clone().appendTo('#zero');
} else if (ls == 'athletic_fit') {
$(athletic_fit).clone().appendTo('#zero');
} else if (ls == 'deep_seat(-)') {
$(Deep_seat).clone().appendTo('#zero');
} else if (ls == 'erect_plus') {
$(erect_plus).clone().appendTo('#zero');
} else if (ls == 'front_length(+)') {
$(front_length_plus).clone().appendTo('#zero');
} else if (ls == 'front_length(-)') {
$(front_length_minus).clone().appendTo('#zero');
} else if (ls == 'full_chest') {
$(full_chest).clone().appendTo('#zero');
} else if (ls == 'half_grith') {
$(half_grith).clone().appendTo('#zero');
} else if (ls == 'head_for_plus') {
$(head_for_plus).clone().appendTo('#zero');
} else if (ls == 'hip_frow_plus') {
$(hip_forw_plus).clone().appendTo('#zero');
} else if (ls == 'jkt_landon_fit_r') {
$(jkt_london_fit_r).clone().appendTo('#zero');
} else if (ls == 'low_clr_plus') {
$(low_clr_plus).clone().appendTo('#zero');
} else if (ls == 'low_fron') {
$(low_fron).clone().appendTo('#zero');
} else if (ls == 'measurement_chart') {
$(measurement_chart).clone().appendTo('#zero');
} else if (ls == 'mtm_us_trs(l)') {
$(mtm_us_trs_l).clone().appendTo('#zero');
} else if (ls == 'mtm_us_trs(r)') {
$(mtm_us_trs_r).clone().appendTo('#zero');
} else if (ls == 'p_plus_ah_plus_12') {
$(PAH).clone().appendTo('#zero');
} else if (ls == 'plu_crot_plus') {
$(plu_crot_plus).clone().appendTo('#zero');
} else if (ls == 'portly_fit') {
$(portly_fit).clone().appendTo('#zero');
} else if (ls == 'raise_bk_plus_minus') {
$(raise_bk_plus_minus).clone().appendTo('#zero');
} else if (ls == 'seat') {
$(seat).clone().appendTo('#zero');
} else {
$(size_chart).clone().appendTo('#zero');
}



var four_len = $('#4lenDiv');
var back12 = $('#12back_div');
var vent15 = $('#15vent');
var ah_34_a_plus = $('#ah_34_a_plus_div');
var size_chart = $('#size_chart_div');
var raise_bk_plus_minus = $('#raise_bk_plus_minus_div');
var PAH = $('#P+AH+12_div');
var low_clr_plus = $('#low_clr_plus_div');
var portly_fit = $('#portly_fit_div');
var plu_crot_plus = $('#plu_crot_plus_div');
var mtm_us_trs_r = $('#mtm_us_trs(r)_div');
var mtm_us_trs_l = $('#mtm_us_trs(l)_div');
var measurement_chart = $('#measurement_chart_div');
var low_fron = $('#low_fron_div');
var jkt_london_fit_r = $('#jkt_london_fit_r_div');
var hip_forw_plus = $('#hip_forw_plus_div');
var head_for_plus = $('#head_for_plus_div');
var full_chest = $('#full_chest_div');
var half_grith = $('#half_grith_div');
var front_length_minus = $('#front_length(-)_div');
var front_length_plus = $('#front_length(+)_div');
var erect_plus = $('#erect_plus_div');
var Deep_seat = $('#Deep_seat(-)_div');
var athletic_fit = $('#athletic_fit_div');

$('#zero').append($('#'));