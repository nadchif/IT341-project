# Baptism Information System

Source: https://itsourcecode.com/free-projects/php-project/baptism-information-management-system-version-1-0-0-1/

**PS: Please disregard the how to run instructions in the link above, use the instructions below as the environment will be setup by docker instead.**

# Running locally.

### Requirements:

- Docker Compose

### Steps

1. Clone repository
2. Start Docker
3. Copy the file `sample.env` to `.env`

    Mac/Linux
    ```shell
    cp sample.env .env
    ```

    Windows
    ```bat
    copy sample.env .env
    ```

4. Enter the command

```shell 
docker-compose up -d
``` 
in your terminal 

5. Open http://localhost:80/PIMS to view system