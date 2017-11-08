# this will create our DB if it doesn't currently exist
create database if not exists `rutgers_ecomm`;

# uses the database, meaning everything we're doing from this point on is being done
# inside the rutgers_ecomm database
use `rutgers_ecomm`;

# we're creating our first table
# the table name is going to be contact_list
create table `contact_list` (
   `id` int(11) unsigned not null auto_increment,
   `name` varchar(150) not null,
   `email_address` varchar(200) not null,
   `website` varchar(100) default null,
   `content` text default null,
   `created_at` timestamp null default null,
   `was_contacted` tinyint(1) not null default '0', # boolean in mySQL is just a tinyint(1)
   # keys and indexes come next, it's just easier to read if you
   # put them here
   primary key (id), # always need a primary key
   unique key `contact_list_email_address_unique` (email_address), # unique keys mean you can only have ONE of these in the table, this is great for email addresses or usernames
   key `contact_list_name_index` (name) # standard index, will make searching by name faster

   # ENGINE MySQL ships with two engines by default
   # myisam
   # innodb
   # in modern versions of MySQL it will default to InnoDB, but we specifically set it
   # here to be sure.
   # InnoDB allows for row-locking which is important when doing transaction based
   # things. Row-locking means if a transaction is occuring you can stop other
   # users/systems from messing with the table row while you're trying to do something
   # it will also allow you to "roll back" a transaction should something
   # fail while you're working on it.
   #
   # This is important.
   #
   # The last thing you want is a transaction to FAIL but to still SHIP a product
   # to someone. InnoDB also has foreign key capabilities which are needed to set up
   # relationships between tables
   #
   # CHARSET/COLLATE utf8mb4?
   # MySQL's version of UTF-8 character encoding wasn't true UTF-8, this could lead to
   # issues where your expecting characters to come out/go into the DB one way, but they
   # don't come back the way you expect.
   #
   # utf84mb was created to address this issue. We set the CHARSET and COLLATE to these
   # because it will better match our standards in PHP.
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;