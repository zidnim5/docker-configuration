<img src="icon.png" align="right" />

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

# Official Documentation
See the website for documentation on deploying different versions of the container:

- Latest release: https://www.pgadmin.org/docs/pgadmin4/latest/container_deployment.html
- Nightly snapshot build: https://www.pgadmin.org/docs/pgadmin4/development/container_deployment.html
