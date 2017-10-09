CREATE TABLE INTAKE(
  -- IDENTIFYING INFORMATION
  FNAME VARCHAR(30) NOT NULL,
  LNAME VARCHAR(30) NOT NULL,
  MI CHAR(1),
  AGE TINYINT(3) NOT NULL,
  GENDER CHAR(1) NOT NULL,
  CS VARCHAR(30), -- NOT SURE WHAT CS IS
  BIRTHDATE DATE,
  BIRTHPLACE VARCHAR(30),
  PROV_ADD VARCHAR(100),
  PES_ADD VARCHAR(100),
  RELIGION VARCHAR(30),
  OCCU VARCHAR(30),
  M_INCOME NUMERIC(8,2), -- MONTHLY INCOME
  CNUM VARCHAR(11), -- CONTACT NUMBER

  -- EDUCATIONAL BACKGROUND
  EDUC_BG VARCHAR(100), -- DROPDOWN NA LANG DIN SIGURO

  -- TYPE OF CLEFT
  CL_LIP VARCHAR(50), -- DROPDOWN
  CL_PALATE VARCHAR(50), -- DROPDOWN

  -- FOR FAMILY COMPOSITION
  FAM_CODE INT UNSIGNED NOT NULL,

  -- PROBLEM PRESENTED
  PROB_PRES VARCHAR(150),

  -- HISTORICAL BACKGROUND
  HIST_BG VARCHAR(150),

  -- ECONOMIC STATUS
  -- Type of Housing
  H_OCCU INT(3), -- NUMBER OF OCCUPANTS
  H_FLRS INT(3), -- NUMBER OF FLOORS
  H_RMS INT(3), -- NUMBER OF ROOMS
  H_STAT VARCHAR(10), -- Status of Housing (Dropdown: New, Old, Remodeled)
  H_OWN VARCHAR(15), -- Ownership (Dropdown: Owned, Rented, Shared, Care Taker)
  -- Type of Toilet / Source of Water
  TOILET VARCHAR(15), -- Type of Toilet (Dropdown: Flush, Water Sealed, Open Pit)
  WATER VARCHAR(15), -- Source of Water (Dropdown: Faucet, Spring, Well, Water Pump)
  -- Monthly Expenses
  E_BILL NUMERIC(8,2), -- ELECTRIC BILL
  FUEL_EXP NUMERIC(8,2),
  WATER_BILL NUMERIC(8,2),
  EDUC_EXP NUMERIC(8,2),
  MED_EXP NUMERIC(8,2),
  FOOD_EXP NUMERIC(8,2),
  RENT_EXP NUMERIC(8,2),
  TRANSPO NUMERIC(8,2),
  CLOTH_EXP NUMERIC(8,2),
  CP_LOAD NUMERIC(8,2), -- CELL PHONE LOAD
  OTHER_EXP NUMERIC(8,2), -- OTHER EXPENSES
  -- Provider of Client's Needs
  P_NAME VARCHAR(50), -- PROVIDER'S FULL NAME
  P_OCCU VARCHAR(30), -- OCCUPATION OF PROVIDER
  P_REL VARCHAR(30), -- RELATIONSHIP TO PATIENT
  P_INC NUMERIC(12,2), -- MONTHLY INCOME OF PROVIDER
  P_NEEDS VARCHAR(100), -- Needs Provided to Patient (Checkbox: Food, Education, Housing, Medical Needs, Clothing, Others)
  -- Other Services Received
  A_NAME VARCHAR(50), -- NAME OF AGENCY
  A_NGO VARCHAR(30), -- not sure about data type
  A_GO VARCHAR(30), -- not sure about data type
  A_SERV VARCHAR(100), -- SERVICES PROVIDED

  -- FAMILY INCOME EVALUATION --
  FAM_INC VARCHAR(500), -- Checkbox or Dropdown

  -- PLAN OF ACTION
  MED_DATE DATE, -- Medical Consultation Date
  MED_REM VARCHAR(100), -- Medical Consultation Remarks
  CP_CLEAR_DATE DATE, -- CP Clearance Date
  CP_CLEAR_REM VARCHAR(100), -- CP Clearance Remarks
  AD_DATE DATE, -- Admission Date
  AD_REM VARCHAR(100), -- Admission Remarks
  SUR_DATE DATE, -- Surgery Date
  SUR_REM VARCHAR(100), -- Surgery Remarks
  DC_DATE DATE, -- Discharge Date
  DC_REM VARCHAR(100), -- Discharge Remarks
  FF_DATE DATE, -- Follow-Up Date
  FF_REM VARCHAR(100), -- Follow-Up Remarks
  O_DATE DATE, -- Others date?
  O_REM VARCHAR(100), -- Others remarks?

  -- WORKER'S ASSESSMENT AND RECOMMENDATIONS
  W_A_R VARCHAR(500),
  
  FOREIGN KEY(FAM_CODE) REFERENCES FAMILY(FAM_CODE) ON UPDATE CASCADE ON DELETE CASCADE
);
