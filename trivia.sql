CREATE DATABASE trivia

CREATE TABLE public.user(
    id serial4 NOT NULL,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(32) NOT NULL,
    CONSTRAINT user_pkey PRIMARY KEY (id)
);

CREATE TABLE public.question(
    id serial4 NOT NULL,
    type VARCHAR(10) NOT NULL,
    difficulty VARCHAR(10) NOT NULL,
    category VARCHAR(50) NOT NULL,
    text VARCHAR(255) NOT NULL,
    correct_answer VARCHAR(255) NOT NULL,
    incorrect_answers VARCHAR(255) NOT NULL,
    CONSTRAINT question_pkey PRIMARY KEY (id)
);

CREATE TABLE public.game(
    id serial4 NOT NULL,
    user_id int4 NOT NULL,
    start_date TIMESTAMPTZ DEFAULT timezone('UTC', CURRENT_TIMESTAMP) - INTERVAL '3 hour',
    CONSTRAINT game_pkey PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES "user"(id)
);

CREATE TABLE public.game_questions(
    id serial4 NOT NULL,
    game_id int4 NOT NULL,
    question_id int4 NOT NULL,
    user_answer VARCHAR(255) NOT NULL,
    is_correct BOOLEAN NOT NULL,
    CONSTRAINT game_questions_pkey PRIMARY KEY (id),
    FOREIGN KEY (game_id) REFERENCES game(id),
    FOREIGN KEY (question_id) REFERENCES question(id)
);
