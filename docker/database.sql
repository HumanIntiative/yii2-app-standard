-- Table: public.com_branch

-- DROP TABLE public.com_branch;

CREATE TABLE public.com_branch
(
  id serial,
  branch_name character varying(50),
  location_code character varying(10),
  location character varying(50),
  parent_id integer DEFAULT 0,
  kode_cabang character varying(20),
  branch_address character varying(400),
  branch_phone character varying(50),
  branch_fax character varying(30),
  branch_bankaccount1 character varying(200),
  branch_bankaccount2 character varying(200),
  php_sort smallint DEFAULT 0,
  taxonomy_id integer,
  created_stamp timestamp(0) without time zone,
  created_by integer,
  updated_stamp timestamp(0) without time zone,
  updated_by integer,
  company_id integer,
  CONSTRAINT com_branch_pkey PRIMARY KEY (id)
)
WITH (OIDS=TRUE);

-- Table: public.company

-- DROP TABLE public.company;

CREATE TABLE public.company
(
  id integer NOT NULL,
  company_name character varying(30) NOT NULL,
  guid uuid,
  CONSTRAINT company_pkey PRIMARY KEY (id)
)
WITH (OIDS=FALSE);

-- Table: public.sdm_employee_type

-- DROP TABLE public.sdm_employee_type;

CREATE TABLE public.sdm_employee_type
(
  id integer NOT NULL,
  employee_type character varying(30),
  CONSTRAINT sdm_employee_type_id_key PRIMARY KEY (id)
)
WITH (OIDS=TRUE);

-- Table: public.sdm_employee

-- DROP TABLE public.sdm_employee;

CREATE TABLE public.sdm_employee
(
  id serial,
  user_name character varying(40),
  passwd character varying(100),
  email character varying(100),
  full_name character varying(150),
  user_status integer DEFAULT 0,
  _history history,
  phone_id integer,
  register_date timestamp(0) without time zone,
  branch_id integer,
  guid character varying(40) DEFAULT uuid_generate_v4(),
  is_new_task smallint DEFAULT 0,
  activkey character varying(40),
  parent_alias_id integer,
  company_id integer NOT NULL DEFAULT 1,
  auth_key character varying(40),
  expired_key integer,
  donor_no character varying(20),
  address text,
  postal_code character varying(10),
  location_id integer,
  npwp_no character varying(24),
  npwz_no character varying(24),
  is_donor integer DEFAULT 1,
  country_id integer DEFAULT 100,
  fax_id integer,
  bank_account_id integer,
  marketer_id integer,
  donor_type_id integer,
  text_searchable tsvector,
  last_login date,
  is_valid smallint,
  donor_no_old character varying(15),
  website character varying(50),
  phone_mark smallint DEFAULT 0,
  mail_mark smallint DEFAULT 1,
  updated_validity timestamp without time zone,
  note text,
  alias_name character varying(30),
  created_by integer,
  created_stamp timestamp without time zone,
  updated_by integer,
  updated_stamp timestamp without time zone,
  is_new smallint DEFAULT 1,
  has_idcard smallint DEFAULT 0,
  remainder_date smallint,
  remainder_message character varying(160),
  address_full text,
  phone_no_full text,
  blood_type character varying(2),
  data_source character varying(100),
  donor_company_id integer,
  birth_place character varying(40),
  birth_date date,
  sex integer,
  starting_date date,
  ending_date date,
  is_employee integer DEFAULT 1,
  position_id integer,
  is_marketer integer DEFAULT 0,
  employee_type_id integer DEFAULT 4,
  permanent_address text,
  current_phone_no character varying(15),
  permanent_phone_no character varying(15),
  identity_no character varying(30),
  marital_status integer DEFAULT 0,
  user_image character(100),
  branch_id_financial integer,
  is_external_orphan_admin smallint NOT NULL DEFAULT 0, -- dipakai DATABASEYATIM
  nip character varying(12),
  CONSTRAINT sdm_employee_pkey PRIMARY KEY (id),
  CONSTRAINT sdm_employee_fk FOREIGN KEY (employee_type_id)
      REFERENCES public.sdm_employee_type (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE SET NULL,
  CONSTRAINT sdm_employee_fk1 FOREIGN KEY (branch_id)
      REFERENCES public.com_branch (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT sdm_employee_fk2 FOREIGN KEY (branch_id_financial)
      REFERENCES public.com_branch (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT sdm_employee_fk3 FOREIGN KEY (company_id)
      REFERENCES public.company (id) MATCH SIMPLE
      ON UPDATE CASCADE ON DELETE RESTRICT,
  CONSTRAINT sdm_employee_donor_no_key UNIQUE (donor_no),
  CONSTRAINT sdm_employee_nip_key UNIQUE (nip),
  CONSTRAINT sdm_employee_user_name_key UNIQUE (user_name)
)
INHERITS (public.php_donor_personal)
WITH (OIDS=TRUE);