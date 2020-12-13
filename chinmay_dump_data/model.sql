-- MySQL dump 10.13  Distrib 8.0.22, for Win64 (x86_64)
--
-- Host: localhost    Database: hr
-- ------------------------------------------------------
-- Server version	8.0.22

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bank_account`
--

DROP TABLE IF EXISTS `bank_account`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `bank_account` (
  `Account_no` varchar(50) NOT NULL,
  `Acc_Holder_Name` varchar(100) NOT NULL,
  `IFSC` varchar(40) NOT NULL,
  `Branch` varchar(50) DEFAULT NULL,
  `Bank_Name` varchar(70) NOT NULL,
  `EmployeeID` varchar(20) NOT NULL,
  PRIMARY KEY (`EmployeeID`,`Account_no`),
  CONSTRAINT `bank_account_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_account`
--

LOCK TABLES `bank_account` WRITE;
/*!40000 ALTER TABLE `bank_account` DISABLE KEYS */;
INSERT INTO `bank_account` VALUES ('465','Mansi','8910','Noida','HDFC','1'),('123','Chinmay ','1234','Lucknow','Syndicate','2'),('213','Anirban','4567','Kolkata','Kotak','3'),('897','Kaustubh','1112','Mangalore','Axis','4'),('879','Shraddha','1314','Bekaar','SBI','5');
/*!40000 ALTER TABLE `bank_account` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `complaints`
--

DROP TABLE IF EXISTS `complaints`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `complaints` (
  `CompID` int NOT NULL AUTO_INCREMENT,
  `Comp_status` varchar(20) NOT NULL,
  `Date_Time_Stamp` datetime NOT NULL,
  `Subject` varchar(50) NOT NULL,
  `Body` text NOT NULL,
  `Category` varchar(30) NOT NULL,
  `EmployeeID` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`CompID`),
  KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `complaints_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `complaints`
--

