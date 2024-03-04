to update system, install and start docker, run 

```
sudo dnf update
sudo dnf install docker
sudo systemctl start docker
```

make docker start auto at boot

```
sudo systemctl enable docker
```

to display docker version

```
docker --version
```

to make the docker image, run

```
docker build -t my-php-app .
```

to run the docker image, run

```
docker run -d -p 8080:80 my-php-app
```


