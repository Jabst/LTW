PRAGMA foreign_keys = ON;

CREATE TABLE events (
	id INTEGER PRIMARY KEY,
	title VARCHAR,
	introduction VARCHAR,
	fulltext VARCHAR,
	user_id INTEGER REFERENCES users(id),
	image_id INTEGER REFERENCES images(id),
	event_type VARCHAR
);

CREATE TABLE users(
	id INTEGER PRIMARY KEY,
	name VARCHAR,
	email VARCHAR,
	password VARCHAR,
	image_id INTEGER REFERENCES images(id)
);

CREATE TABLE attendance(
	user_id INTEGER,
	events_id INTEGER,
	FOREIGN KEY(user_id) REFERENCES users(id),
	FOREIGN KEY(events_id) REFERENCES events(id)	
);

CREATE TABLE comments(
	id INTEGER PRIMARY KEY,
	event_id INTEGER REFERENCES events(id),
	user_id INTEGER REFERENCES users(id),
	text VARCHAR
);

CREATE TABLE images(
	id INTEGER PRIMARY KEY
);


