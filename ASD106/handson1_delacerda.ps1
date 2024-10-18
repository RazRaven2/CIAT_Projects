 
 $userName = Read-Host "Enter your name: "
 Write-Host "Thank you $userName"

 $counter = Read-Host "Enter a number"
 $counter = [int]$counter

 while ($counter -ge 1){
     Write-Host "$counter"
     Start-Sleep -Seconds 1
     $counter--
 }
  Write-Host "Countdown Complete"
 

 


