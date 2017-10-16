# Setup guidelines

Make sure you have installed all the technologies specified in [README.md](https://github.com/IMGIITRoorkee/workshop2017/blob/master/README.md#technologies-used-lamp-wamp-or-mamp).

## Database
Run the following commands to set up the database and create necessary tables
```
Open MySQL console from WAMP server // For Windows users
$ mysql -u root -p // For linux users

> create database workshop;
> use workshop;
> create table pastebin (
      id int(6) unsigned primary key auto_increment,
      paste_data text,
      unique_string char(7) not null
    );
```

## Project setup
```
Linux users:
  $ sudo su
  $ cd  /var/www/html/
  $ git clone https://github.com/IMGIITRoorkee/workshop2017.git pastebin
  $ service apache2 start
  
Windows users:
  > Download the project repository to C://wamp64/www/
  > Start the wamp server
```

Visit http://localhost/pastebin/index.php and play with the project.
