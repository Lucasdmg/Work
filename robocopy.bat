**SEGUNDA**

rem ***** LUCAS DOMINGUES *****

start /w C:\robocopy\robocopy.exe D:\Backup\DATABASE  D:\Backup\SEGUNDA\DATABASE /V /X /S /E /mir /NP /R:1 /W:5 /log+:C:\robocopy\logs\SEGUNDA-DB.log
REM start /w C:\robocopy\robocopy.exe D:\Backup\DATABASE D:\Backup\SEGUNDA\DATABASE /V /X /S /E /mir /NP /R:1 /W:5 /log+:C:\robocopy\logs\SEGUNDA-DB.log

**TERCA**
rem ***** LUCAS DOMINGUES *****

start /w C:\robocopy\robocopy.exe D:\Backup\DATABASE  D:\Backup\TERCA\DATABASE /V /X /S /E /mir /NP /R:1 /W:5 /log+:C:\robocopy\logs\TERCA-DB.log
REM start /w C:\robocopy\robocopy.exe D:\Backup\DATABASE D:\Backup\TERCA\DATABASE /V /X /S /E /mir /NP /R:1 /W:5 /log+:C:\robocopy\logs\TERCA-DB.log

**Sucessivamente**
**após salve como Semana.bat ex: Segunda.bat depois agendar uma tarefa com execução dos mesmos diariamente.**
