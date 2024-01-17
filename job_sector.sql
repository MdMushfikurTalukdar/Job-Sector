-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2023 at 01:05 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_sector`
--

-- --------------------------------------------------------

--
-- Table structure for table `desg`
--

CREATE TABLE `desg` (
  `d_id` int(11) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_pic` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `desg`
--

INSERT INTO `desg` (`d_id`, `d_name`, `d_pic`) VALUES
(3, 'Cybersecurity Analysis', 'cyber.jpg'),
(4, 'Data Scientist', 'data.jpeg'),
(5, 'Software Developer', 'developer.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `key_word`
--

CREATE TABLE `key_word` (
  `s_id` int(11) NOT NULL,
  `word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `key_word`
--

INSERT INTO `key_word` (`s_id`, `word`) VALUES
(1, 'master'),
(1, 'man'),
(5, 'cybersecurity'),
(5, 'security'),
(6, 'goverment'),
(6, 'national'),
(7, 'payment'),
(7, 'banking'),
(11, 'web'),
(11, 'javascript'),
(12, 'backend'),
(12, 'server'),
(13, 'stack'),
(13, 'architecture'),
(8, 'dataset'),
(8, 'analytics'),
(9, 'artificial'),
(9, 'AI'),
(10, 'healthcare'),
(10, 'science');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `ques` varchar(1000) NOT NULL,
  `one` varchar(100) NOT NULL,
  `two` varchar(100) NOT NULL,
  `three` varchar(100) NOT NULL,
  `four` varchar(100) NOT NULL,
  `correct` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`ques`, `one`, `two`, `three`, `four`, `correct`) VALUES
('he works for the master mind man', 'A', 'b', 'c', 'd', 'd'),
('he works for none', 'a', 'b', 'c', 'd', 'd'),
('man in tha middle', 'a', 'b', 'c', 'd', 'a'),
('master in the middle', 'a', 'b', 'c', 'd', 'a'),
('man master ok boss', 'a', 'b', 'c', 'd', 'd'),
('master man mind', 'a', 'v', 'x', 's', 's'),
('What is the primary goal of cybersecurity?', 'Ensuring data availability', 'Protecting sensitive information from unauthorized access', 'Maximizing network speed', 'Increasing software development efficiency', 'Protecting sensitive information from unauthorized access'),
('What is a DDoS attack in cybersecurity?', 'A virus that spreads via email attachments', 'An attack that steals user credentials', 'A distributed attack that overwhelms a server or network', 'A phishing attack targeting specific individuals', 'A distributed attack that overwhelms a server or network'),
('Which authentication factor is something you know in cybersecurity ?', 'Fingerprint scan', 'Retina scan', 'Password', 'Smart card', 'Password'),
('What does \"SQL injection\" refer to cybersecurity?', 'Exploiting a software vulnerability to gain unauthorized access', 'Intercepting data transmissions', 'Manipulating a database query to access or modify data', 'Stealing credit card information using malware', 'Manipulating a database query to access or modify data'),
('What is the purpose of a firewall in cybersecurity?', 'Blocking unauthorized websites', 'Encrypting sensitive data', 'Preventing malware infections', 'Monitoring network traffic for threats', 'Monitoring network traffic for threats'),
('Which of the following is NOT an example of social engineering?', 'Phishing', 'Shoulder surfing', 'Brute-force attack', 'Impersonation', 'Brute-force attack'),
('What is the role of a penetration tester in cybersecurity?', ' Developing security policies and procedures', 'Investigating security incidents', 'Monitoring network activity in real-time', 'Assessing systems for vulnerabilities through simulated attacks', 'Assessing systems for vulnerabilities through simulated attacks'),
('What does the acronym CIA stand for in cybersecurity? ', 'Cybersecurity Industry Association', 'Confidentiality, Integrity, Availability', 'Cybersecurity Intelligence Agency', 'Cyber Incident Assessment', 'Confidentiality, Integrity, Availability'),
('What is the purpose of an Intrusion Detection System (IDS)?', 'Encrypting sensitive data', 'Preventing unauthorized access ', 'Monitoring for suspicious activities or behavior ', 'Blocking DDoS attacks', 'Monitoring for suspicious activities or behavior'),
('What is the concept of \"Zero Trust\" in cybersecurity?', 'Trusting all users and devices by default', 'Relying on strong passwords for authentication', 'Verifying and authenticating all network traffic, regardless of source or location', 'Implementing firewalls and antivirus software on all devices', 'Verifying and authenticating all network traffic, regardless of source or location'),
('In the context of government cybersecurity, what does CISO stand for?', 'Cybersecurity Intelligence and Security Officer', 'Chief Information Security Office', 'Cyber Incident Support Officer', 'Central Intelligence and Security Officer', 'Chief Information Security Officer'),
('Which government agency is responsible for cybersecurity in the United States?', 'Federal Bureau of Investigation (FBI)', 'Central Intelligence Agency (CIA)', 'National Security Agency (NSA)', 'Department of Homeland Security (DHS)', 'Department of Homeland Security (DHS)'),
('What is the purpose of FISMA (Federal Information Security Management Act)?', 'Regulating the use of social media by government employees', 'Establishing cybersecurity guidelines for federal agencies', 'Encouraging international cooperation on cybercrime investigations', 'Creating a national cybersecurity task force', 'Establishing cybersecurity guidelines for federal agencies'),
('Which executive order established the framework for improving critical infrastructure cybersecurity in the United States? ', 'Executive Order 13636', 'Executive Order 13718', 'Executive Order 13800', 'Executive Order 13896', 'Executive Order 13800'),
('What is the primary goal of threat intelligence sharing among government agencies?', 'Enhancing international relations', 'Preventing cyberattacks on critical infrastructure', 'Promoting cybersecurity awareness in the public', 'Developing advanced encryption techniques', 'Preventing cyberattacks on critical infrastructure'),
('Which federal law allows the U.S. government to access electronic communications and data in the interest of national security?', 'Electronic Communications Privacy Act (ECPA)', 'USA PATRIOT Act', 'Foreign Intelligence Surveillance Act (FISA)', ' Computer Fraud and Abuse Act (CFAA)', 'Foreign Intelligence Surveillance Act (FISA)'),
('What is the purpose of a Security Operations Center (SOC) in the government sector?', 'Enforcing compliance with cybersecurity regulations', 'Managing physical security of government buildings', 'Monitoring and responding to cybersecurity incidents', 'Conducting background checks on government employees', 'Monitoring and responding to cybersecurity incidents'),
('What is the \"EINSTEIN\" program in the context of government cybersecurity?', 'A government-funded cybersecurity research initiative', 'A framework for international cyber defense cooperation', 'An intrusion detection and prevention system used by federal agencies', 'A protocol for secure communication between government servers', 'An intrusion detection and prevention system used by federal agencies'),
('What is the role of the National Institute of Standards and Technology (NIST) in government cybersecurity?', 'Developing and promoting cybersecurity standards and best practices', 'Conducting cybersecurity investigations and arrests', 'Managing government-owned cybersecurity companies', 'Implementing cybersecurity awareness campaigns', 'Developing and promoting cybersecurity standards and best practices'),
('Which cybersecurity incident response framework is commonly used by government agencies? ', 'NIST Cybersecurity Framework', 'SANS Incident Handling Steps', 'CERT Cybersecurity Incident Handling Process', 'ISO/IEC 27035 Incident Management', ' CERT Cybersecurity Incident Handling Process'),
('In the context of government cybersecurity, what does CISO stand for?', 'Cybersecurity Intelligence and Security Officer', 'Chief Information Security Officer', ' Cyber Incident Support Officer ', 'Central Intelligence and Security Officer', 'Chief Information Security Officer'),
('Which government agency is responsible for cybersecurity in the United States?', 'Federal Bureau of Investigation (FBI)', 'Central Intelligence Agency (CIA)', 'National Security Agency (NSA)', 'Department of Homeland Security (DHS)', 'Department of Homeland Security (DHS)'),
('What is the purpose of FISMA (Federal Information Security Management Act)?', 'Regulating the use of social media by government employees', 'Establishing cybersecurity guidelines for federal agencies', 'Encouraging international cooperation on cybercrime investigations', 'Creating a national cybersecurity task force', 'Establishing cybersecurity guidelines for federal agencies'),
('What is the primary goal of threat intelligence sharing among government agencies?', 'Enhancing international relations', 'Preventing cyberattacks on critical infrastructure', 'Promoting cybersecurity awareness in the public', 'Developing advanced encryption techniques', 'Preventing cyberattacks on critical infrastructure'),
('Which federal law allows the U.S. government to access electronic communications and data in the interest of national security?', 'Electronic Communications Privacy Act (ECPA)', 'USA PATRIOT Act', 'Foreign Intelligence Surveillance Act (FISA)', 'Computer Fraud and Abuse Act (CFAA)', 'Foreign Intelligence Surveillance Act (FISA)'),
('What is the purpose of a Security Operations Center (SOC) in the government sector?', 'Enforcing compliance with cybersecurity regulations', 'Managing physical security of government buildings', 'Monitoring and responding to cybersecurity incidents', 'Conducting background checks on government employees', 'Monitoring and responding to cybersecurity incidents'),
('What is the \"EINSTEIN\" program in the context of government cybersecurity?', 'A government-funded cybersecurity research initiative', 'A framework for international cyber defense cooperation', 'An intrusion detection and prevention system used by federal agencies', 'A protocol for secure communication between government servers', 'An intrusion detection and prevention system used by federal agencies'),
('What is the role of the National Institute of Standards and Technology (NIST) in government cybersecurity?', 'Developing and promoting cybersecurity standards and best practices', 'Conducting cybersecurity investigations and arrests', 'Conducting cybersecurity investigations and arrests', 'Implementing cybersecurity awareness campaigns', 'Developing and promoting cybersecurity standards and best practices'),
('Which cybersecurity incident response framework is commonly used by government agencies? ', 'NIST Cybersecurity Framework', 'SANS Incident Handling Steps', 'CERT Cybersecurity Incident Handling Process', 'ISO/IEC 27035 Incident Management', 'CERT Cybersecurity Incident Handling Process'),
('What is the main purpose of PCI DSS (Payment Card Industry Data Security Standard) compliance in the banking sector?', 'Preventing online banking fraud', 'Ensuring data privacy for bank customers', 'Protecting sensitive payment card information', 'Encrypting financial transactions', 'Protecting sensitive payment card information'),
('What is the role of a SWIFT code in banking cybersecurity?', 'Identifying bank branches for interbank communication', 'Verifying customer identities during online transactions', 'Encrypting data transmitted between banks', 'Protecting ATMs from physical tampering', 'Identifying bank branches for interbank communication'),
('What is the primary purpose of multi-factor authentication in online banking?', 'Simplifying the login process for customers', 'Reducing the need for regular password changes', 'Preventing unauthorized access to accounts ', 'Enabling access to banking services without an internet connection', ' Preventing unauthorized access to accounts'),
('Which type of malware specifically targets banking information and financial transactions?', 'Ransomware', 'Spyware', 'Adware', 'Trojan', 'Trojan'),
('What is the main objective of a red team exercise in the banking sector?', 'Simulating cyberattacks to test the effectiveness of defenses', 'Developing new banking applications and software', 'Identifying potential merger and acquisition targets', 'Assessing employee performance in cybersecurity', 'Simulating cyberattacks to test the effectiveness of defenses'),
('What does the term \"insider threat\" mean in the context of banking cybersecurity?', 'Cyber threats originating from foreign nations', 'Cyberattacks launched by hackers outside the organization', 'Security risks posed by employees or trusted individuals within the organization ', 'Unauthorized access attempts to the bank\'s network', 'Security risks posed by employees or trusted individuals within the organization'),
('Which banking cybersecurity measure aims to protect sensitive data by converting it into a code that is unreadable without a decryption key?', 'Firewall', ' VPN (Virtual Private Network) ', 'SSL/TLS (Secure Sockets Layer/Transport Layer Security)', 'Encryption', 'Encryption'),
('What is the purpose of an anti-skimming device in the banking sector? ', 'Preventing employees from stealing money', 'Detecting fraudulent transactions', 'Protecting ATMs from physical attacks', 'Securing banking servers from DDoS attacks', 'Protecting ATMs from physical attacks'),
('Which banking cybersecurity measure focuses on identifying and managing potential risks before they escalate into significant security incidents? ', 'Incident Response Planning', 'Business Continuity Planning', 'Risk Assessment and Management', 'Employee Training and Awareness', 'Risk Assessment and Management'),
('What is the purpose of tokenization in banking transactions?', 'Preventing unauthorized access to the bank\'s network', 'Generating unique authentication codes for each transaction', 'Encrypting data during transmission between banks', 'Identifying and blocking malicious IP addresses', 'Generating unique authentication codes for each transaction'),
('What does HTML stand for in web development?', 'Hyper Text Markup Language', 'Home Tool Markup Language', ' High Traffic Markup Language', ' Hyperlink and Text Markup Language', 'Hyper Text Markup Language '),
('Which CSS property is used to change the text color of an element? ', ' text-color ', 'color', 'font-color', 'text-style', 'color'),
('Which programming language is primarily used for adding interactivity to web pages?', 'Python', 'JavaScript', 'Java', 'C++', 'JavaScript'),
('What is the purpose of CSS media queries?', 'To include external CSS files ', ' To load images and videos on a webpage', 'To define different styles for different devices and screen sizes', 'To create animations and transitions', 'To define different styles for different devices and screen sizes'),
('Which of the following is NOT a version control system used in web development?', 'Git', 'Subversion', 'Mercurial', 'Node.js', 'Node.js'),
('Which HTML tag is used to link an external CSS file to an HTML document?', '<style>', '<link> ', ' <css>', '<external>', '<link>'),
(' In JavaScript, what does the \"DOM\" stand for?', 'Document Object Model', 'Data Object Model ', 'Digital Object Model', 'Document Oriented Model ', 'Document Object Model'),
('Which JavaScript framework is known for building user interfaces and single-page applications? ', 'React.js', 'AngularJS', 'Vue.js', 'Ember.js ', 'React.js'),
('What is the purpose of a \"callback function\" in JavaScript? ', 'To prevent code duplication', 'To store and manage data in a frontend application', 'To handle asynchronous tasks and events ', 'To define global variables and constants', 'To handle asynchronous tasks and events'),
('Which JavaScript method is used to add or remove elements from an array?', 'splice()', 'push()', 'pop()', 'shift() ', 'splice()'),
('What is the role of a \"transpiler\" in web development?', 'To optimize website loading speed', 'To convert ES6+ code to ES5 for compatibility with older browsers', 'To automatically handle user authentication ', 'To create responsive layouts ', 'To convert ES6+ code to ES5 for compatibility with older browsers'),
('Which CSS property is used to create rounded corners for an element in web development?', 'border-rounding', 'border-radius', 'corner-radius', 'rounded-style', 'border-radius'),
('Which tool can you use to test a frontend web site\'s performance and identify areas for improvement? ', 'Chrome Developer Tools', 'Adobe Photoshop', 'Microsoft Office Suite', 'Eclipse IDE', 'Chrome Developer Tools'),
('What is the purpose of \"localStorage\" in web development?', 'To store cookies and manage user sessions', 'To cache website data for offline access ', 'To store small amounts of data locally in a user\'s browser', ' To manage website security and permissions', 'To store small amounts of data locally in a user\'s browser'),
(' In CSS for web development, what is the \"box model\" used for?', 'To create responsive layouts for different devices', 'To define the layout and spacing of elements in a webpage', ' To create animations and transitions ', 'To manage version control in a project', 'To define the layout and spacing of elements in a webpage'),
('Which JavaScript function is used to select and manipulate HTML elements in the DOM?', 'querySelector()', 'getElementById() ', 'selectElement()', 'findElement()', 'querySelector()'),
('Which JavaScript data type represents a true or false value?', 'String', 'Boolean', 'Number', 'Array', 'Boolean'),
('How do you add comments in JavaScript code?', '/* This is a comment */', '// This is a comment ', '<!-- This is a comment -->', ' # This is a comment', '// This is a comment'),
('Which of the following is a popular CSS framework for building responsive web sites?', 'Bootstrap', 'Django', 'Laravel', 'Spring', 'Bootstrap'),
('What is the purpose of the \"async\" attribute in the <script> tag when including an external JavaScript file?', 'To execute the script synchronously', 'To ensure the script is loaded last on the page', 'To defer the script execution until the page has finished parsing', 'To prevent the script from executing', 'To defer the script execution until the page has finished parsing'),
('What is the primary role of a Backend Developer?', 'Designing the user interface of a website or application', ' Managing databases and server-side logic', ' Creating animations and visual effects', 'Optimizing frontend performance', 'Managing databases and server-side logic'),
('Which programming language is commonly used for backend development?', 'HTML', 'JavaScript', 'Python', 'CSS ', 'Python'),
('What does \"CRUD\" stand for in the context of backend development? ', 'Create, Read, Update, Delete', 'Create, Retrieve, Update, Delete', 'Connect, Retrieve, Update, Dismiss', 'Compile, Run, Upload, Delete ', 'Create, Read, Update, Delete'),
('Which protocol is commonly used for communication between the frontend and backend of a web application?', 'HTTP', 'FTP', 'SMTP', 'TCP', 'HTTP'),
('What is the purpose of a RESTful API in backend development?', 'To create visually appealing user interfaces', 'To manage application logic and workflows', 'To provide a standardized way for different systems to communicate and exchange data ', 'To handle frontend layout and design ', 'To provide a standardized way for different systems to communicate and exchange data'),
('Which database type is generally used for storing structured data in backend development? ', 'Relational database ', 'NoSQL database', 'Graph database', 'In-memory database', 'Relational database'),
('What is the purpose of using middleware in backend development?', 'To enhance frontend performance', 'To manage user authentication and authorization', 'To create interactive user interfaces ', 'To optimize database queries ', 'To manage user authentication and authorization'),
('Which HTTP method is used to request data from the server without modifying it?', 'GET', 'POST', 'PUT', 'DELETE', 'GET'),
('Which data format is commonly used for exchanging data between the frontend and backend in web applications?', 'XML', 'JSON', 'YAML ', 'CSV', 'JSON'),
('Which backend framework is written in Node.js and widely used for building scalable applications?', ' Django', ' Ruby on Rails', 'Express.js', 'Flask', 'Express.js'),
('What is the purpose of a \"migration\" in backend development? ', 'To optimize database performance', 'To create secure user authentication systems', 'To handle frontend routing', 'To manage changes to the database schema', 'To manage changes to the database schema'),
('Which HTTP status code indicates that a resource could not be found on the server?', '200 OK', '404 Not Found', '500 Internal Server Error', '302 Found', '404 Not Found'),
('Which backend architecture pattern involves breaking down an application into small, independent services that can be developed and deployed separately?', 'Monolithic architecture', 'Microservices architecture', 'MVC (Model-View-Controller) architecture ', 'Event-driven architecture', 'Microservices architecture'),
('Which database query language is commonly used for interacting with relational databases in backend development?', 'SQL (Structured Query Language)', 'NoSQL Query Language ', 'GraphQL', 'MongoDB Query Language', 'SQL (Structured Query Language)'),
('What is the purpose of using caching in backend development?', 'To improve frontend rendering speed', 'To reduce server response time', 'To encrypt sensitive data ', 'To enhance database security', 'To reduce server response time'),
('Which backend technology is used for handling real-time, bi-directional communication between the server and the client? ', 'WebSockets', 'SOAP', ' XML-RPC', 'RESTful API', 'WebSockets'),
('In a backend application, what is the purpose of the \"package.json\" file?', ' To manage backend server configurations', ' To manage backend server configurations', ' To list dependencies and project metadata', 'To store user authentication details', 'To list dependencies and project metadata'),
('Which backend development practice is used to protect sensitive information such as passwords and API keys?', 'Minification', 'Obfuscation', 'Encryption', 'Virtualization', 'Encryption'),
('What is the purpose of load balancing in backend development?', 'To manage database connections efficiently', 'To distribute network traffic across multiple servers', 'To optimize frontend performance ', 'To secure the application from cyber threats', 'To distribute network traffic across multiple servers'),
('Which backend architecture pattern involves storing and managing data in a hierarchical format?', 'MVC (Model-View-Controller) architecture ', 'Microservices architecture', 'Serverless architecture ', 'NoSQL architecture', 'NoSQL architecture'),
('What is the role of a Full Stack Developer?', 'Designing user interfaces and layouts', 'Managing server-side logic and databases', 'Handling frontend development only', 'ocusing solely on cybersecurity', 'Managing server-side logic and databases'),
('What does \"MEAN\" stack stand for? ', 'MongoDB, Express.js, AngularJS, Node.js', 'MySQL, Ember.js, AngularJS, Node.js', 'MongoDB, Express.js, Angular, .NET ', 'ySQL, Express.js, Angular, Node.js', 'MongoDB, Express.js, AngularJS, Node.js'),
('Which database type is commonly used with the MERN stack for Full-Stack Development?', 'SQL database', ' NoSQL database', 'Graph database', ' In-memory database', 'NoSQL database'),
('What is the purpose of \"npm\" in Full Stack Development?', 'To manage frontend layouts and design', ' To handle user authentication and authorization', 'To store and manage frontend assets and dependencies ', 'To store and manage frontend assets and dependencies ', 'To store and manage frontend assets and dependencies '),
('What is the purpose of a \"middleware\" in Full Stack Development?', 'To manage frontend routing and navigation', 'To handle backend server security', 'To optimize frontend rendering speed', 'To process and manage HTTP requests and responses', 'To process and manage HTTP requests and responses'),
('Which HTTP method is commonly used to submit data to be processed to the server? ', 'GET', 'POST', 'PUT', 'DELETE', 'POST'),
('What is the purpose of \"React Native\" in Full Stack Development?', 'To build web applications with React.js', 'To create native mobile applications using JavaScript and React', 'To optimize backend server performance', 'To manage frontend layouts and design', 'To create native mobile applications using JavaScript and React'),
('Which backend technology is used for handling real-time, bi-directional communication between the server and the client in Full Stack Development?', 'WebSockets', 'XML-RPC', 'SOAP', 'RESTful API', 'WebSockets'),
('In a Full Stack Development environment, what is the purpose of \"webpack\"? ', 'To handle backend server security', 'To manage frontend routing and navigation', 'To optimize frontend performance and bundle assets', 'To store and manage frontend assets and dependencies', 'To optimize frontend performance and bundle assets'),
(' What is the purpose of using \"AJAX\" in Full Stack Development?', 'To secure the backend server from cyber threats ', 'To create visually appealing user interfaces', 'To optimize frontend rendering speed', 'To perform asynchronous data exchange between the client and the server', 'To perform asynchronous data exchange between the client and the server'),
('Which backend architecture pattern involves breaking down an application into small, independent services that can be developed and deployed separately?', 'Monolithic architecture', 'Microservices architecture', 'Event-driven architecture ', 'MVC (Model-View-Controller) architecture ', 'Microservices architecture'),
('What is the purpose of a \"migration\" in Full Stack Development?', 'To optimize database performance', 'To create secure user authentication systems', 'To handle frontend routing and navigation', 'To manage changes to the database schema', 'To manage changes to the database schema'),
('Which database query language is commonly used for interacting with relational databases in Full Stack Development?', 'SQL (Structured Query Language)', 'MongoDB Query Language', 'GraphQL', 'NoSQL Query Language', 'SQL (Structured Query Language)'),
('What is the purpose of using caching in Full Stack Development?', 'To improve frontend rendering speed', 'To reduce server response time', 'To encrypt sensitive data', 'To enhance database security ', 'To reduce server response time'),
(' In Full Stack Development, which tool is commonly used for version control and collaboration among developers?', 'Webpack', 'npm', 'Git', 'Babel ', 'Git'),
('What is the purpose of load balancing in Full Stack Development?', 'To manage database connections efficiently', 'To distribute network traffic across multiple servers', 'To optimize frontend performance ', 'To secure the application from cyber threats ', 'To distribute network traffic across multiple servers'),
('Which backend architecture pattern involves storing and managing data in a hierarchical format?', 'MVC (Model-View-Controller) architecture ', 'Microservices architecture', 'Serverless architecture', 'NoSQL architecture', 'NoSQL architecture'),
('What is the primary goal of data analytics?', 'Building artificial intelligence models', 'Predicting future events accurately', 'Identifying patterns and insights from data', 'Developing healthcare solutions', 'Identifying patterns and insights from data'),
('Which statistical measure provides the central tendency of a dataset?', 'Standard deviation', 'Variance', 'Mean', 'Median', 'Mean'),
('What does data normalization aim to achieve in data analytics?', 'Replacing missing data points with average values', 'Converting categorical data into numerical values', 'Scaling numerical data to a standard range', 'Removing outliers from the dataset', 'Scaling numerical data to a standard range'),
('What type of data visualization is suitable for displaying the distribution of a single numerical variable?', 'Scatter plot ', 'Bar chart', 'Histogram', 'Pie chart', 'Histogram'),
('In data analytics, what does the term \"correlation\" refer to?', 'A measure of the accuracy of a predictive model', 'The relationship between two or more variables', 'The process of transforming raw data into meaningful insights', 'The process of data collection from various sources', 'The relationship between two or more variables'),
('Which data analysis technique is used to uncover hidden patterns or groups within a dataset?', 'Regression analysis', 'Clustering analysis', 'Hypothesis testing', 'Time series analysis', 'Clustering analysis'),
('What is the purpose of exploratory data analysis (EDA) in data analytics?', 'Making predictions on future data', 'Drawing conclusions and making decisions', 'Summarizing and visualizing data to understand its characteristics', 'Converting raw data into a structured format', 'Summarizing and visualizing data to understand its characteristics'),
('Which type of data analytics is primarily concerned with historical data and past performance?', 'Descriptive analytics', 'Predictive analytics', 'Prescriptive analytics', 'Diagnostic analytics', 'Descriptive analytics'),
('What is the main benefit of using data analytics in business decision-making?', 'Eliminating the need for human judgment', 'Reducing data storage costs', 'Making data-driven and informed decisions ', 'Automating the entire decision-making process', 'Making data-driven and informed decisions '),
('What is the process of transforming unstructured data into a structured format in data analytics?', 'Data normalization', 'Data cleansing', 'Data mining', 'Data integration', 'Data cleansing'),
('What is the primary goal of artificial intelligence (AI)?', 'Analyzing historical data to identify trends', 'Automating repetitive tasks without human intervention', 'Emulating human intelligence and decision-making', 'Developing advanced healthcare solutions', 'Emulating human intelligence and decision-making'),
('Which subfield of AI focuses on enabling machines to learn from data and improve their performance over time?', 'Natural Language Processing (NLP)', 'Computer Vision', 'Machine Learning', 'Robotics', 'Machine Learning'),
('What does the term \"deep learning\" refer to in the context of AI?', 'A type of unsupervised learning algorithm', 'Training neural networks with a large number of layers', 'Simulating human-like emotions in machines', 'Building complex rule-based systems', 'Training neural networks with a large number of layers'),
('Which type of AI system is capable of making decisions without human intervention and adapting to changing circumstances?', 'Strong AI', 'Weak AI', 'General AI', 'Narrow AI', 'Strong AI'),
('What is the purpose of reinforcement learning in AI?', 'Processing and understanding natural language', 'raining AI models on a large dataset', 'Enabling machines to learn through trial and error', 'Automating repetitive tasks in manufacturing', 'Enabling machines to learn through trial and error'),
('Which AI technology allows machines to interpret and understand human language?', 'Computer Vision', 'Natural Language Processing (NLP)', 'Speech Recognition', 'Virtual Reality (VR)', 'Natural Language Processing (NLP)'),
('What is the main ethical concern related to the use of AI in decision-making?', 'AI systems becoming too expensive to maintain', 'AI replacing human jobs in the workforce', 'AI making decisions beyond human control', 'AI models being too accurate and biased', 'AI making decisions beyond human control'),
('Which type of AI algorithm is used for image recognition tasks?', 'Decision trees', 'K-nearest neighbors ', 'Convolutional Neural Networks (CNNs)', 'Support Vector Machines (SVMs)', 'Convolutional Neural Networks (CNNs)'),
('What is the \"Turing Test\" in the context of AI?', 'A test to measure the processing speed of AI systems', 'A test to evaluate the creativity of AI algorithms', 'A test to determine if a machine can exhibit human-like intelligence', 'A test to assess the accuracy of AI predictions', 'A test to determine if a machine can exhibit human-like intelligence'),
('What is the role of AI in the development of self-driving cars?', ' Analyzing social media data to improve passenger experience', 'Processing and interpreting traffic signals and road signs ', 'Providing real-time weather updates to the car\'s navigation system ', 'Predicting future car maintenance requirements', 'Processing and interpreting traffic signals and road signs '),
('What is the primary goal of applying data science in healthcare?', 'Increasing the cost of medical treatments', 'Identifying patterns and insights from patient data', 'Reducing the number of healthcare facilities', 'Implementing advanced marketing strategies', 'Identifying patterns and insights from patient data'),
('Which data science technique is used to predict patient outcomes and disease progression?', 'Clustering analysis', 'Time series analysis ', 'Predictive modeling ', 'Descriptive analytics', 'Predictive modeling '),
('How is data science applied in medical imaging?', 'Predicting patient medical history', 'Analyzing blood samples', 'Identifying diseases from medical images', 'Designing medical treatment plans', 'Identifying diseases from medical images'),
('Which data analysis technique is used to identify disease patterns across a population?', 'Regression analysis', 'Cluster analysis', 'Time series analysis', 'Genetic algorithms', 'Genetic algorithms'),
('What is predictive modeling in healthcare?', 'Estimating patient wait times in hospitals', 'Identifying potential health risks in patients', ' Creating 3D models of organs for surgical planning', 'Generating personalized treatment plans for patients', 'Identifying potential health risks in patients'),
('How can AI and data science assist in drug discovery?', 'Analyzing financial data for pharmaceutical companies', 'Predicting potential side effects of drugs', 'Developing 3D models of drug molecules', 'Identifying potential drug candidates through data analysis', 'Developing 3D models of drug molecules'),
('Which AI application is used for diagnosing medical conditions by analyzing patient symptoms for healthcare?', 'Natural Language Processing (NLP)', 'Computer Vision', 'Neural Networks', 'Expert Systems', 'Computer Vision'),
('How can data analytics be applied to improve patient healthcare in hospitals?', 'Analyzing customer preferences for hospital services', 'Predicting the number of visitors to a hospital', 'Identifying patterns of hospital readmissions for specific conditions', 'Monitoring hospital financial performance', 'Analyzing customer preferences for hospital services'),
('How can AI-powered chatbots be beneficial in healthcare?', 'Assisting doctors in performing surgeries', 'Analyzing patient lab test results', 'Providing personalized medical advice to patients', 'Monitoring hospital equipment', 'Providing personalized medical advice to patients'),
('What are the potential challenges of implementing AI in healthcare?', 'Data privacy and security concerns', 'High costs of AI software', 'Limited availability of AI algorithms', 'Difficulty in hiring AI developers', 'Difficulty in hiring AI developers');

-- --------------------------------------------------------

--
-- Table structure for table `requ`
--

CREATE TABLE `requ` (
  `r_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `one` varchar(500) NOT NULL,
  `two` varchar(500) NOT NULL,
  `three` varchar(500) NOT NULL,
  `four` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requ`
--

INSERT INTO `requ` (`r_id`, `s_id`, `one`, `two`, `three`, `four`) VALUES
(2, 5, 'Relevant degree/certification in Cybersecurity or related fields.', 'Strong knowledge of network security protocols and tools.', 'Experience in ethical hacking or penetration testing.', 'Familiarity with incident response and risk assessment.'),
(3, 6, 'Relevant degree/certification in Cybersecurity or Information Technology.', 'Understanding of government policies, regulations, and compliance requirements.', 'Security clearance or ability to pass background checks.', 'Experience in risk assessment and incident response.'),
(4, 7, 'Degree/certification in Cybersecurity, Information Security, or related fields.', 'Knowledge of financial systems, banking products, and payment processing.', 'Experience in securing online transactions and preventing fraud.', 'Familiarity with banking regulations and data privacy laws.'),
(5, 11, 'Proficiency in HTML, CSS, and JavaScript.', 'Experience with front-end frameworks like React, Angular, or Vue.js.', 'UI/UX design skills and knowledge of responsive web design.', 'Version control and collaborative development experience.'),
(6, 12, 'Proficiency in server-side programming languages like Java, Python, or PHP.', 'Knowledge of databases and data storage solutions.', 'Experience in server management and cloud platforms (e.g., AWS, Azure).', 'Ability to build and consume RESTful APIs.'),
(7, 13, 'Proficiency in both front-end (HTML, CSS, JavaScript) and back-end technologies.', 'Understanding of system architecture and web application deployment.', 'Knowledge of databases and server-side programming', 'Experience with version control and collaborative development.'),
(8, 8, 'Proficiency in data analysis tools like Python, R, SQL, or Excel.', 'Domain knowledge in the specific industry (e.g., marketing, finance).', 'Data cleaning and preprocessing skills.', 'Strong analytical and problem-solving abilities.'),
(9, 9, 'Strong understanding of machine learning algorithms and deep       learning architectures.', 'Proficiency in programming languages like Python, Java, or C++ for AI implementation.', 'Experience with popular AI frameworks like TensorFlow or PyTorch.', 'Inclination towards continuous learning and staying updated with AI research.'),
(10, 10, 'Degree in Healthcare Informatics, Biostatistics, or related fields.', 'Knowledge of medical terminology, healthcare processes, and data sources.', 'Proficiency in data analysis tools (e.g., Python, R, SQL) for healthcare data.', 'Ability to derive meaningful insights from complex healthcare datasets.');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `marks` int(11) NOT NULL,
  `date` year(4) NOT NULL DEFAULT current_timestamp(),
  `sl` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `s_id`, `marks`, `date`, `sl`) VALUES
(1, 5, 20, '2023', 26),
(1, 12, 60, '2023', 42),
(1, 12, 60, '2023', 43),
(1, 12, 60, '2023', 44),
(1, 12, 70, '2023', 45),
(1, 12, 10, '2023', 46),
(1, 5, 20, '2023', 47);

-- --------------------------------------------------------

--
-- Table structure for table `sector`
--

CREATE TABLE `sector` (
  `s_name` varchar(50) NOT NULL,
  `s_id` int(11) NOT NULL,
  `d_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sector`
--

INSERT INTO `sector` (`s_name`, `s_id`, `d_id`) VALUES
('Cybersecurity', 5, 3),
('Government', 6, 3),
('Banking', 7, 3),
('Data Analytics ', 8, 4),
('Artificial Intelligence', 9, 4),
('Healthcare', 10, 4),
('frontend developer', 11, 5),
('Backend Developer', 12, 5),
('Full Stack Developer', 13, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `desg` varchar(50) NOT NULL,
  `sector` varchar(50) NOT NULL,
  `number` varchar(50) NOT NULL,
  `birthday` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `id`, `mail`, `password`, `description`, `desg`, `sector`, `number`, `birthday`, `address`, `image`) VALUES
('Md akkas uddin', 1, 'akkas@gmail.com', 'akkas123', 'i am a developer i love to program hole day', '', '', '01882072745', '', 'dhanmondi,dhaka', 'akkas.jpg'),
('Ms Momota Banargi', 2, 'momota@gmail.com', 'momota123', 'I am not a developer but i want to become a developer so i come herer to test but i am interest on other sector', '', '', '01882045412', '', 'mirpur,dhaka', 'momota.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desg`
--
ALTER TABLE `desg`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `key_word`
--
ALTER TABLE `key_word`
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `requ`
--
ALTER TABLE `requ`
  ADD PRIMARY KEY (`r_id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`sl`),
  ADD KEY `id` (`id`),
  ADD KEY `s_id` (`s_id`);

--
-- Indexes for table `sector`
--
ALTER TABLE `sector`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `d_id` (`d_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desg`
--
ALTER TABLE `desg`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `requ`
--
ALTER TABLE `requ`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `sector`
--
ALTER TABLE `sector`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
