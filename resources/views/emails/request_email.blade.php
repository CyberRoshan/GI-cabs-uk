


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request for Personal Information</title>
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
        

        <p>Dear <span class="highlight">{{ $mailData['user']->vehicle_name }}</span>,</p>

        <p>I am writing to formally request the personal information of a motor vehicle operator who has been recorded violating traffic laws by running a red light. The details of the incident are as follows:</p>

        <ul>
            <li>Citation #: <span class="highlight">{{ $mailData['data']->citation_number }}</span></li>
            <li>Date of Violation: <span class="highlight">{{ $mailData['data']->issue_date }}</span></li>
            <li>Time of Violation: <span class="highlight">{{ $mailData['data']->issue_date }}</span></li>
            <li>Location of Violation: <span class="highlight">{{ $mailData['data']->location }}</span></li>
            <li>License Plate Number: <span class="highlight">{{ $mailData['data']->tag_number }}</span></li>
            <li>Vehicle Description: <span class="highlight">{{ $mailData['data']->offence_description }}</span></li>
        </ul>

        <p>This request is made pursuant to <span class="highlight">[cite relevant state or local laws or regulations]</span>. The information requested is necessary for legal proceedings, enforcement of traffic fines, etc.</p>

        <p>Please provide the following information for the violator:</p>
        <ul>
            <li>Registered Owner’s Full Name</li>
            <li>Registered Owner’s Address</li>
            <li>Vehicle Registration Details</li>
            <li>Any Additional Relevant Information</li>
        </ul>

        <p>If any additional forms or documentation are required to process this request, please inform me at your earliest convenience. I understand the sensitive nature of this information and assure you that it will be handled in strict accordance with applicable privacy laws.</p>

        <p>Thank you for your prompt attention to this matter. I look forward to your response.</p>

        <p>Sincerely,<br>
           <span class="highlight">{{ $mailData['user']->name }}</span><br>
           <!-- <span class="highlight">[Electronic Signature]</span></p> -->
    </div>
</body>
</html>
