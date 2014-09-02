#!/bin/bash
# Install Certific8 database

installer="mysql -uroot -proot"

DB="certific8";
USER=$DB;
PASSWD=$DB;

echo "create database ${DB};" | `${installer}`
echo "grant usage on *.* to ${USER}@localhost identified by '${PASSWD}';" | `${installer}`
echo "grant all privileges on ${USER}.* to ${USER}@localhost ;" | `${installer}`
