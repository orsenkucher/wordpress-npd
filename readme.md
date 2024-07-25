1. run docker compose, then Ctrl + C
2. Move .zip and installer.php to wordpress dir
3. run docker compose and open http://localhost/installer.php
4. Database Connection: 
- Action: Empty Database
- Host: npd-wordpress-db
- Database: wordpress
- User: wordpress
- Password: <from .env: MYSQL_PASSWORD>
5. Log in to Admin Panel with original site credentials
