<?php

function initMatrix() {
    // Testdaten:
    // return $matrix = [
    //                    [5, 3, 6, 9], 
    //                    [6, 5, 4, 1], 
    //                    [4, 9, 8, 7], 
    //                    [8, 1, 2, 8]
    //                  ];

    // return $matrix = [
    //                    [7, 6, 5, 9],
    //                    [0, 6, 5, 0],
    //                    [7, 0, 5, 9],
    //                    [4, 3, 4, 5]
    //                  ];

    $matrix = [];  

    // Erzeuge 4 Spalten und 4 Reihen und weiße jedem Feld eine Zufallszahl zu
    for ($row = 0; $row <= 3; $row++) {
        for ($column = 0; $column <= 3; $column++) {
            $matrix[$row][$column] = rand(0, 9);
        }
    }

    return $matrix;
}

// Vielfache in 2x2 Array finden
// FIXed: Fälle behandeln in denen die Koordianten z. B. an Position 0 und 2 in
// der gleichen 2x2 Submatrix liegen. 2 for loops?
         
function findMultiplesInTwoSquare($map) {
    $result = [];
    foreach ($map as $element => $coordinates) {

        $count = count($coordinates);

        for ($i = 0; $i < $count; $i++) {
            for ($j=$i + 1; $j < $count; $j++) { 
                // Vergleiche die absolute Differenz der Koordinaten. Sie sollte kleiner gleich 1 sein, wenn 
                // sie in einer 2x2 Submatrix liegen. 
                if ((abs($coordinates[$i][0] - $coordinates[$j][0]) <= 1) &&  
                    (abs($coordinates[$i][1] - $coordinates[$j][1]) <= 1)) {
                    $result[$element][] = $coordinates[$i];
                    $result[$element][] = $coordinates[$j];
                }
            }
        }

        // Remove duplicates!!!
        // https://stackoverflow.com/questions/8641889/how-to-use-php-serialize-and-unserialize
        if (isset($result[$element])) { 
            $result[$element] = array_map("unserialize", array_unique(array_map("serialize", $result[$element])));
        } 
    }
    return $result;
}

// Erzeuge ein assoziatives Array mit den ursprünglichen Zahlen als Key und den
// Koordinaten ihres Vorkommens als Value  
function findMultiples($matrix) {
    $map = [];

    foreach ($matrix as $rowIdx => $row) {
         foreach ($row as $colIdx => $value) {
            // $value ist hier die eigentliche Zahl die durch die Syntax [] = das 
            // nachfolgende Array aus den Koordinaten angehangen bekommt
            // https://stackoverflow.com/questions/3206020/push-an-item-to-an-associative-array-in-php
            $map[$value][] = [$rowIdx, $colIdx];
         }
    }
    return $map;
}

// Erzeuge den Tabellenkörper mit den Ergebnissen  
function printResult($map) {
    // Iteriere durch das Ergebnisarray und erhalte $element, die Zahl, und $coordinates, ein Array 
    // das Arrays enthält, die zwei Zahlen, die Koordinaten beinhalten
    foreach ($map as $element => $coordinates) {
        if (count($coordinates) == 1) {
            continue;
        }
        echo "<tr>";        
        echo "<td scope='row'>" . $element . "</td>";
        
        echo "<td scope='row'>"; 
        // Extrahiere die Koordinaten  
        foreach ($coordinates as $coordinatePair) {
            echo $coordinatePair[0] . " | " . $coordinatePair[1] . "<br>";
        }
        echo "</td>";
        echo "</tr>";
    }
}
