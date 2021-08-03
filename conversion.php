<?php 
function fractionToDecimal($fraction) 
{
    // Split fraction into whole number and fraction components
    preg_match('/^(?P<whole>\d+)?\s?((?P<numerator>\d+)\/(?P<denominator>\d+))?$/', $fraction, $components);

    // Extract whole number, numerator, and denominator components
    $whole = $components['whole'] ?: 0;
    $numerator = $components['numerator'] ?: 0;
    $denominator = $components['denominator'] ?: 0;

    // Create decimal value
    $decimal = $whole;
    $numerator && $denominator && $decimal += ($numerator/$denominator);

    return $decimal;
}

function decimalToFraction($decimal) 
{
    // Determine decimal precision and extrapolate multiplier required to convert to integer
    $precision = strpos(strrev($decimal), '.') ?: 0;
    $multiplier = pow(10, $precision);

    // Calculate initial numerator and denominator
    $numerator = $decimal * $multiplier;
    $denominator = 1 * $multiplier;

    // Extract whole number from numerator
    $whole = floor($numerator / $denominator);
    $numerator = $numerator % $denominator;

    // Find greatest common divisor between numerator and denominator and reduce accordingly
    $factor = gmp_intval(gmp_gcd($numerator, $denominator));
    $numerator /= $factor;
    $denominator /= $factor;

    // Create fraction value
    $fraction = [];
    $whole && $fraction[] = $whole;
    $numerator && $fraction[] = "{$numerator}/{$denominator}";

    return implode(' ', $fraction);
}

// Examples
$col9='30 1/4';
$col9=fractionToDecimal($col9); 
echo $col9;  // 0.04
echo gettype($col9);