LOCK TABLES `complaints` WRITE;
/*!40000 ALTER TABLE `complaints` DISABLE KEYS */;
/*!40000 ALTER TABLE `complaints` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credentials`
--

DROP TABLE IF EXISTS `credentials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `credentials` (
  `LoginID` varchar(50) NOT NULL,
  `Password` varchar(65) NOT NULL,
  `EmployeeID` varchar(20) NOT NULL,
  PRIMARY KEY (`EmployeeID`,`LoginID`),
  UNIQUE KEY `LoginID` (`LoginID`),
  CONSTRAINT `credentials_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credentials`
--

LOCK TABLES `credentials` WRITE;
/*!40000 ALTER TABLE `credentials` DISABLE KEYS */;
INSERT INTO `credentials` VALUES ('a','a','1'),('b','b','2'),('c','c','3'),('d','d','4'),('e','e','5'),('f','f','6');
/*!40000 ALTER TABLE `credentials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dept`
--

DROP TABLE IF EXISTS `dept`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dept` (
  `DeptID` varchar(15) NOT NULL,
  `Dept_name` varchar(50) NOT NULL,
  PRIMARY KEY (`DeptID`),
  UNIQUE KEY `Dept_name` (`Dept_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dept`
--

LOCK TABLES `dept` WRITE;
/*!40000 ALTER TABLE `dept` DISABLE KEYS */;
INSERT INTO `dept` VALUES ('2','Finance'),('4','HR'),('3','Marketing'),('1','Technical');
/*!40000 ALTER TABLE `dept` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation`
--

DROP TABLE IF EXISTS `designation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `designation` (
  `DesignationID` varchar(15) NOT NULL,
  `Designation_name` varchar(50) NOT NULL,
  `Factor` double NOT NULL DEFAULT '1',
  `Annual_paid_leave` int NOT NULL DEFAULT '0',
  `Base_salary` double NOT NULL DEFAULT '0',
  `DeptID` varchar(15) NOT NULL,
  PRIMARY KEY (`DesignationID`),
  KEY `DeptID` (`DeptID`),
  CONSTRAINT `designation_ibfk_1` FOREIGN KEY (`DeptID`) REFERENCES `dept` (`DeptID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation`
--

LOCK TABLES `designation` WRITE;
/*!40000 ALTER TABLE `designation` DISABLE KEYS */;
INSERT INTO `designation` VALUES ('10','Consultant',2,15,5000000,'2'),('11','CEO',3,0,50000000,'3'),('12','CTO',5,30,5000000,'1'),('13','Senior Engineer',5,30,5000000,'1'),('14','Junior engineer',6,30,5000000,'1'),('15','HR',5,20,2500000,'4');
/*!40000 ALTER TABLE `designation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `designation_salary`
--

DROP TABLE IF EXISTS `designation_salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `designation_salary` (
  `DesignationID` varchar(15) NOT NULL,
  `IT` double NOT NULL DEFAULT '0',
  `PF` double NOT NULL DEFAULT '0',
  `Pay_grade` double NOT NULL DEFAULT '0',
  `Bonus` double NOT NULL DEFAULT '0',
  `FBPA` double NOT NULL DEFAULT '0',
  `TA` double NOT NULL DEFAULT '0',
  `HRA` double NOT NULL DEFAULT '0',
  `INSURANCE` double NOT NULL DEFAULT '0',
  PRIMARY KEY (`DesignationID`),
  CONSTRAINT `designation_salary_ibfk_1` FOREIGN KEY (`DesignationID`) REFERENCES `designation` (`DesignationID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `designation_salary`
--

LOCK TABLES `designation_salary` WRITE;
/*!40000 ALTER TABLE `designation_salary` DISABLE KEYS */;
/*!40000 ALTER TABLE `designation_salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee` (
  `EmployeeID` varchar(20) NOT NULL,
  `First_name` varchar(30) NOT NULL,
  `Middle_name` varchar(30) DEFAULT NULL,
  `Last_name` varchar(60) NOT NULL,
  `DOB` date NOT NULL,
  `Address_House_no` varchar(10) NOT NULL,
  `Address_Street_name` varchar(100) NOT NULL,
  `Address_Landmark` varchar(50) DEFAULT NULL,
  `Address_State` varchar(40) NOT NULL,
  `Address_City` varchar(40) NOT NULL,
  `Aadhar_no` varchar(20) NOT NULL,
  `DesignationID` varchar(15) DEFAULT NULL,
  `emp` varchar(4) NOT NULL,
  PRIMARY KEY (`EmployeeID`),
  UNIQUE KEY `Aadhar_no` (`Aadhar_no`),
  KEY `employee_ibfk_1` (`DesignationID`),
  CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`DesignationID`) REFERENCES `designation` (`DesignationID`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('1','Mansi','','Vikram','2001-02-13','3','Jaypee golf green','Kalypso Court','Uttar Pradesh','Noida','1234565','10','User'),('2','Chinmay ',NULL,'Srivastava','2001-01-03','7','Surendra Nagar','High Court','Uttar Pradesh','Lucknow','1234566','11','User'),('3','Anirban','Roy','Mukherjee','2001-08-23','1','Sonakachi','Pata nahi','West Bengal','Kolkata','1234567','12','User'),('4','Kaustubh',NULL,'Kumar','2001-05-05','2','ssup','Pata nahi 2','Karnataka','Mangalore','1234568','13','User'),('5','Shraddha',NULL,'Jaiswal','2001-01-31','9','Sonalpura','Ghat','Uttar Pradesh','Varansi','1234569','14','User'),('6','hr',NULL,'0','2001-01-01','7','YOLO','khai','Uttar Pradesh','hell','1233210','15','HR');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee_mobile_no`
--

DROP TABLE IF EXISTS `employee_mobile_no`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `employee_mobile_no` (
  `EmployeeID` varchar(20) NOT NULL,
  `Mobile_no` varchar(15) NOT NULL,
  PRIMARY KEY (`EmployeeID`,`Mobile_no`),
  UNIQUE KEY `Mobile_no` (`Mobile_no`),
  CONSTRAINT `employee_mobile_no_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee_mobile_no`
--

LOCK TABLES `employee_mobile_no` WRITE;
/*!40000 ALTER TABLE `employee_mobile_no` DISABLE KEYS */;
INSERT INTO `employee_mobile_no` VALUES ('4','0123456789'),('3','1234567980'),('2','6306814770'),('5','6392900217'),('1','8800245555');
/*!40000 ALTER TABLE `employee_mobile_no` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leaves`
--

DROP TABLE IF EXISTS `leaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `leaves` (
  `LeaveID` int NOT NULL AUTO_INCREMENT,
  `Leave_from` date NOT NULL,
  `Leave_end` date NOT NULL,
  `Leave_type` varchar(30) NOT NULL,
  `Status` varchar(20) NOT NULL,
  `EmployeeID` varchar(20) NOT NULL,
  PRIMARY KEY (`LeaveID`),
  KEY `EmployeeID` (`EmployeeID`),
  CONSTRAINT `leaves_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leaves`
--

LOCK TABLES `leaves` WRITE;
/*!40000 ALTER TABLE `leaves` DISABLE KEYS */;
/*!40000 ALTER TABLE `leaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Temporary view structure for view `profile`
--

DROP TABLE IF EXISTS `profile`;
/*!50001 DROP VIEW IF EXISTS `profile`*/;
SET @saved_cs_client     = @@character_set_client;
/*!50503 SET character_set_client = utf8mb4 */;
/*!50001 CREATE VIEW `profile` AS SELECT 
 1 AS `EmployeeID`,
 1 AS `DeptID`,
 1 AS `DesignationID`,
 1 AS `First_name`,
 1 AS `Middle_name`,
 1 AS `Last_name`,
 1 AS `DOB`,
 1 AS `Address_House_no`,
 1 AS `Address_Street_name`,
 1 AS `Address_Landmark`,
 1 AS `Address_State`,
 1 AS `Address_City`,
 1 AS `Aadhar_no`,
 1 AS `emp`,
 1 AS `Mobile_no`,
 1 AS `Designation_name`,
 1 AS `Factor`,
 1 AS `Annual_paid_leave`,
 1 AS `Base_salary`,
 1 AS `Dept_name`,
 1 AS `LoginID`,
 1 AS `Password`,
 1 AS `Account_no`,
 1 AS `Acc_Holder_Name`,
 1 AS `IFSC`,
 1 AS `Branch`,
 1 AS `Bank_Name`,
 1 AS `RATING`*/;
