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
- -p : 5432 port is used by default. 
- -v : This parameter is related to the Docker Volume feature. Please do not change the second path because data is in this path by default.
- -d : I will run detached mode(background mode). 

Sometimes you need to do this :
```
firewall-cmd --permanent --zone=trusted --add-port=5432/tcp
```

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

- https://docs.docker.com/samples/postgresql_service/
- https://hackernoon.com/how-to-install-postgresql-with-docker-quickly-ki7g363m
- https://github.com/moby/moby/issues/1143
- Latest release: https://www.pgadmin.org/docs/pgadmin4/latest/container_deployment.html
- Nightly snapshot build: https://www.pgadmin.org/docs/pgadmin4/development/container_deployment.html
