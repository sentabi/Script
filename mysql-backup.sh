#!/bin/bash

backup_path=/backup/mysql
tgl=`date +%Y-%m-%d`

if [ ! -d $backup_path/$tgl ]
then
	mkdir -p $backup_path/$tgl
	if [ ! -f $backup_path/$tgl/db-`date +%H%M`.sql ]
	then 
			mysqldump --all-databases | gzip -c > $backup_path/$tgl/db-`date +%H%M`.sql
	fi 
else
	if [ ! -f $backup_path/$tgl/db-`date +%H%M`.sql ]
	then 
			mysqldump --all-databases | gzip -c > $backup_path/$tgl/db-`date +%H%M`.sql
	fi 
	# echo $tgl " File sudah ada."
fi
