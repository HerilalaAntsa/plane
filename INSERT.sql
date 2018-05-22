--
-- PostgreSQL database dump
--

-- Dumped from database version 9.4.5
-- Dumped by pg_dump version 9.4.5
-- Started on 2017-05-28 21:45:49

SET statement_timeout = 0;
SET lock_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SET check_function_bodies = false;
SET client_min_messages = warning;

--
-- TOC entry 180 (class 3079 OID 11855)
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- TOC entry 2047 (class 0 OID 0)
-- Dependencies: 180
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET search_path = public, pg_catalog;

--
-- TOC entry 532 (class 1247 OID 210223)
-- Name: action; Type: TYPE; Schema: public; Owner: postgres
--

CREATE TYPE action AS ENUM (
    'rendez-vous',
    'pas interesse',
    'rappeler'
);


ALTER TYPE action OWNER TO postgres;

SET default_tablespace = '';

SET default_with_oids = false;

--
-- TOC entry 173 (class 1259 OID 210231)
-- Name: agent; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE agent (
    idagent integer NOT NULL,
    nomagent character varying(25) NOT NULL,
    prenomagent character varying(25),
    emailagent character varying(25) NOT NULL,
    passwordagent character varying(20) NOT NULL
);


ALTER TABLE agent OWNER TO postgres;

--
-- TOC entry 172 (class 1259 OID 210229)
-- Name: agent_idagent_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE agent_idagent_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE agent_idagent_seq OWNER TO postgres;

--
-- TOC entry 2048 (class 0 OID 0)
-- Dependencies: 172
-- Name: agent_idagent_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE agent_idagent_seq OWNED BY agent.idagent;


--
-- TOC entry 175 (class 1259 OID 210240)
-- Name: appel; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE appel (
    idappel integer NOT NULL,
    idagent integer NOT NULL,
    idclient integer NOT NULL,
    dateappel date NOT NULL,
    appelentrant boolean NOT NULL,
    dureeappel double precision NOT NULL,
    action action NOT NULL,
    dateaction date,
    commentaireaction text
);


ALTER TABLE appel OWNER TO postgres;

--
-- TOC entry 174 (class 1259 OID 210238)
-- Name: appel_idappel_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE appel_idappel_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE appel_idappel_seq OWNER TO postgres;

--
-- TOC entry 2049 (class 0 OID 0)
-- Dependencies: 174
-- Name: appel_idappel_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE appel_idappel_seq OWNED BY appel.idappel;


--
-- TOC entry 177 (class 1259 OID 210254)
-- Name: client; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE client (
    idclient integer NOT NULL,
    nomclient character varying(25) NOT NULL,
    prenomclient character varying(25),
    emailclient character varying(30) NOT NULL,
    telephoneclient character varying(14) NOT NULL
);


ALTER TABLE client OWNER TO postgres;

--
-- TOC entry 176 (class 1259 OID 210252)
-- Name: client_idclient_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE client_idclient_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE client_idclient_seq OWNER TO postgres;

--
-- TOC entry 2050 (class 0 OID 0)
-- Dependencies: 176
-- Name: client_idclient_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE client_idclient_seq OWNED BY client.idclient;


--
-- TOC entry 179 (class 1259 OID 210263)
-- Name: manager; Type: TABLE; Schema: public; Owner: postgres; Tablespace: 
--

CREATE TABLE manager (
    idmanager integer NOT NULL,
    nommanager character varying(25) NOT NULL,
    prenommanager character varying(25),
    emailmanager character varying(30) NOT NULL,
    passwordmanager character varying(20) NOT NULL
);


ALTER TABLE manager OWNER TO postgres;

--
-- TOC entry 178 (class 1259 OID 210261)
-- Name: manager_idmanager_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE manager_idmanager_seq
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE manager_idmanager_seq OWNER TO postgres;

--
-- TOC entry 2051 (class 0 OID 0)
-- Dependencies: 178
-- Name: manager_idmanager_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE manager_idmanager_seq OWNED BY manager.idmanager;


--
-- TOC entry 1903 (class 2604 OID 210234)
-- Name: idagent; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY agent ALTER COLUMN idagent SET DEFAULT nextval('agent_idagent_seq'::regclass);


--
-- TOC entry 1904 (class 2604 OID 210243)
-- Name: idappel; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY appel ALTER COLUMN idappel SET DEFAULT nextval('appel_idappel_seq'::regclass);


--
-- TOC entry 1905 (class 2604 OID 210257)
-- Name: idclient; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY client ALTER COLUMN idclient SET DEFAULT nextval('client_idclient_seq'::regclass);


--
-- TOC entry 1906 (class 2604 OID 210266)
-- Name: idmanager; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY manager ALTER COLUMN idmanager SET DEFAULT nextval('manager_idmanager_seq'::regclass);


--
-- TOC entry 2033 (class 0 OID 210231)
-- Dependencies: 173
-- Data for Name: agent; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO agent (idagent, nomagent, prenomagent, emailagent, passwordagent) VALUES (1, 'Rabe', 'Narivo', 'narivo@gmail.com', 'narivo');
INSERT INTO agent (idagent, nomagent, prenomagent, emailagent, passwordagent) VALUES (2, 'Rakotomananjo', 'Antsa Herilala', 'antsa@gmail.com', 'antsa');


--
-- TOC entry 2052 (class 0 OID 0)
-- Dependencies: 172
-- Name: agent_idagent_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('agent_idagent_seq', 2, true);


