function AnalyzeFileContent {
     param (
          [string]$path
     )
     $lines = (Get-Content $path).lines
     $words = (Get-Content $path).words
     $characters = (Get-Content $path).characters

     return $lines, $words, $characters
}

function GenerateReport {
     param (
          [int]$lines,
          [int]$words,
          [int]$characters
     )

     Write-Host "The number of lines: $lines"
     Write-Host "The number of words: $words"
     Write-Host "The number of characters: $characters"
}

$filePath = Read-Host -Prompt "Enter file path for analysis: "

$lines, $words, $characters = AnalyzeFileContent -path $filePath

GenerateReport -lines $lines -words $words -characters $characters