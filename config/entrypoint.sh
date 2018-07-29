#!/bin/sh -e

# Cek apakah DB krs sudah dibuat
file="/var/lib/mysql/krs"
if [ -d "$file" ]
then
	echo "$file found."
else
	cd /var/lib/mysql/;
	tar xpvzf mysql.tar.gz;
fi
