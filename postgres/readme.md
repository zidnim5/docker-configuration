<img src="icon.png" align="right" />

# POSTGRES SQL
Open terminal & run command below :

```
docker run --name postgrescli \ 
--network=app (opsional) \
-v /data:/var/lib/postgresql/data \
-e POSTGRES_DB=LocalDB  \
-e POSTGRES_USER=postgreuser \ 
-e POSTGRES_PASSWORD=SuperSecret \
-p 5432:5432 \
-d postgres
```
- --name : I set a name for the container.
- -e POSTGRES_USER : I set the database username.
- -e POSTGRES_PASSWORD : I set the database password.
- -p : 5432 port is used by default. But it can be changed this according to preference. Local port and container port can be set separately. The first port is for local, and the second is for container.
- -v : This parameter is related to the Docker Volume feature. This is important for not losing data. With this feature, I synchronize with the folder containing the data in the database and a folder of my choice on the computer or server. When the container is closed or restarted for any reason, it can be easily started with the same data. The first path can be any folder you prefer. I set it to /data as an example. Please do not change the second path because data is in this path by default.
- -d : I will run detached mode(background mode). If you run it without using it, the docker container will be stopped when you press the Ctrl + C combination or close the terminal screen. This is undesirable because the container should be running in the background.

# PGADMIN WEB

Open terminal & run command below :

```
     docker pull dpage/pgadmin4
```
```
     docker volume create postgresql
```
```
     docker run --name name_container -p 5050:80 --network=app(opsional) \
     -v postgresql:/app(opsional)  \ 
     -e "PGADMIN_DEFAULT_EMAIL=email@domain.com" \
     -e "PGADMIN_DEFAULT_PASSWORD=SuperSecret" \
     -l "traefik.frontend.rule=PathPrefix:/pgadmin4" \
     -d dpage/pgadmin4
```
```
     Open http://localhost:5050 on your browser. 
```

# Documentation
See the website for documentation on deploying different versions of the container:

- https://docs.docker.com/samples/postgresql_service/
- https://hackernoon.com/how-to-install-postgresql-with-docker-quickly-ki7g363m
- Latest release: https://www.pgadmin.org/docs/pgadmin4/latest/container_deployment.html
- Nightly snapshot build: https://www.pgadmin.org/docs/pgadmin4/development/container_deployment.html
