use MusicList;
select * from MusicList;

use MusicList;
select id, title, artist, price
	from Musiclist
where artist = "ray Conniff";

use MusicList;
select *
	from Musiclist
where artist like '%jo%';

use MusicList;
select price from MusicList
where ID = 1;
update MusicList.Price 
set Price = 1.25
where ID =1;

use MusicList;
GRANT ALL PRIVILEGES ON MusicList TO mjtshopper IDENTIFIED BY 'chevyII327';
FLUSH PRIVILEGES;

use MusicList;
GRANT ALL PRIVILEGES ON MusicList TO marshall IDENTIFIED BY 'chevyII327';
FLUSH PRIVILEGES;

use MusicList;
insert into MusicList (id, title, artist, price)
values	(7, "I Walk the Line", "Johnny Cash", 1.00 ),
		(8, "The Lonely Bull", "Herb Alpert", .75 ),
		(9, "Take Me Home, Country Roads", "John Denver", .50 ),
		(10, "A Taste of Honey", "Herb Alpert", .50 );