--
-- TOC entry 2035 (class 0 OID 210240)
-- Dependencies: 175
-- Data for Name: appel; Type: TABLE DATA; Schema: public; Owner: postgres
--



--
-- TOC entry 2053 (class 0 OID 0)
-- Dependencies: 174
-- Name: appel_idappel_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('appel_idappel_seq', 1, false);


--
-- TOC entry 2037 (class 0 OID 210254)
-- Dependencies: 177
-- Data for Name: client; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO client (idclient, nomclient, prenomclient, emailclient, telephoneclient) VALUES (4, 'Rabe', 'Mamy', 'mamy@gmail.com', '261332400777');
INSERT INTO client (idclient, nomclient, prenomclient, emailclient, telephoneclient) VALUES (1, 'Muller', 'Thomas', 'thomas@gmail.com', '261332400774');
INSERT INTO client (idclient, nomclient, prenomclient, emailclient, telephoneclient) VALUES (3, 'Kroos', 'Tony', 'tony@gmail.com', '261332400776');
INSERT INTO client (idclient, nomclient, prenomclient, emailclient, telephoneclient) VALUES (2, 'Ronaldo', 'Cristiano', 'cristiano@gmail.com', '261332400775');
INSERT INTO client (idclient, nomclient, prenomclient, emailclient, telephoneclient) VALUES (5, 'Pogba', 'Paul', 'paul@gmail.com', '261332400778');
INSERT INTO client (idclient, nomclient, prenomclient, emailclient, telephoneclient) VALUES (6, 'Zidane', 'Zinedine', 'zinedine@gmail.com', '261332400779');
INSERT INTO client (idclient, nomclient, prenomclient, emailclient, telephoneclient) VALUES (7, 'Buffon', 'Gigi', 'buffon@gmail.com', '261332400780');


--
-- TOC entry 2054 (class 0 OID 0)
-- Dependencies: 176
-- Name: client_idclient_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('client_idclient_seq', 7, true);


--
-- TOC entry 2039 (class 0 OID 210263)
-- Dependencies: 179
-- Data for Name: manager; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO manager (idmanager, nommanager, prenommanager, emailmanager, passwordmanager) VALUES (1, 'Rakoto', 'Herilala', 'herilala@gmail.com', 'herilala');


--
-- TOC entry 2055 (class 0 OID 0)
-- Dependencies: 178
-- Name: manager_idmanager_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('manager_idmanager_seq', 1, true);


--
-- TOC entry 1909 (class 2606 OID 210236)
-- Name: pk_agent; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY agent
    ADD CONSTRAINT pk_agent PRIMARY KEY (idagent);


--
-- TOC entry 1913 (class 2606 OID 210248)
-- Name: pk_appel; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY appel
    ADD CONSTRAINT pk_appel PRIMARY KEY (idappel);


--
-- TOC entry 1917 (class 2606 OID 210259)
-- Name: pk_client; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY client
    ADD CONSTRAINT pk_client PRIMARY KEY (idclient);


--
-- TOC entry 1920 (class 2606 OID 210268)
-- Name: pk_manager; Type: CONSTRAINT; Schema: public; Owner: postgres; Tablespace: 
--

ALTER TABLE ONLY manager
    ADD CONSTRAINT pk_manager PRIMARY KEY (idmanager);


--
-- TOC entry 1907 (class 1259 OID 210237)
-- Name: agent_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX agent_pk ON agent USING btree (idagent);


--
-- TOC entry 1910 (class 1259 OID 210249)
-- Name: appel_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX appel_pk ON appel USING btree (idappel);


--
-- TOC entry 1911 (class 1259 OID 210251)
-- Name: client_appel_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX client_appel_fk ON appel USING btree (idclient);


--
-- TOC entry 1915 (class 1259 OID 210260)
-- Name: client_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX client_pk ON client USING btree (idclient);


--
-- TOC entry 1918 (class 1259 OID 210269)
-- Name: manager_pk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE UNIQUE INDEX manager_pk ON manager USING btree (idmanager);


--
-- TOC entry 1914 (class 1259 OID 210250)
-- Name: teleoperateur_appel_fk; Type: INDEX; Schema: public; Owner: postgres; Tablespace: 
--

CREATE INDEX teleoperateur_appel_fk ON appel USING btree (idagent);


--
-- TOC entry 1921 (class 2606 OID 210270)
-- Name: fk_appel_client_ap_client; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY appel
    ADD CONSTRAINT fk_appel_client_ap_client FOREIGN KEY (idclient) REFERENCES client(idclient) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 1922 (class 2606 OID 210275)
-- Name: fk_appel_teleopera_agent; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY appel
    ADD CONSTRAINT fk_appel_teleopera_agent FOREIGN KEY (idagent) REFERENCES agent(idagent) ON UPDATE RESTRICT ON DELETE RESTRICT;


--
-- TOC entry 2046 (class 0 OID 0)
-- Dependencies: 5
-- Name: public; Type: ACL; Schema: -; Owner: postgres
--

REVOKE ALL ON SCHEMA public FROM PUBLIC;
REVOKE ALL ON SCHEMA public FROM postgres;
GRANT ALL ON SCHEMA public TO postgres;
GRANT ALL ON SCHEMA public TO PUBLIC;


-- Completed on 2017-05-28 21:45:50

--
-- PostgreSQL database dump complete
--

