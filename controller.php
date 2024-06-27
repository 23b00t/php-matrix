<?php
include_once 'matrix_functions.php';
session_start();

// Rücksetzfunkionalität  
if (isset($_POST['unset'])) {
    session_unset();
    return header("Location: index.php");
}

// Redirect von Startseite an Auswertungsseite mit übergabe von Auswahl über Seesion
if (isset($_POST["submit"])) {
    if ($_POST["switch"] == "all") {
        $_SESSION["option"] = "all";
    }
    return header("Location: result.php");
}

// Erzeuge Matrix
function generateMatrix() {
    return initMatrix();
} 

// Finde nicht singuläre Werte und gib das Ergebnis aus
function run($matrix) {
    $map = findMultiples($matrix);
    // Logik um mit Schalter auf Index view über Session
    // zu entscheiden welche der beiden Funktionen genutzt werden soll 
    if (isset($_SESSION["option"])) {
        printResult($map);
    } else {
        printResult(findMultiplesInTwoSquare($map));
    }
} 

// Funktion um das initale Testarray zu formatieren und auszugeben
function printArray($array) {
    echo "Initiale Daten: <br>";
    foreach ($array as $subArray) {
        echo "[";
        foreach ($subArray as $value) {
            echo $value . " ";
        }
        echo "] <br>"; 
    }
} 

