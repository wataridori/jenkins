truncate `profile`;
truncate `category`;
truncate `device`;
INSERT INTO `profile` (`email`, `employee_code`, `secret_key`) VALUES ('fent.admin@framgia.com', 'FENTADMIN', 'fentadmin');
INSERT INTO `profile` (`email`, `employee_code`) VALUES ('nguyen.thi.huyen@framgia.com', 'B120043');
INSERT INTO `profile` (`email`, `employee_code`) VALUES ('nguyen.van.giang@framgia.com', 'B120040');
INSERT INTO `profile` (`email`, `employee_code`) VALUES ('le.van.ban@framgia.com', 'B120041');
INSERT INTO `profile` (`email`, `employee_code`) VALUES ('pham.tri.thai@framgia.com', 'B120042');
INSERT INTO `profile` (`email`, `employee_code`) VALUES ('nguyen.ngoc.du@framgia.com', 'B120045');
INSERT INTO `profile` (`email`, `employee_code`) VALUES ('nguyen.thi.ngoc@framgia.com', 'B120038');
INSERT INTO `profile` (`email`, `employee_code`) VALUES ('tran.duc.thang@framgia.com', 'B120050');
INSERT INTO `profile` (`email`, `employee_code`) VALUES ('nguyen.trung.quan@framgia.com', 'B120036');

INSERT INTO `category` (`name`) VALUES ('MacBook');
INSERT INTO `category` (`name`) VALUES ('Dell');
INSERT INTO `category` (`name`) VALUES ('Android Tablet');
INSERT INTO `category` (`name`) VALUES ('Android Smartphone');
INSERT INTO `category` (`name`) VALUES ('Iphone');
INSERT INTO `category` (`name`) VALUES ('Ipad');
INSERT INTO `category` (`name`) VALUES ('Other');

INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('MacBook_01', 'White', 'M01', 'busy', 1);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('MacBook_02', 'Black', 'M02', 'free', 1);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('MacBook_03', 'Black', 'M03', 'free', 1);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('MacBook_04', 'White', 'M04', 'busy', 1);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('Dell_01', 'Black', 'D01', 'busy', 2);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('Dell_02', 'Black', 'D02', 'busy', 2);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('Dell_03', 'Black', 'D03', 'busy', 2);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('Dell_04', 'Black', 'D04', 'free', 2);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('Tablet_01', 'White', 'T01', 'busy', 3);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('Tablet_02', 'White', 'T02', 'free', 3);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('Tablet_03', 'White', 'T03', 'free', 3);
INSERT INTO `device` (`name`, `description`, `serial`, `status`, `category_id`) VALUES ('Tablet_04', 'White', 'T04', 'busy', 3);


