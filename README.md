**Task Management**
1.Make database and add databse name in .env file
2.use php artisan migrate
3.run

For web-
http://127.0.0.1:8000/ -index url

**For Api Testing**
User Authentication-
**signup api**
http://127.0.0.1:8000/signup 
Keys-[
 name 
 email
 password
 c_password
 ]
 

**login api**
http://127.0.0.1:8000/login 
Key-
email
password

 After successfully Login it provides TOKEN-
**copy your token for next Authentication**
{
    "success": true,
    "data": {
        **"token": "7|blxepndCz3mIdXz8tqDKTXt0g8aDqhtnZRrkVh8wcf187c8d"**,
        "name": "abhi k"
    },
    "message": "User login successfully."
}


**CRUD TASK APIs**
1.Simply select headers section in postman-
2.add key- Authorization 
3.value add- **bearer <api key>** 

**For all data-**
**GET**  http://127.0.0.1:8000/api/
**For Add data-**
**POST** http://127.0.0.1:8000/api/addtask
form data keys-
title, description, due_date

**For Get single data-**
**GET** http://127.0.0.1:8000/api/edit/{pass hardcoded id}
**For Update data-**
**PUT** http://127.0.0.1:8000/api/update/{pass hardcoded id}
**For Delete data-**
**DELETE** http://127.0.0.1:8000/api/delete/{pass hardcoded id}














