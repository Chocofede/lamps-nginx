This is a Proof of Concept that has all in place to start developing:
- Two web servers, with apache and PHP.
- One MySQL server.
- One Nginx server to work as reverse proxy to connect them.

You'll get two servers connected to the MySQL database, and the Nginx server is addressing the connections from the host to the servers.

To access the Webservers, you MUST configure your host. In Ubuntu, you'll have to add the following lines to /etc/hosts:

```
127.0.0.1 app1.webserver.es
127.0.0.1 app2.webserver.es
127.0.0.1 mysql.webserver.es
```

Once that is done, go to root of the project and execute 

```
docker compose up -d
```

If all went well, when accessing http://app1.webserver.es/ you will get 

```
Successful database conexion on app1.webserver.es.
```

