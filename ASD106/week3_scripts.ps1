$current_time = Get-Date
Write-Host $current_time

Set-PSDebug -Trace 1

try {
     New-Item -Path "C:\Test\processes.txt" -ItemType File
     Get-Process | Out-File -FilePath "C:\Test\processes.txt"
     New-Item -Path "C:\Test\Backup" -ItemType Directory
     Move-Item -Path "C:\Test\processess.txt" -Destination "C:\Test\Backup\processes.txt"
}
catch [System.IO]{"An IO error occurred"}
finally {"Script Completed"}