SET character_set_client = @saved_cs_client;

--
-- Table structure for table `project`
--

DROP TABLE IF EXISTS `project`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project` (
  `ProjectID` varchar(20) NOT NULL,
  `Project_name` varchar(50) NOT NULL,
  `Start_date` date NOT NULL,
  `Expenditure` double NOT NULL DEFAULT '0',
  `Priority` smallint NOT NULL DEFAULT '3',
  `Budget` double NOT NULL DEFAULT '0',
  `End_date` date DEFAULT NULL,
  `DeptID` varchar(15) DEFAULT NULL,
  `Manager` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ProjectID`),
  KEY `DeptID` (`DeptID`),
  KEY `Manager` (`Manager`),
  CONSTRAINT `project_ibfk_1` FOREIGN KEY (`DeptID`) REFERENCES `dept` (`DeptID`) ON DELETE SET NULL,
  CONSTRAINT `project_ibfk_2` FOREIGN KEY (`Manager`) REFERENCES `employee` (`EmployeeID`) ON DELETE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project`
--

LOCK TABLES `project` WRITE;
/*!40000 ALTER TABLE `project` DISABLE KEYS */;
/*!40000 ALTER TABLE `project` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `project_employee`
--

DROP TABLE IF EXISTS `project_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `project_employee` (
  `EmployeeID` varchar(20) NOT NULL,
  `ProjectID` varchar(20) NOT NULL,
  `Remark` text,
  `Rating` smallint DEFAULT NULL,
  `Feedback` text,
  KEY `EmployeeID` (`EmployeeID`),
  KEY `ProjectID` (`ProjectID`),
  CONSTRAINT `project_employee_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE,
  CONSTRAINT `project_employee_ibfk_2` FOREIGN KEY (`ProjectID`) REFERENCES `project` (`ProjectID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `project_employee`
--

LOCK TABLES `project_employee` WRITE;
/*!40000 ALTER TABLE `project_employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `project_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rating`
--

DROP TABLE IF EXISTS `rating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `rating` (
  `EmployeeID` varchar(20) NOT NULL,
  `Month` smallint NOT NULL,
  `Year` int NOT NULL,
  `rate` smallint NOT NULL DEFAULT '0',
  PRIMARY KEY (`EmployeeID`,`Month`,`Year`),
  CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rating`
--

LOCK TABLES `rating` WRITE;
/*!40000 ALTER TABLE `rating` DISABLE KEYS */;
INSERT INTO `rating` VALUES ('1',3,2019,2),('1',7,2020,5),('2',1,2020,3),('3',2,2020,5),('4',5,2015,4);
/*!40000 ALTER TABLE `rating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `salary`
--

DROP TABLE IF EXISTS `salary`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `salary` (
  `EmployeeID` varchar(20) NOT NULL,
  `Performance_Based` double NOT NULL,
  PRIMARY KEY (`EmployeeID`),
  CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`EmployeeID`) REFERENCES `employee` (`EmployeeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `salary`
--

LOCK TABLES `salary` WRITE;
/*!40000 ALTER TABLE `salary` DISABLE KEYS */;
INSERT INTO `salary` VALUES ('1',500000),('2',500000),('3',350000),('4',150000),('5',100000);
/*!40000 ALTER TABLE `salary` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Final view structure for view `profile`
--

/*!50001 DROP VIEW IF EXISTS `profile`*/;
/*!50001 SET @saved_cs_client          = @@character_set_client */;
/*!50001 SET @saved_cs_results         = @@character_set_results */;
/*!50001 SET @saved_col_connection     = @@collation_connection */;
/*!50001 SET character_set_client      = utf8mb4 */;
/*!50001 SET character_set_results     = utf8mb4 */;
/*!50001 SET collation_connection      = utf8mb4_0900_ai_ci */;
/*!50001 CREATE ALGORITHM=UNDEFINED */
/*!50013 DEFINER=`root`@`localhost` SQL SECURITY DEFINER */
/*!50001 VIEW `profile` AS select `e`.`EmployeeID` AS `EmployeeID`,`des`.`DeptID` AS `DeptID`,`e`.`DesignationID` AS `DesignationID`,`e`.`First_name` AS `First_name`,`e`.`Middle_name` AS `Middle_name`,`e`.`Last_name` AS `Last_name`,`e`.`DOB` AS `DOB`,`e`.`Address_House_no` AS `Address_House_no`,`e`.`Address_Street_name` AS `Address_Street_name`,`e`.`Address_Landmark` AS `Address_Landmark`,`e`.`Address_State` AS `Address_State`,`e`.`Address_City` AS `Address_City`,`e`.`Aadhar_no` AS `Aadhar_no`,`e`.`emp` AS `emp`,`m`.`Mobile_no` AS `Mobile_no`,`des`.`Designation_name` AS `Designation_name`,`des`.`Factor` AS `Factor`,`des`.`Annual_paid_leave` AS `Annual_paid_leave`,`des`.`Base_salary` AS `Base_salary`,`dept`.`Dept_name` AS `Dept_name`,`credentials`.`LoginID` AS `LoginID`,`credentials`.`Password` AS `Password`,`bank_account`.`Account_no` AS `Account_no`,`bank_account`.`Acc_Holder_Name` AS `Acc_Holder_Name`,`bank_account`.`IFSC` AS `IFSC`,`bank_account`.`Branch` AS `Branch`,`bank_account`.`Bank_Name` AS `Bank_Name`,`rating`.`RATING` AS `RATING` from ((((((`employee` `e` left join `employee_mobile_no` `m` on((`e`.`EmployeeID` = `m`.`EmployeeID`))) left join `designation` `des` on((`e`.`DesignationID` = `des`.`DesignationID`))) left join `dept` on((`des`.`DeptID` = `dept`.`DeptID`))) left join `credentials` on((`e`.`EmployeeID` = `credentials`.`EmployeeID`))) left join `bank_account` on((`e`.`EmployeeID` = `bank_account`.`EmployeeID`))) left join (select avg(`rating`.`rate`) AS `RATING`,`rating`.`EmployeeID` AS `EmployeeID` from `rating` group by `rating`.`EmployeeID`) `rating` on((`e`.`EmployeeID` = `rating`.`EmployeeID`))) */;
/*!50001 SET character_set_client      = @saved_cs_client */;
/*!50001 SET character_set_results     = @saved_cs_results */;
/*!50001 SET collation_connection      = @saved_col_connection */;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-12-14  0:50:08
