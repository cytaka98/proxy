<?php
// מאפשר גישה לכל המקורות
header("Access-Control-Allow-Origin: *"); 

// מגדיר את סוג התוכן ל-JSON
header("Content-Type: application/json"); 

// כתובת ה-API של התראות צבע אדום
$url = "https://tzevadom.com/api/alerts"; 

// שליחת בקשה לכתובת ה-API
$response = file_get_contents($url);

// מחזיר את המידע כ-JSON
echo $response; 
