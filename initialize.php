<?php
$sql = "create table affidavit
(
reg_no int UNIQUE,
name_of_sponcer VARCHAR(20) NOT NULL,
relation_to_student VARCHAR(20) NOT NULL,
bank_balance VARCHAR(20) NOT NULL,
immovable_property_description VARCHAR(20) NOT NULL,
notary_name VARCHAR(20),
registration_number_of_notary VARCHAR(20),
address_of_notary VARCHAR(20),
value_of_stamp_paper VARCHAR(20),
date_of_affidavit DATE NOT NULL,
affidavit_number VARCHAR(20)
);";
$conn->query($sql);
$sql = "create table bankloan
(
reg_no int UNIQUE,
bank_name VARCHAR(40) NOT NULL,
loan_amount INT NOT NULL,
location_of_bank VARCHAR(100),
loan_sanction_date DATE NOT NULL,
loan_sanction_reference_number VARCHAR(20),
property_value_placed VARCHAR(20)
);";
$conn->query($sql);
$sql = "create table ca
(
reg_no int UNIQUE,
name_of_consultent VARCHAR(20) NOT NULL,
consultent_register_no INT NOT NULL,
address VARCHAR(200) NOT NULL,
description_of_income1 VARCHAR(100) NOT NULL,
description_of_income2 VARCHAR(100) NOT NULL,
description_of_income3 VARCHAR(100) NOT NULL,
description_of_income4 VARCHAR(100) NOT NULL,
description_of_income5 VARCHAR(100) NOT NULL,
description_of_income6 VARCHAR(100) NOT NULL,
description_of_income7 VARCHAR(100) NOT NULL,
description_of_income8 VARCHAR(100) NOT NULL,
income_value1 VARCHAR(20) NOT NULL,
income_value2 VARCHAR(20) NOT NULL,
income_value3 VARCHAR(20) NOT NULL,
income_value4 VARCHAR(20) NOT NULL,
income_value5 VARCHAR(20) NOT NULL,
income_value6 VARCHAR(20) NOT NULL,
income_value7 VARCHAR(20) NOT NULL,
income_value8 VARCHAR(20) NOT NULL
);";
$conn->query($sql);
$sql = "create table coe
(
reg_no int UNIQUE,
date_of_transfer1 DATE NOT NULL,
report_id int PRIMARY KEY,
IFSC VARCHAR(20) NOT NULL,
bank_name VARCHAR(20) NOT NULL,
bank_location VARCHAR(20) NOT NULL,
message_sender_reference VARCHAR(20),
sender_sequence_number VARCHAR(20),
message_type VARCHAR(20),
reciever_address VARCHAR(20),
non_delivery_warning VARCHAR(20),
delivery_notification_request VARCHAR(20),
message_status VARCHAR(20),
creater_user_id VARCHAR(20),
verifier_user_id VARCHAR(20),
authoriser_user_id VARCHAR(20),
transaction_reference_number VARCHAR(20),
bank_operation_code VARCHAR(20),
date_of_transfer2 DATE NOT NULL,
currency_type VARCHAR(20),
amount VARCHAR(20),
ordering_customer_name VARCHAR(20),
ordering_customer_address VARCHAR(20),
ordering_instituation_name VARCHAR(20),
ordering_instituation_address VARCHAR(20),
account_number_of_beneficiaries VARCHAR(20),
remitance_info VARCHAR(20),
sender_to_reciver_info_remitance VARCHAR(200)
);";
$conn->query($sql);
$sql = "create table health
(
reg_no int UNIQUE,
panel_hospital_name VARCHAR(20) NOT NULL,
panel_doctor VARCHAR(20) NOT NULL,
date_of_visit DATE NOT NULL,
status VARCHAR(20) NOT NULL
);";
$conn->query($sql);
$sql = "create table ielts
(
reg_no int UNIQUE,
module1 VARCHAR(20) NOT NULL,
center_no int PRIMARY KEY,
date_of_exam DATE NOT NULL,
module2 VARCHAR(20) NOT NULL,
candidate_no VARCHAR(20) NOT NULL,
family_name VARCHAR(20),
first_name VARCHAR(20),
candidate_id int,
date_of_birth DATE NOT NULL,
sex VARCHAR(10) NOT NULL,
scheme_code VARCHAR(20) NOT NULL,
country_of_origin VARCHAR(20) NOT NULL,
first_language VARCHAR(20) NOT NULL,
repeating_ielts VARCHAR(20) NOT NULL,
previous_test_date DATE NOT NULL,
previous_test_center VARCHAR(20) NOT NULL,
listening VARCHAR(20) NOT NULL,
reading VARCHAR(20) NOT NULL,
writing VARCHAR(20) NOT NULL,
speaking VARCHAR(20) NOT NULL,
overall_band_score VARCHAR(20) NOT NULL,
test_report_form_number VARCHAR(20) NOT NULL,
date_of_score DATE NOT NULL
);";
$conn->query($sql);
$sql = "create table jewel
(
reg_no int UNIQUE,
jeweller_registration_number int PRIMARY KEY,
bill_no int NOT NULL,
name VARCHAR(20) NOT NULL,
address VARCHAR(200) NOT NULL,
date_of_report DATE NOT NULL,
description VARCHAR(200),
tag_number VARCHAR(20) NOT NULL,
net_weight VARCHAR(20) NOT NULL,
rate  VARCHAR(20) NOT NULL
);";
$conn->query($sql);
$sql = "create table pass
(
reg_no int UNIQUE,
passport_no int NOT NULL,
date_of_issue1 DATE NOT NULL,
place_of_issue VARCHAR(20) NOT NULL,
authorised_signatory_name VARCHAR(20) NOT NULL,
date_of_issue2 DATE NOT NULL
);";
$conn->query($sql);
?>