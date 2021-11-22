<img src="icon.png" align="right" />

# PGADMIN WEB [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome#readme)

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

> Open http://localhost:5050 on your broser. 

Official documentation https://www.pgadmin.org/docs/pgadmin4/latest/container_deployment.html
