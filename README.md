# Sentiment Analysis Web Application

## Overview
This project is a sentiment analysis web application that enables users to analyze the sentiment of text inputs. It incorporates HTML/CSS for frontend design, PHP for server-side scripting, and MySQL for database management. The application includes user authentication functionalities such as signup and login.

## Features
- **User Authentication:** Users can securely register (signup) and log in to access the sentiment analysis functionality.
- **Sentiment Analysis:** Utilizes FastAPI and TextBlob for efficient sentiment analysis of user-provided text inputs.
- **Frontend Design:** The frontend interface, developed with HTML and CSS, offers an intuitive user experience.
- **Backend Processing:** PHP manages server-side operations, including user authentication and database interactions.
- **Database Management:** User credentials are securely stored in a MySQL database, ensuring data integrity and security.

## Setup Instructions
1. **Clone the Repository:**
   ```git clone https://github.com/your-username/sentiment-analysis-web-app.git```

2. **Navigate to the Project Directory:**
   ```cd sentiment-analysis-web-app```


3. **Configure the Database:**
- Make database named `aiproject` in mysql.

4. **Start the PHP Server:**
- Deploy PHP scripts to a compatible web server.

5. **Start the FastAPI Server:**
- Navigate to the `backend` directory.
- Install dependencies:
  ```
  pip install -r requirements.txt
  ```
- Run the FastAPI server from main.py:
  ```
  python main.py
  ```

6. **Access the Web Application:**
- Open a web browser and go to the URL where the PHP server is running.

## Contributing
Contributions to enhance the project are welcome! Fork the repository, implement changes, and submit a pull request. For significant alterations, open an issue to discuss the proposed modifications.

## License
This project is licensed under the MIT License. See [LICENSE](LICENSE) for details.
