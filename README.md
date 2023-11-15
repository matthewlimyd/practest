# ICT3203-Practical
This web application runs on L.E.M.P framework

# Run 🏃‍♂️
To start the services / containers
```
docker-compose up -d
```

# Containers 
- Nginx as webserver
- PHP as language
- MySQL as database
- MySQL as database
- Git-Server as git server

# Git-Server
Goto web code directory
```
cd ./src
```
```
git init
```
Commit the codes
```
git add
```
```
git commit -m "add login features"
```
Adding local repository git server as remote
```
git remote add origin http://localhost:3000/repository.git
```
Push codes to branch
```
git push -u origin master
```