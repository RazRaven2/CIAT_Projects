function AnalyzeFileContent {
     param (
          [string]$path
     )
     try {
          $content = Get-Content -Path $path -ErrorAction Stop
          $lines = $content | Measure-Object -Line | select-object -ExpandProperty Lines 
          $words = $content| Measure-Object -Word | select-object -ExpandProperty Words 
          $characters = $content| Measure-Object -Character | select-object -ExpandProperty Characters 
     
          return $lines, $words, $characters     
     }
     catch {
          Write-Host "File not found!" 
     }


     
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