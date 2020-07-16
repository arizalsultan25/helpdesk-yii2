--
-- PostgreSQL database dump
--

-- Dumped from database version 12.3
-- Dumped by pg_dump version 12.3

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- Name: thread; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.thread (
    thread_id integer NOT NULL,
    title character varying(160) NOT NULL,
    description text,
    image bytea,
    date date,
    status character varying(20)
);


ALTER TABLE public.thread OWNER TO postgres;

--
-- Name: thread_thread_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.thread_thread_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.thread_thread_id_seq OWNER TO postgres;

--
-- Name: thread_thread_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.thread_thread_id_seq OWNED BY public.thread.thread_id;


--
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    username character varying(16) NOT NULL,
    name character varying(90) NOT NULL,
    email character varying(90) NOT NULL,
    password character varying(16) NOT NULL
);


ALTER TABLE public.users OWNER TO postgres;

--
-- Name: thread thread_id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.thread ALTER COLUMN thread_id SET DEFAULT nextval('public.thread_thread_id_seq'::regclass);


--
-- Data for Name: thread; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.thread (thread_id, title, description, image, date, status) FROM stdin;
1	Can't update assets data	i can't update asset data in siswa web	\N	2020-09-10	on progress
2	graphic is not appear	statistic data is not appear in my dashboard	\N	2019-10-12	solved
\.


--
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (username, name, email, password) FROM stdin;
sultan	Sultan Arizal	ariz@gmail.com	123456
ardita	Ardita Hardi	arditahardi15@gmail.com	123456
\.


--
-- Name: thread_thread_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.thread_thread_id_seq', 2, true);


--
-- Name: thread thread_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.thread
    ADD CONSTRAINT thread_pkey PRIMARY KEY (thread_id);


--
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (username);


--
-- PostgreSQL database dump complete
--

