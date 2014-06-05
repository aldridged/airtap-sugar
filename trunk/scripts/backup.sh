#!/bin/sh
# Data Backup Script

# Get timestamp
DM=$(date +%d)

# Dump database
/usr/bin/mysqldump -u airtap_crm -pItgoesto11! airtap_crm >/var/www/airtap.lairdscomputer.com/backup/airtap_crm-$DM.sql
/usr/bin/gzip /var/www/airtap.lairdscomputer.com/backup/airtap_crm-$DM.sql

# Dump files
/bin/tar cvzf /var/www/airtap.lairdscomputer.com/backup/airtap_crm-$DM.tar.gz /var/www/airtap.lairdscomputer.com/htdocs

# Keep 30 days
/usr/bin/find /var/www/airtap.lairdscomputer.com/backup -ctime +30 -exec rm '{}' \;

