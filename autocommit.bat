set commitdate=%date:~6,4%%date:~3,2%%date:~0,2%
git status
git add .
git status
git commit -m "AutoCommit_%commitdate%"
git push
pause