# untuk mengecek crontab untuk semua user di system
for user in $(cut -f1 -d: /etc/passwd); do crontab -u $user -l; done

