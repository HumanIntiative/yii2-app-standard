#!/bin/bash
rsync -avz -P \
	--exclude='.git/' \
	--exclude='.phpintel/' \
	--exclude='docker' \
	--exclude='runtime/' \
	--exclude='vendor' \
	--exclude='Dockerfile-app' \
	--exclude='Dockerfile-db' \
	--exclude='composer.lock' \
	--exclude='docker-compose.yml' \
	. username@0.0.0.0:/taruh/folder/di/sini;