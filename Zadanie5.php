<?php
// 1.1
$tab1 = array(7, 3, 1, 6, 9, 5, 4, 10, 2, 2);
echo $tab1[4] . "<br>";

// 1.2
$tab1[6] = 12;

// 1.3
$tab2 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[$i];
}
$tab3 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab3[$i] = $tab1[$i] + $tab2[$i];
}

// 1.4
$tab2 = array();
for ($i = 0; $i < count($tab1); $i++) {
    $tab2[$i] = $tab1[count($tab1) - 1 - $i];
}


// 2.1
$T = array(5, 3, 8, 3, 12, 1, 9, 3, 4, 7); 

// 2.2
$min = $T[0];
$max = $T[0];
for ($i = 0; $i < count($T); $i++) {
    if ($T[$i] < $min) $min = $T[$i];
    if ($T[$i] > $max) $max = $T[$i];
}

// 2.3
$suma = 0;
for ($i = 0; $i < count($T); $i++) {
    $suma += $T[$i];
}
$srednia = $suma / count($T);

// 2.4
$ile_3 = 0;
for ($i = 0; $i < count($T); $i++) {
    if ($T[$i] == 3) $ile_3++;
}

// 2.5
sort($T);

// 2.6
$srodek = floor(count($T) / 2);
if (count($T) % 2 != 0) {
    $mediana = $T[$srodek];
} else {
    $mediana = ($T[$srodek - 1] + $T[$srodek]) / 2;
}

// 2.7
$trzy_najmniejsze = array($T[0], $T[1], $T[2]);
$trzy_najwieksze = array($T[count($T)-1], $T[count($T)-2], $T[count($T)-3]);

// 2.8
for ($i = 0; $i < count($T); $i++) {
    $T[$i] = $T[$i] * $T[$i];
}

// 2.9
$parzyste = 0;
$nieparzyste = 0;
for ($i = 0; $i < count($T); $i++) {
    if ($T[$i] % 2 == 0) $parzyste++; else $nieparzyste++;
}

// 2.10
$podzielne_3 = 0;
for ($i = 0; $i < count($T); $i++) {
    if ($T[$i] % 3 == 0) $podzielne_3++;
}


// 3.1 i 3.2
$wyraz = "AbCdEfGhIj"; 
$tab_liter = array();
for ($i = 0; $i < 10; $i++) {
    $tab_liter[$i] = $wyraz[$i];
}

// 3.3
for ($i = 0; $i < count($tab_liter); $i++) {
    if (ctype_upper($tab_liter[$i])) {
        $tab_liter[$i] = strtolower($tab_liter[$i]);
    } else {
        $tab_liter[$i] = strtoupper($tab_liter[$i]);
    }
}

// 3.4
$losowa_tab = $tab_liter;
shuffle($losowa_tab);


// 4.Glowne
$A = array();
for ($i = 0; $i < 100; $i++) {
    $A[$i] = rand(1, 50);
}

// 4.1
$maks_w = $A[0];
for ($i = 0; $i < count($A); $i++) {
    if ($A[$i] > $maks_w) $maks_w = $A[$i];
}
$ile_maks = 0;
for ($i = 0; $i < count($A); $i++) {
    if ($A[$i] == $maks_w) $ile_maks++;
}

// 4.2
for ($i = 0; $i < count($A); $i++) {
    if ($A[$i] % 2 != 0) {
        echo $A[$i] . " ";
    }
}

// 4.3
for ($i = 1; $i < count($A); $i += 2) {
    echo $A[$i] . " ";
}

// 4.4
$ile_przedzial = 0;
for ($i = 0; $i < count($A); $i++) {
    if ($A[$i] >= 5 && $A[$i] < 15) {
        echo $A[$i] . " ";
        $ile_przedzial++;
    }
}

// 4.5
$a = 25; 
$najblizszy = $A[0];
$roznica = abs($A[0] - $a);
for ($i = 0; $i < count($A); $i++) {
    if (abs($A[$i] - $a) < $roznica) {
        $roznica = abs($A[$i] - $a);
        $najblizszy = $A[$i];
    }
}

// 4.6
$ind_min = 0;
for ($i = 0; $i < count($A); $i++) {
    if ($A[$i] < $A[$ind_min]) $ind_min = $i;
}
$poprzednik = ($ind_min > 0) ? $A[$ind_min - 1] : "brak";
$nastepnik = ($ind_min < count($A) - 1) ? $A[$ind_min + 1] : "brak";

// 4.7
$wieksze_10 = array();
for ($i = 0; $i < count($A); $i++) {
    if ($A[$i] > 10) $wieksze_10[] = $A[$i];
}

// 4.8
$B = array();
$ak_suma = 0;
for ($i = 0; $i < count($A); $i++) {
    $ak_suma += $A[$i];
    $B[$i] = $ak_suma;
}

// 4.9
rsort($A);

// 4.10
$zliczenia = array_count_values($A);
foreach ($zliczenia as $liczba => $ile) {
    if ($ile >= 3) echo $liczba . " ";
}


// 5.1
$fib = array();
$fib[0] = 0;
$fib[1] = 1;
for ($i = 2; $i < 100; $i++) {
    $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
}

// 5.2
$potegi = array();
for ($i = 0; $i < 100; $i++) {
    $potegi[$i] = pow(2, $i);
}

// 5.3
$ciag_3 = array();
for ($i = 0; $i < 100; $i++) {
    $ciag_3[$i] = ($i + 1) * 3;
}

// 5.4
$ciag_poteg2 = array();
for ($i = 0; $i < 100; $i++) {
    $ciag_poteg2[$i] = pow(2, $i + 1);
}
?>
