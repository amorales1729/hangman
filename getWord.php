<?php
$filePath = '/home/anthonyd/data/words.txt'; 

if (file_exists($filePath)) {
   $words = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
   if (!empty($words)) {
       $selectedWord = trim($words[array_rand($words)]);
       echo json_encode(['word' => $selectedWord]);
   } else {
       echo json_encode(['error' => 'No words found.']);
   }
} else {
   echo json_encode(['error' => 'File not found.']);
}
?>
