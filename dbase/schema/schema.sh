#!/bin/bash
# Install Certific8 database schema
installer="mysql -ucertific8 -pcertific8 certific8"

for ddl in `ls -1 *.ddl`;do
	echo "Installing $ddl"
	echo "SET foreign_key_checks = 0;"  | `$installer`
	cat $ddl | `$installer`
	echo "SET foreign_key_checks = 1;"  | `$installer`
done
