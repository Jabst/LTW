CREATE TABLE events (
	id INTEGER PRIMARY KEY,
	title VARCHAR,
	introduction VARCHAR,
	fulltext VARCHAR
	
);

CREATE TABLE users(
	id INTEGER PRIMARY KEY,
	name VARCHAR,
	email VARCHAR	
);

CREATE TABLE attendance(
	user_id INTEGER REFERENCES users(id),
	events_id INTEGER REFERENCES events(id),
	PRIMARY KEY(user_id,events_id)
);

CREATE TABLE comments(
	id INTEGER PRIMARY KEY,
	event_id INTEGER REFERENCES events(id),
	user_id INTEGER REFERENCES users(id),
	text VARCHAR
);


INSERT INTO events VALUES (null, 'Evento 1', 'Isto é o evento1, vamos todos a pesca', 'Vamos todos a pesca da sardinha, tragam as redes.

P.S: Tragam o pão');
INSERT INTO events VALUES (null, 'Evento de teste2' , 'Este evento foi cancelado porque esta a chvoer muito', 'Tragam um guarda chuva e uns bidões para guardar a água, assim já nao passamos seca este verão.

Cumps.');
INSERT INTO events VALUES (null, 'Fazer exercicio', 'Regium Sanctum Obsidium moratori di res ni', 'Siegfried is einen kleine davai davai

Post Scriptum Ipsum Lorem Wingardium Leviosa');
