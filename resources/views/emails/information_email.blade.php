


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .highlight {
            /* background-color: #d9edf7; Light blue background for highlight */
            padding: 2px 4px;
            border-radius: 4px;
        }
        .container {
            margin: 20px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        

        <p>Welcome <span class="highlight">{{ $mailData['user'] }}</span>,</p>

        <p>I am writing to formally request the personal information of a motor vehicle operator who has been recorded violating traffic laws by running a red light. The details of the incident are as follows:</p>

        <ul>
            <li>Site URL: <span class="highlight">{{ $mailData['role_url'] }}</span></li>
            <li>Email: <span class="highlight">{{ $mailData['data']->email }}</span></li>
            <li>Password: <span class="highlight">{{ $mailData['password'] }}</span></li>
        </ul>


        <p>Thank you for your prompt attention to this matter. I look forward to your response.</p>

        <p>Sincerely,<br>
           <span class="highlight">{{ $mailData['user'] }}</span><br>
           <!-- <span class="highlight">[Electronic Signature]</span></p> -->
    </div>
</body>
</html>
