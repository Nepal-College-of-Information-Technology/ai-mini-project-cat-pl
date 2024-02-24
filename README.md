[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-24ddc0f5d75046c5622901739e7c5dd533143b0c8e959d652212380cedb1ea36.svg)](https://classroom.github.com/a/QRQihaLe)
[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-718a45dd9cf7e7f842a935f5ebbe5719a5e09af4491e668f4dbf3b35d5cca122.svg)](https://classroom.github.com/online_ide?assignment_repo_id=13319105&assignment_repo_type=AssignmentRepo)


# Sentiment Analysis Web Application

This project is a sentiment analysis web application that allows users to analyze the sentiment of text inputs. It combines HTML/CSS for the frontend, PHP for the backend, and MySQL for database management. The application includes user authentication features such as login and signup.

## Features

- **User Authentication:** Users can register (signup) and log in securely to access the sentiment analysis functionality.
- **Sentiment Analysis:** The application utilizes FastAPI and TextBlob to perform sentiment analysis on text inputs provided by users.
- **Frontend Design:** The frontend interface, developed with HTML and CSS, provides an intuitive user experience for interacting with the application.
- **Backend Processing:** PHP handles server-side scripting, managing user authentication processes and communication with the MySQL database.
- **Database Management:** User credentials are securely stored in a MySQL database, ensuring data integrity and security.

## Setup Instructions

1. Clone the repository:
   ```bash
   git clone https://github.com/your-username/sentiment-analysis-web-app.git

    Navigate to the project directory:

    bash

cd sentiment-analysis-web-app

Configure the database:

    Import the SQL file (database.sql) into your MySQL database to create the necessary tables.
    Update the database connection details in the PHP scripts (config.php).

Start the PHP server:

    Deploy the PHP scripts to a web server that supports PHP execution.

Start the FastAPI server:

    Navigate to the backend directory.
    Install dependencies:

    bash

pip install -r requirements.txt

Run the FastAPI server:

bash

        uvicorn main:app --host 0.0.0.0 --port 8000

    Access the web application:
        Open your web browser and navigate to the URL where the PHP server is running.

Contributing

Contributions to improve the project are welcome! Please fork the repository, make your changes, and submit a pull request. For major changes, please open an issue first to discuss the proposed changes.
License

This project is licensed under the MIT License.

css

Replace `your-username` with your GitHub username in the setup instructions section. Additionally, ensure to provide the appropriate database connection details and adjust the deployment steps according to your environment.
