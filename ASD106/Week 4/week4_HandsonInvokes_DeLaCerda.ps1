Invoke-Item -Path "test.txt"
Write-Output "Notepad is open, please close to proceed"

while(Get-Process -Name notepad -ErrorAction SilentlyContinue){
    start-Sleep  -Seconds 1
}

Write-Output "Notepad has been closed"

$desktop = [System.Environment]::GetFolderPath('Desktop')
$labFilesPath = Join-Path -Path $desktop -ChildPath "LabFiles"

New-Item -Path $labFilesPath -ItemType Directory -Force
Write-Output "Created LabFiles Folder on Desktop"

$sampleFilePath = Join-Path $labFilesPath -ChildPath "SampleFile.txt"
New-Item -Path $sampleFilePath -ItemType File -Force
Write-Output "Created file named SampleFile.txt"

Write-Output "Please open SampleFile.txt from LabFiles folder on Desktop and edit."
Read-Host -Prompt "Press Enter after you are done editing file"

$fileContent = Get-Content -Path $sampleFilePath
Write-Output "Content of file: "
Write-Output $fileContent

$backup = Join-Path -Path $labFilesPath -ChildPath "Backup"
New-Item -Path $backup -ItemType Directory -Force
Write-Output "Created the Backup folder"

Copy-Item -Path $sampleFilePath -Destination $backup
Write-Output "Copied the file to the Backup folder"

Remove-Item -Path $sampleFilePath -Force
Write-Output "SampleFile.txt has been deleted from LabFiles folder"

Write-Output "Rename-Item: Renames files or folders"
Write-Output "Set-ItemProperty: Renames files or folders"
Write-Output "Set-Ac1: Renames files or folders"