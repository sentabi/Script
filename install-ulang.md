# INGET!!!

### - backup 

#### /var/www
```
tar zcvf www.tar.gz /var/www
```

#### MySQL
```
mysqldump --all-databases > mysql.sql
```

#### HOME
```
/home
```
#### fstab
```
scp /etc/fstab backup:/home/tmp
```

#### thunderbird
```
rsync -av ~/.thunderbird backup:/home/tmp/.thunderbird
```
