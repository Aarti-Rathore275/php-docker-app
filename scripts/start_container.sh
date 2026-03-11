#!/bin/bash

docker stop php-app || true
docker rm php-app || true

docker run -d -p 80:80 http://202533526587.dkr.ecr.us-east-1.amazonaws.com/php-docker-app